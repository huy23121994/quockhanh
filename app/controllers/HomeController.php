<?php

class HomeController extends BaseController {
	public function getIndex(){
		return View::make('frontend.loading');
	}
	public function getGioiThieu(){
		return View::make('frontend.gioi-thieu');
	}
	public function getLinhVucHoatDong(){
		return View::make('frontend.linh-vuc');
	}
	public function getLinhVucChiTiet(){
		return View::make('frontend.linh-vuc-chi-tiet');
	}
	public function postLinhVucChiTiet(){
		$data['link'] = Input::get('link');
		Session::put('link', $data['link']);
		echo "true";
	}
	public function getTinTuc(){
		$data['tintuc']=News::where('flag','tinmoi')->orderBy('id','desc')->get();
		$data['tintuc1']=News::where('flag','tinmoi')->orderBy('id','desc')->first();
		$data['sukien']=News::where('flag','sukien')->orderBy('id','desc')->get();
		$data['sukien1']=News::where('flag','sukien')->orderBy('id','desc')->first();
		$data['tuyendung']=News::where('flag','tuyendung')->orderBy('id','desc')->get();
		$data['tuyendung1']=News::where('flag','tuyendung')->orderBy('id','desc')->first();
		return View::make('frontend.tintuc',$data);
	}
	public function getTin($flag,$id){
		$data['news']=News::where('flag',$flag)->orderBy('id','desc')->get();
		$data['new']=News::where('id',$id)->first();
		$data['top']=News::where('id',$id)->orderBy('id','desc')->first();
		switch ($flag) {
			case 'tinmoi':
				$data['title']='TIN TỨC';
				break;
			case 'sukien':
				$data['title']='SỰ KIỆN';
				break;
			case 'tuyendung':
				$data['title']='TUYỂN DỤNG';
				break;
			
			default:
				$data['title']='TIN TỨC';
				break;
		}
		return View::make('frontend.view-id',$data);
	}
	public function getDoiTac(){
		return View::make('frontend.doi-tac');
	}

}
