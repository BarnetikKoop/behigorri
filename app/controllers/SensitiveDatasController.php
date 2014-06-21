<?php

class SensitiveDatasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sensitivedatas
	 *
	 * @return Response
	 */
	public function index()
	{
            $this->layout->content = View::make('sensitiveDatas.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sensitivedatas/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sensitivedatas
	 *
	 * @return Response
	 */
	public function store()
	{
            $validator = Validator::make(Input::all(), array(
                'name' => 'required|unique',
                'value' => 'required'
            ));
            if ($validator->passes()) {
                $datum = App::make('SensitiveDatum');
                $datum->fill(Input::all());
                $datum->save();
            }
            
	}

	/**
	 * Display the specified resource.
	 * GET /sensitivedatas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sensitivedatas/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sensitivedatas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sensitivedatas/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}