<?php

class Model_Range extends ORM
{
	protected $_belongs_to = array(
		'network'    => array(
		   'model'         => 'network',
		   'foreign_key' => 'network_id',
			),
		'region'    => array(
		   'model'         => 'region',
		   'foreign_key' => 'region_id',
			),
		);
};
