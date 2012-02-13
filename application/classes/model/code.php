<?php

class Model_Code extends ORM
{
	protected $_belongs_to = array(
		'phone'    => array(
		   'model'         => 'phone',
		   'foreign_key' => 'phone_id',
			),
		'vote'    => array(
		   'model'         => 'vote',
		   'foreign_key' => 'vote_id',
			),
		);
};
