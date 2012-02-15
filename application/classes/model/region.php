<?php

class Model_Region extends ORM
{
	protected $_has_many = array(
		'polls'    => array(
		   'model'         => 'poll',
		   'through' => 'polls_regions',
			),
		);
};
