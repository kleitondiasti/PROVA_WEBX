<?php

App::uses('AppModel', 'Model');

class Email extends AppModel {

	public $validate = array(
		'email' => array(
	    	'ruleisUnique' => array(
	        	'rule' => 'isUnique',
	        	'message' => 'Email já cadastrado'
	        )
	    )
	);
}

?>
