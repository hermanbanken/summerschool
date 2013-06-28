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
					$m = ORM::factory("Usermeta")->values(
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

				$token = md5($user->id.$user->username.$user->password);
				$this->send_pass($user, "Beste ".$user->username.",\n\n U heeft u ingeschreven voor de wachtlijst van de Wiskunde-B Summerschool van de faculteit EWI. Uw gebruikersnaam is uw emailadres en uw tijdelijke wachtwoord is \"$pass\". Verifieer uw account via deze link: ".URL::site("user/verify?token=$token", true).".\n\nMet vriendelijke groet,\nHerman Banken", $pass);
				Auth::instance()->force_login($user, false);

				Session::instance()->set("flash", array(
					"type"=>"success", 
					"message"=>"Uw account is aangemaakt en u bent nu automatisch ingelogd. Op uw emailadres ontvangt u een verificatielink en een tijdelijk wachtwoord. Verifieer uw emailadres om in te kunnen loggen."
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
			$this->send_pass($user, false, $pass);
			$user->update_user(array(
				'password' => $pass, 
				'password_confirm' => $pass
			), array("password"));
		}
		$m = "Er is een mail gestuurd naar het opgegeven mailadres";
		HTTP::redirect("user/login?success=$m");
		exit;
	}
	
	public function send_pass($user, $message = false, $pass = false){
		$pass 	 = $pass ? $pass : Text::random();
		$to      = $user->email;
		$subject = "Summerschool wachtwoord";
		$message = $message ? $message : 'Beste '.$user->username.",\n\n Er is via de website van de Summerschool een nieuw wachtwoord aangevraagd voor uw account. Het nieuwe wachtwoord is \"$pass\".\n\nMet vriendelijke groet,\nHerman Banken";
		$headers = 'From: coi@ch.tudelft.nl' . "\r\n" . 'Reply-To: summerschool@ch.tudelft.nl';

		return mail($to, $subject, $message, $headers);
	}
	
	/**
	 * Display a dashboard with your profile and all available exams and homework.
	 */
	public function action_index()
	{
		if(!Auth::instance()->logged_in()){
			HTTP::redirect("user/login");
			exit;
		}
		$this->template->content = View::factory("dashboard");
	}
	
	/**
	 * Display an exam and allow editing
	 */
	public function action_exam()
	{
		$id = $this->request->param("id");
		
		if(!Auth::instance()->logged_in()){
			HTTP::redirect("user/login");
			exit;
		}
		
		$user = Auth::instance()->get_user();
		$this->template->content = View::factory("exam")
			->bind('exam', $exam)
			->bind("questions", $questions);
		
		$exam = ORM::factory("Exam", $id);
		$questions = $exam->questions->find_all();
		
		if($this->request->method() == "POST"){
			$answers = $this->request->post("answer");
			foreach($answers as $aid => $a){
				$answer = ORM::factory("Answer")
					->where("user", "=", $user->id)
					->where("question", "=", $aid)
					->find();
				
				$answer
					->set("user", $user)
					->set("question", $aid)
					->set("answer", $a)
					->save();
			}
		}
		

		$this->template->content->set("answers", ORM::factory("Answer")->where("user", "=", $user->id)->find_all());
	}
	
	/**
	 * Users get a verification link after subscribing. 
	 * This link will be verified using this action.
	 * @TODO: force login user
	 */
	public function action_verify()
	{
		$token = $this->request->query("token");

		$user = ORM::factory("User")->where(DB::expr("MD5(CONCAT(id,username,password))"), "=", $token)->find();
		if($user->loaded() && !$user->has("roles", 1)){
			// Login user
			Auth::instance()->force_login($user, true);
			
			$user->add("roles", 1);
			Session::instance()->set("flash", array(
				"type"=>"success",
				"message"=>"Uw account is geverifieerd. <a href='".URL::site("user/password")."'>Wijzig uw wachtwoord</a>."
			));
		} else {
			Session::instance()->set("flash", array(
				"type"=>"error",
				"message"=>"Uw account is al geverifieerd of de code klopt niet."
			));
		}
		
		$this->template->content = View::factory("welcome");
	}
	
	/**
	 * Allow users to change their password
	 */
	public function action_password()
	{
		if(!Auth::instance()->logged_in()){
			HTTP::redirect("user/login");
		}
		
		$this->template->content = View::factory("password");
		if($this->request->method() == "POST" && $_POST['password'] === $_POST['password_confirm']){
			try {
				
				// Validate current password
				if(!Auth::instance()->check_password($_POST['old_password'])){
					Session::instance()->set("flash", array(
						"type"=>"error",
						"source"=>"password",
						"message"=>"Uw oude wachtwoord klopt niet."
					));
					return;
				}
				
				// Update user
				Auth::instance()->get_user()->update_user($_POST, array("password"));
				Session::instance()->set("flash", array(
					"type"=>"success",
					"source"=>"password",
					"message"=>"Uw wachtwoord is gewijzigd."
				));
			} catch(ORM_Validation_Exception $e){
				// Invalid password or wrong confirm
				Session::instance()->set("flash", array(
					"type"=>"error",
					"source"=>"password",
					"message"=>"Het wachtwoord is niet voldoende complex. Gebruik minimaal 8 karakters."
				));
			}
		} elseif($this->request->post("password") !== $this->request->post('password_confirm')) {
			Session::instance()->set("flash", array(
				"type"=>"error",
				"source"=>"password",
				"message"=>"De wachtwoorden komen niet overeen."
			));
		}
		
	}

} // End