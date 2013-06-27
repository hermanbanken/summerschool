<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Website {

	public function action_login()
	{
		if(Auth::instance()->logged_in()){
			HTTP::redirect("user");
		}
		
		$this->template->content = View::factory("login")->set('username', '');
		if($this->request->method() == "POST"){
			$s = Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
			if($s){
				HTTP::redirect("user");
				exit;
			} else {
				$this->template->content->set("username", $this->request->post('username'));
				$this->template->content->set("message", "Uw gebruikersnaam of wachtwoord wordt niet herkend. Probeer het nogmaals.");
			}
		}
	}
	
	public function action_subscribe()
	{
		if(Auth::instance()->logged_in()){
			HTTP::redirect("user");
			exit;
		}
			
		$this->template->content = View::factory("subscribe")
			->set('username', $this->request->post('username'))
			->set('email', $this->request->post('email'))
			->bind('meta', $meta);
		
		if($this->request->method() == "POST"){
			$meta = Arr::extract($this->request->post("meta"), array(
				'phone', 
				'education', 
				'snumber', 
				'preeducation', 
				'grade', 
				'comments'
			), '');
			
			try {
				$metaModels = array();
				foreach($meta as $key => $val){
					$m = ORM::factory("UserMeta")->values(
						array("key"=>$key, "value"=>$val)
					);
					$m->check();
					$metaModels[] = $m;
				}
			
				$user = ORM::factory("User")->values($_POST, array("username", "email"));
				$pass = $user->password = Text::random();
				$user->check();
			
				$user->save();
				foreach($metaModels as $m){
					$m->user = $user;
					$m->save();
				}

				$this->send_pass($user, $pass);
				Auth::instance()->force_login($user, false);

				Session::instance()->set("flash", array(
					"type"=>"success", 
					"message"=>"Uw account is aangemaakt en u bent nu automatisch ingelogd. Op uw emailadres ontvangt u uw logingegevens."
				));					
				HTTP::redirect("user");
				
			} catch(ORM_Validation_Exception $e){
				$this->template->content->set("errors", $e->errors());
			} catch(Database_Exception $e){
				$user->delete();
				Session::instance()->set("flash", array(
					"type"=>"error",
					"message"=>"Er ging iets mis bij het opslaan. Probeer het nogmaals of stuur een mail naar summerschool@ch.tudelft.nl en vermeld code 500."
				));
			}
		}
	}
	
	public function action_logout()
	{
		Auth::instance()->logout();
		HTTP::redirect("");
	}
	
	public function action_forgot()
	{
		$user = ORM::factory("User")->where("email", "=", $this->request->post("email"))->find();
		if($user->loaded() && $user->email === $this->request->post("email"))
		{
			$pass 	 = Text::random();
			$this->send_pass($user, $pass);
			$user->update_user(array(
				'password' => $pass, 
				'password_confirm' => $pass
			), array("password"));
		}
		$m = "Er is een mail gestuurd naar het opgegeven mailadres";
		HTTP::redirect("user/login?success=$m");
		exit;
	}
	
	public function send_pass($user, $pass = false){
		$pass 	 = $pass ? $pass : Text::random();
		$to      = $user->email;
		$subject = "Summerschool wachtwoord";
		$message = 'Beste '.$user->username.",\n\n Er is via de website van de Summerschool een nieuw wachtwoord aangevraagd voor uw account. Het nieuwe wachtwoord is \"$pass\".\n\nMet vriendelijke groet,\nHerman Banken";
		$headers = 'From: coi@ch.tudelft.nl' . "\r\n" . 'Reply-To: coi@ch.tudelft.nl';

		return mail($to, $subject, $message, $headers);
	}
	
	public function action_index()
	{
		if(!Auth::instance()->logged_in()){
			HTTP::redirect("user/login");
			exit;
		}
		$this->template->content = View::factory("dashboard");
	}
	
	public function action_exam()
	{
		$id = $this->request->param("id");
		
		if(!Auth::instance()->logged_in()){
			HTTP::redirect("user/login");
			exit;
		}
		
		$this->template->content = View::factory("exam")->bind('exam', $exam)->bind("questions", $questions);
		
		$exam = ORM::factory("exam", $id);
		$questions = $exam->questions->find_all();
		
		if($this->request->method() == "POST"){
			
		}
	}

} // End