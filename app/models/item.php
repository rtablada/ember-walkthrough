<?php

class Item extends Rtablada\EloquentEmber\Model
{
	protected $guarded = array();
	public $timestamps = false;

	public function order()
	{
		$this->belongsTo('Order');
	}
}
