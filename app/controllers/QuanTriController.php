<?php

class QuanTriController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('backend.login');
	}

	public function postLogin()
	{
		$account  = Input::get('account');
		$password = md5(Input::get('password'));

		$result = Admins::where('account','=',$account)
						->where('password','=',$password)
						->first();
		if ($result) {
			echo "true";
			Session::put('admin',$result->toArray());
		}else{
			echo "false";
		}
	}
	public function getLogout(){
		Session::flush();
		return Redirect::to('/');
	}

	public function postUpdate(){
		$id=Input::get('id');
		$tieu_de=Input::get('tieude');
		$noi_dung=Input::get('noidung');
		if (Input::hasFile('image_edit')) {
			$file = Input::file('image_edit');
			$file_name=uniqid().'-'.date('d-m-Y').'.jpg';
			$dir_save= 'images/';
			$check = $file->move($dir_save,$file_name);
			$new=News::find( ltrim($id,'v') );
			$new->images=$file_name;
			$new->save();
		}
		$new=News::find( ltrim($id,'v') ); //căt chuỗi để lấy id
		$new->tieu_de=trim($tieu_de);
		$new->noi_dung=trim($noi_dung);
		$new->save();
		if($new){
			echo "success";
		}
	}

	public function postPostNew(){
		if (Input::hasFile('image_upload')) {
			
			// Lấy ảnh và tên ảnh
			$file = Input::file('image_upload');
			$file_name=uniqid().'-'.date('d-m-Y').'.jpg';
			$dir_save= 'images/';
			
			if( !is_dir($dir_save) ){
				mkdir($dir_save,'777');
			}
			
			$check = $file->move($dir_save,$file_name);

			// Lấy phần tiêu đề nội dung và flag
			$tieu_de = Input::get('tieude');
			$noi_dung = Input::get('noidung');
			
			switch(Input::get('flag')) {
    			case "TIN TỨC":
       			 	$flag = "tinmoi";
        		break;
    			case "SỰ KIỆN":
       			 	$flag = "sukien";
        		break;
        		case "TUYỂN DỤNG":
       			 	$flag = "tuyendung";
        		break;
			}

			// Lưu bài đăng vào table news
			$post = new News;
			$post->tieu_de  = $tieu_de;
			$post->noi_dung = $noi_dung;
			$post->images   = $file_name;
			$post->flag 	= $flag;
			$post->save();
			
			if ($post) {
				echo "true";
			}
		}		
	}

	public function postDelete(){
		$id=Input::get('id');
		$delete=News::find( ltrim($id,'v') )->delete(); //căt chuỗi để lấy id
		if($delete){
			echo "success";
		}
	}

	public function postPassword(){
		$last_pass = md5(Input::get("last_pass"));
		$new_pass = md5(Input::get('new_pass'));
		$check = Admins::where('account','admin')->where('password',$last_pass)->first();
		if ($check) {
			Admins::where('account', 'admin')->update(array('password' => $new_pass));
			echo "true";
		}else{
			echo "false";
		}
	}


}
