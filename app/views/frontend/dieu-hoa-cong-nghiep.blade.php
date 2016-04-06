@extends('frontend.linh-vuc-chi-tiet')
@section('title')
Điều Hòa Công Nghiệp
@stop
@section('listing')
	
	<section id="ml_lvct_right">
		<div class="ml_dhcn_img bh_transition">
			<div class="opacity">
				<article class="bh_translateYbefore bh_transition">
					<img src="{{url('/images/toshiba-carrier_logo.svg')}}">
					<h2>TOP 3</h2>
					<h4>BEST SELLER</h4>
					<p>Đại lý lâu năm của Carrier Toshiba. Nhiều năm nằm trong top 3 Best Seller tại Việt Nam</p>{{-- 
					<div class="ml_download">
						<a href="#" download>CHỨNG NHẬN ĐẠI LÝ .PDF</a>
					</div> --}}
				</article>
			</div>
		</div>
		<div class="ml_dhcn_info bh_transition bh_translateRightXbefore">
			<div class="ml_dhcn_frame">
				<div class="ml_text_info">
					<pre>C H O   T H U Ê   Đ I Ề U   H Ò A    C Ũ</pre>
					<p>Quốc Khánh có thể đưa ra nhiều giải pháp tối ưu và tiết kiệm chi phí cho khách hàng như bán hoặc cho thuê điều hoà cũ . Các thiết bị đã qua sử dụng đều được công ty kiểm tra, sửa chữa, làm sạch trước khi bàn giao cho khách hàng.</p>
				</div>
				<ul class="ml_dhcn_show click_slide">
					<li data-tab="tab1"><img  src="{{url('/images/5_dieu_hoa/1.jpg')}}"></li>
					<li data-tab="tab2"><img  src="{{url('/images/5_dieu_hoa/2.jpg')}}"></li>
					<li data-tab="tab3"><img  src="{{url('/images/5_dieu_hoa/3.jpg')}}"></li>
					<li data-tab="tab4"><img  src="{{url('/images/5_dieu_hoa/4.jpg')}}"></li>
				</ul>
				<div class="bh_slide"></div>
				<div class="slide_tab">
					<ul>
						<li class="tab1">
							<img  src="{{url('/images/5_dieu_hoa/1.jpg')}}">
						</li>
						<li class="tab2">
							<img  src="{{url('/images/5_dieu_hoa/2.jpg')}}">
						</li>
						<li class="tab3">
							<img  src="{{url('/images/5_dieu_hoa/3.jpg')}}">
						</li>
						<li class="tab4">
							<img  src="{{url('/images/5_dieu_hoa/4.jpg')}}">
						</li>
					</ul>
					<i class="flaticon-arrow413 next"></i>
					<img class="pre" src="{{url('/images/directional30.png')}}" alt="">
				</div>
			</div>
		</div>
	</section>

@stop
@section('addjs')
	<script type="text/javascript" src="{{url('js/my_slide.js')}}"></script>
	<script type="text/javascript">

		$(window).on('load',function(){
			$('.ml_dhcn').addClass('active');
			setTimeout(function(){
				$('.bh_translateYbefore').addClass('translateY');
			},200);
			$('body').imagesLoaded(function(){
				$('.bh_translateRightXbefore').addClass('bh_translateRightX');
				$('.ml_dhcn_img').css({	'left': '271px','opacity': '1'});
			})
	 	});
	</script>
@stop