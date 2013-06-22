<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Subscribe extends Controller {

	public function action_interest()
	{
		$to      = 'hermanb@ch.tudelft.nl';
		$subject = 'Summerschool interesse';
		$message = "Automatisch bericht vanaf website. Iemand heeft zijn interesse getoond. Het volgende e-mailadres is opgegeven: \n\n".$this->request->post("mail");
		$headers = 'From: summerschool@wisv.ch' . "\r\n" .
		    'Reply-To: hermanb@ch.tudelft.nl' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);
		
		HTTP::redirect("/?success=1");
	}

} // End