<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usermeta extends ORM {
	protected $_table_name = 'user_meta';
	protected $_belongs_to = array('user' => array());

	public function rules()
	{
		return array(
			"value" => array(
				array(array($this,"validatevalues"),array(":model",":value",':validation'))
			)
		);
	}
	public function validatevalues($model, $value, Validation $object){
		switch($model->key){
			case 'phone':
				if(!preg_match("/^(06|00316|\+3..)[\d\-]{8}$/", $value)) $object->error($model->key, "invalid phonenumber");
			break;
			case 'grade':
				if(!preg_match("/^(10|\d|\d.\d)$/", $value)) $object->error($model->key, "invalid number");
			break;
			case 'snumber':
				if(!preg_match("/^$|^[\d]{7,8}$/", $value)) $object->error($model->key, "invalid snumber");
			break;
			case 'education':
				if(!preg_match("/^(TI|EE|TW)$/", $value)) $object->error($model->key, "invalid education");
			break;
		}
	}
}
