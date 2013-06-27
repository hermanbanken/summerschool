<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Default extends Controller_Website {

	public function action_index()
	{
		$this->template->content = View::factory("welcome");
	}
	
	public function action_contact()
	{
		$email = $this->request->post("email");
		$this->request->post("message");
		
		$mailregex = "/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i";
		if(preg_match($mailregex, $email))
		{
			$to      = "summerschool@ch.tudelft.nl";
			$subject = "Summerschool vraag";
			$message = "Via de summerschool-website is de volgende vraag gesteld door ".htmlentities($email).": \n--------------------------\n\n".$this->request->post("message");
			$headers = "From: $email\r\nReply-To: $email";

			mail($to, $subject, $message, $headers);
			Session::instance()->set("flash", array(
				"type"=>"success", 
				"source"=>"contact",
				"message"=>"Uw mail is verstuurd. U hoort zo spoedig mogelijk van ons."));
		} else {
			Session::instance()->set("flash", array(
				"type"=>"error", 
				"source"=>"contact",
				"message"=>"Uw emailadres is ongeldig."));
		}
		
		HTTP::redirect("?message=".urlencode($this->request->post("message"))."#contact");
	}

} // End