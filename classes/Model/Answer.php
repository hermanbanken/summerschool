<?php defined('SYSPATH') or die('No direct script access.');

class Model_Answer extends ORM {
	protected $_belongs_to = array(
		'question' => array("foreign_key" => "question"),
		'user' => array("foreign_key" => "user"),
	);
}