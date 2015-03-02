<?php
/*
Model names are set in singular.

Every Model extends AppModel,
you can use ir (AppModel) to set defaults,
like extra validation methods.
 */
class Post extends AppModel {
	public $validate = array(
		'title' => array('rule' => 'notEmpty'),
		'body' => array('rule' => 'notEmpty')
	);
}
