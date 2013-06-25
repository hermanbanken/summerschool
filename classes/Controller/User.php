<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Website {

	public function action_login()
	{
		if(Auth::instance()->logged_in()){
			HTTP::redirect(URL::site("user"));
			exit;
		}
			
		$this->template->content = View::factory("login");
		if($this->request->method() == "POST"){
			$s = Auth::instance()->login($this->request->post('username'), $this->request->post('password'));
			if($s){
				HTTP::redirect(URL::site("user"));
				exit;
			} else {
				$this->template->content->set("username", $this->request->post('username'));
				$this->template->content->set("message", "Uw gebruikersnaam of wachtwoord wordt niet herkend. Probeer het nogmaals.");
			}
		}
	}
	
	public function action_logout()
	{
		
	}
	
	public function action_index()
	{
		$this->template->content = View::factory("welcome");
	}

} // End