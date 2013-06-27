<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
	protected $_has_many = array(
		'usermeta' => array(),
		
		'user_tokens' => array('model' => 'User_Token'),
		'roles'       => array('model' => 'Role', 'through' => 'roles_users'),
	);
	
	public function meta($key, $value=null)
	{
		if($value != null){
			$m = $this->usermeta->where("user_id", "=", $this->id)->where("key", "=", $key)->find();
			if($m->loaded())
				$m->set("value", $value)->save();
			else
				ORM::factory("Usermeta")->values(array(
					"key" => $key,
					"value" => $value
				))->set('user', $this)->save();
			return $this;
		} else {
			return $this->usermeta->where("key", "=", $key)->find()->value;	
		}
	}
}