<?php 
	$menu = 1;
?>
@extends('frontend.layout.master')

@section('title')
LĨNH VỰC HOẠT ĐỘNG
@stop
@section('addcss')
	<link rel="stylesheet" type="text/css" href="{{url('css/new-css.css')}}">
@stop
@section('note')
<div class="note bh_transition bh_translateYbefore">
	<h4>L O R E M   I P S U M </h4>
	<p>Cung cấp, thi công lắp đặt các dự án điều hòa không khí và thông gió (HVAC) và các hệ thống M & E khác, sản xuất kinh doanh các sản phẩm gia công cơ khí; kinh doanh điều hòa công nghiệp và dân dụng, ngoài ra công ty còn tham gia đầu tư, kinh doanh bất động sản và cung cấp dịch vụ tư vấn du học - xuất khẩu lao động...</p>
</div>
@stop

@section('listing')
	<section class="bh_lv_right_content bh_transition">
		<div class="wp_frame_right">
			<div class="item item1">
				<ul class="wrapper">
					<li>
						<img src="images/item5.jpg" alt="">
						<a href="{{url('/linh-vuc/nha-may-xi-nghiep')}}"><span>nhà máy xí nghiệp</span></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a   class="link_to" data-link="link_nmxn" href="{{url('/linh-vuc/nha-may-xi-nghiep')}}">TÌM HIỂU THÊM</a>
					</li>
					<li>
						<img src="images/item5.jpg" alt="">
						<a href="{{url('/linh-vuc/dieu-hoa-cong-nghiep')}}"><span>Điều Hòa Công Nghiệp</span></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a  class="link_to" data-link="link_dhcn" href="{{url('/linh-vuc/dieu-hoa-cong-nghiep')}}">TÌM HIỂU THÊM</a>
					</li>
					<li>
						<img src="images/item5.jpg" alt="">
						<a href="{{url('/linh-vuc/du-hoc')}}"><span>Du học và xuất khẩu lao động </span></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a  class="link_to" data-link="link_duhoc" href="{{url('/linh-vuc/du-hoc')}}">TÌM HIỂU THÊM</a>
					</li>
				</ul>
			</div>
			<div class="item item2">
				<ul class="wrapper">
					<li>
						<img src="images/item5.jpg" alt="">
						<a href="{{url('/linh-vuc/thi-cong-du-an')}}"><span>Thi công dự án</span></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a  class="link_to" data-link="link_tcda" href="{{url('/linh-vuc/thi-cong-du-an')}}">TÌM HIỂU THÊM</a>
					</li>
					<li>
						<img src="images/item5.jpg" alt="">
						<a href="{{url('/linh-vuc/bat-dong-san')}}"><span>bất động sản</span></a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<a  class="link_to" data-link="link_bds" href="{{url('/linh-vuc/bat-dong-san')}}">TÌM HIỂU THÊM</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
@stop
@section('addjs')
	<script type="text/javascript">
		$(window).on('load',function(){
			$('.ml_lvhd').addClass('ml_menu_actived');
			setTimeout(function(){
				$('#bh_left_content .note').addClass('translateY');
			},200);
			
			$('body').imagesLoaded(function(){
				$('#bh_left_content').css({'left':'0px','opacity':'1'});
				$('.bh_lv_right_content').css({'margin-left':'627px','opacity':'1'});
			})
		})
	</script>
@stop