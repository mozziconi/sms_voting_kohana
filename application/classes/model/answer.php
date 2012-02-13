<?php

class Model_Answer extends ORM
{
	protected $_belongs_to = array(
		'poll'    => array(
		   'model'         => 'poll',
		   'foreign_key' => 'poll_id',
			),
		);
};
