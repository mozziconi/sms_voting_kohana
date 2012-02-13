<?php

class Model_Poll extends ORM
{	
	protected $_belongs_to = array(
		'region'    => array(
		   'model'         => 'region',
		   'foreign_key' => 'region_id',
			),
		);
	protected $_has_many = array(
      'answers'    => array(
                   'model'         => 'answer',
                   'foreign_key' => 'poll_id',
               ),
      'votes'    => array(
                   'model'         => 'vote',
                   'foreign_key' => 'poll_id',
               ),
    );
};
