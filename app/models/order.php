<?php

class Order extends Rtablada\EloquentEmber\Model
{
	protected $with = array('items');
	
	protected $guarded = array();
	public $timestamps = false;

	public function getDates()
	{
	    return array('ordered_date');
	}

	public function items()
	{
		return $this->hasMany('Item');
	}
}
