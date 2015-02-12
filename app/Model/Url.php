<?php

App::uses('AppModel', 'Model');

class Url extends AppModel {

	public $validate = array(
		'url' => array(
	    	'ruleisUnique' => array(
	        	'rule' => 'isUnique',
	        	'message' => 'URL já cadastrada'
	        )
	    )
	);	
}

?>
