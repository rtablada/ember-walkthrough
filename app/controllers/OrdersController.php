<?php

class OrdersController extends EmberAPIController {

	protected $modelName = 'order';

	public function __construct(Order $model)
	{
		$this->model = $model;
	}

}
