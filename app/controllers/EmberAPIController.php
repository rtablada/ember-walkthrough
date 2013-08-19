<?php

class EmberAPIController extends BaseController {

	protected $model;

	protected $modelName;

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if ($ids = Input::get('ids')) {
			if (is_array($ids)) {
				return $this->model->whereIn('id', $ids)->get()->toEmberArray();
			} else {
				return $this->model->findOrFail($ids)->toEmberArray();
			}
		} else {
			return $this->model->all()->toEmberArray();
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::json();
		$model = $this->model->create($input->get($modelName));
		return $model->toEmberArray();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$model = $this->model->findOrFail($id);

		return $model->toEmberArray();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$model = $this->model->findOrFail($id);

		$input = Input::json();
		$model->update($input->get($modelName));

		return $model->toEmberArray();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->model->destroy($id);

		return Response::make(null, 204);
	}

}
