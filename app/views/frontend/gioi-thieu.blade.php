<?php 
	$menu = 1;	
?>

@extends('frontend.layout.master')

@section('title')
	Trang Chủ
@stop
@section('addcss')
	<link rel="stylesheet" type="text/css" href="{{url('css/new-css.css')}}">
@stop
@section('listing')

<section id="bh_right_content" class="bh_transition">
	<div class="ml_xam_chim"></div>
	<div class="ml_margin_r_content">

		<div class="item item1">
				<pre>V Ề   C H Ú N G   T Ô I</pre>
				<ul class="wrapper">
					<li>
						<span>2001  -  2015</span>
						<p>Kính Thưa,<br>
 Mục tiêu hướng đến lớn nhất của chúng tôi là trở thành nhà thầu cơ điện số một ở Việt Nam. chúng tôi luôn học hỏi những ưu điểm về công nghệ của nhà thầu ,nhà sản xuất quốc tế  đồng thời sửa chữa những điều chưa phù hợp của họ với thị trường Việt Nam.</p>
 					</li>
				</ul>
		</div>
		<div class="item item2">
				<ul class="wrapper">
					<li>
						<span>2001</span>
						<p>Thành lập công ty với ngành nghề chính là cung cấp lắp đặt hệ thống điều hòa, thông gió, các thiết bị nhiệt cho các công trình, dự án.</p>
					</li>
					<li>
						<span>2006</span>
						<p>lắp đặt, sửa chữa, bảo dưỡng các hệ thống cung cấp gas, hệ thống đổ rác tự động đầu tiên ở Việt Nam  cho toà nhà 71 Nguyễn Chí Thanh.</p>
					</li>
					<li>
						<span>2009</span>
						<p>Áp dụng hệ thống quản lý chất lượng ISO 9001 - 2008. Thực Hiện được 40 dự án lớn nhỏ toàn quốc</p>
					</li>
					<li>
						<span>2011</span>
						<p>Hoàn Thiện Xây dựng nhà máy tại Khu công nghiệp Nam Thăng Long - Hà Nội.Kí Hợp Đồng thi công điều hoà hệ thống VRV TOSHIBA Carrier trị giá 3.5 triệu USD</p>
					</li>
					<li>
						<span>2014</span>
						<p>Thành lập Trung tâm tư vấn du học Phương Anh. Đạt doanh thu 300 tỷ cho phần điều hoà công nghiệp . Kí hợp đồng thi công dự án bệnh viên đa khoa Sóc trăng trị giá 2.5 triệu USD</p>
					</li>
					<li>
						<span>2015</span>
						<p>Lắp đặt dây chuyền sản xuất ống gió tự động  với công suất 3000m2 ống gió vuông /ngày.</p>
					</li>
				</ul>
		</div>
	</div>
</section>
@stop

@section('addjs')
	<script type="text/javascript">
		$(window).on('load',function(){
			$('.ml_gt').addClass('ml_menu_actived');
			$('body').imagesLoaded(function(){
				$('#bh_left_content').css({'left':'0px','opacity':'1'});
				$('#bh_right_content').css({'margin-left':'627px','opacity':'1'});
			})
		})
	</script>
	
@stop