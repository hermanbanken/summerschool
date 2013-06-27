<?php defined('SYSPATH') or die('No direct script access.');

class Model_Exam extends ORM {
	protected $_has_many = array('questions' => array('foreign_key' => 'exam'));
}