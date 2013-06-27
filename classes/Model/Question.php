<?php defined('SYSPATH') or die('No direct script access.');

class Model_Question extends ORM {
	protected $_belongs_to = array('exam' => array("foreign_key" => "exam"));
}