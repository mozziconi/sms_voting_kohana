<?php

class Model_Poll extends ORM
{	
	protected $_has_many = array(
		'answers'	=> array(
			'model'			=> 'answer',
			'foreign_key'	=> 'poll_id',
		),
		'votes'		=> array(
			'model'			=> 'vote',
			'foreign_key'	=> 'poll_id',
		),
		'regions'	=> array(
			'model'			=> 'region',
			'through'		=> 'polls_regions',
		),
    );
};
