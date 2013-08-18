<?php

class Order extends Eloquent
{
	protected $guarded = array();
	public $timestamps = false;

	public function getDates()
	{
	    return array('ordered_date');
	}
}
