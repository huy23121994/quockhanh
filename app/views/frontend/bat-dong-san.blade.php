@extends('frontend.linh-vuc-chi-tiet')
@section('title')
Bất Động Sản
@stop
@section('listing')
	
	<section class="bh_bds_content bh_transition bh_AnimateYbefore">
		<div class="ml_bds_frame">
			<div class="top">
				<h3>DỰ  ÁN  ĐÃ  ĐẦU  TƯ</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
			</div>
			<ul class="list_bds click_slide">
				<li data-tab="tab1">
					<img src="{{url('/images/6_bat_dong_san/1.jpg')}}" alt="">
					<h4>1000 m2 TẦNG 9 FLOWER GARDEN</h4>
					<p>Cho thuê văn phòng tại Tầng 9 - Tòa nhà Diamond Flower - Đường Lê Văn Lương</p>
				</li>
				<li data-tab="tab2">
					<img src="{{url('/images/6_bat_dong_san/2.jpg')}}" alt="">
					<h4>TÒA VĂN PHÒNG NAM THĂNG LONG</h4>
					<p>Cho thuê 2000m2 nhà xưởng tại lô B2-4-2 Khu công nghiệp Nam Thăng Long - Từ Liêm - Hà Nội.</p>
				</li>
			</ul>

			{{-- Phần slide này sẽ được cmt --}}
			{{-- <div class="bh_slide"></div>
			<div class="slide_tab">
				<ul>
					<li class="tab1">
						<img src="{{url('/images/6_bat_dong_san/1.jpg')}}" alt="">
						<h4>TÒA VĂN PHÒNG NAM THĂNG LONG</h4>
					</li>
					<li class="tab2">
						<img src="{{url('/images/6_bat_dong_san/2.jpg')}}" alt="">
						<h4>1000 m2 TẦNG 9 FLOWER GARDEN</h4>
					</li>
					<li class="tab3">
						<img src="{{url('/images/Untitled.jpg')}}" alt="">
						<h4>2000 m2 NHÀ XƯỞNG</h4>
					</li>
					<li class="tab4">
						<img src="{{url('/images/Untitled.jpg')}}" alt="">
						<h4>3000 m2 NHÀ XƯỞNG</h4>
					</li>
					<li class="tab5">
						<img src="{{url('/images/Untitled.jpg')}}" alt="">
						<h4>4000 m2 NHÀ XƯỞNG</h4>
					</li>
					<li class="tab6">
						<img src="{{url('/images/Untitled.jpg')}}" alt="">
						<h4>5000 m2 NHÀ XƯỞNG</h4>
					</li>
				</ul>
				<i class="flaticon-arrow413 next"></i>
				<img class="pre" src="{{url('/images/directional30.png')}}" alt="">
			</div> --}}
			{{-- Hết phần slide --}}
		
		</div>
	</section>
	{{-- Hết phần bất động sản --}}

@stop
@section('addjs')
	<script type="text/javascript" src="{{url('js/my_slide.js')}}"></script>
	<script type="text/javascript">

		$(window).on('load',function(){
			$('.ml_bds').addClass('active');
			$('body').imagesLoaded(function(){
				$('.bh_AnimateYbefore').addClass('bh_AnimateY');
			})
		})
	</script>
@stop