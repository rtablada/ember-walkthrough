<?php

class ItemsController extends EmberAPIController {

	protected $modelName = 'item';

	public function __construct(Item $model)
	{
		$this->model = $model;
	}

}
