<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Website {
	
	public function action_target()
	{
		if(Auth::instance()->logged_in("admin")){
			$id = $this->request->param("id");
			if($id && ($user = ORM::factory("User", $id)) && $user->loaded()){
				Session::instance()->set("flash", array(
					"type"=>"success", 
					"message"=>"U target nu $user->username."
				));
				Auth::instance()->force_login($user, true);
			}
		}
		HTTP::redirect("user");
	}
	
	public function action_user()
	{
		if(!Auth::instance()->logged_in("admin")){
			Session::instance()->set("flash", array(
				"type"=>"error", 
				"message"=>"U heeft geen rechten om gebruikers te wijzigen."
			));
			HTTP::redirect("user");
		}
		
		$this->template->content = View::factory("template/admin/user");

		$id = $this->request->param("id");
		if($id && ($user = ORM::factory("User", $id)) && $user->loaded())
		{
			// Bind user
			$this->template->content->bind("user", $user);
			
			if($this->request->method() == "POST")
			{
				try {
					$user->values($_POST, array("email", "username"))->save();
			
					$meta_keys = array("phone", "education", "snumber", "preeducation", "grade", "comments");
					$meta = $this->request->post("meta");
					foreach($meta_keys as $key){
						$user->meta($key, isset($meta[$key]) ? $meta[$key] : '');
					}
					Session::instance()->set("flash", array(
						"type"=>"success", 
						"message"=>"De gebruiker is succesvol gewijzigd."
					));
				} catch(ORM_Validation_Exception $e){
					$this->template->content->set("errors", $e->errors());
				}
			}
		}
	}

} // End