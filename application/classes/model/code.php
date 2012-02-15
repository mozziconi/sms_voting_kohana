<?php

class Model_Code extends ORM
{
	protected $_belongs_to = array(
		'phone'    => array(
		   'model'         => 'phone',
		   'foreign_key' => 'phone_id',
			),
		'poll'    => array(
		   'model'         => 'poll',
		   'foreign_key' => 'poll_id',
			),
		);
};
