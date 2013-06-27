<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
	protected $_has_many = array(
		'usermeta' => array(),
		
		'user_tokens' => array('model' => 'User_Token'),
		'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
	);
}