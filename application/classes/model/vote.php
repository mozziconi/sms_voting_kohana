<?php

class Model_Vote extends ORM
{
	protected $_belongs_to = array(
		'phone'    => array(
		   'model'         => 'phone',
		   'foreign_key' => 'phone_id',
			),
		'code'    => array(
		   'model'         => 'code',
		   'foreign_key' => 'code_id',
			),
		'poll'    => array(
		   'model'         => 'poll',
		   'foreign_key' => 'poll_id',
			),
		'answer'    => array(
		   'model'         => 'answer',
		   'foreign_key' => 'answer_id',
			),
		);
};
