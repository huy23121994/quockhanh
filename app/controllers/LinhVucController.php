<?php

class LinhVucController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getNhaMayXiNghiep()
	{
		return View::make('frontend.nha-may-xi-nghiep');
	}


	public function getThiCongDuAn()
	{
		return View::make('frontend.thi-cong-du-an');
	}

	public function getDieuHoaCongNghiep()
	{
		return View::make('frontend.dieu-hoa-cong-nghiep');
	}

	public function getBatDongSan()
	{
		return View::make('frontend.bat-dong-san');
	}

	public function getDuHoc()
	{
		return View::make('frontend.du-hoc');
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
