<?php

class Model_Phone extends ORM
{
	protected $_belongs_to = array(
		'range'    => array(
		   'model'         => 'range',
		   'foreign_key' => 'range_id',
			),
		);
	protected $_has_many = array(
      'codes'    => array(
                   'model'         => 'code',
                   'foreign_key' => 'phone_id',
               )
    );
};
