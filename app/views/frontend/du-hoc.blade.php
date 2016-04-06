@extends('frontend.linh-vuc-chi-tiet')
@section('title')
Du Học & Xuất Khẩu Lao Động
@stop
@section('listing')
	
	<section class="bh_bds_content bh_transition bh_AnimateYbefore">
		<div class="ml_duhoc_frame">
				<div class="top">
				<h3>20 NĂM KINH NGHIỆM</h3>
				<p>
Chúng tôi tự tin là một trong những TTĐT tư vấn du học, lao động uy tín số 1 ở Hà Nội với những dịch vụ
tư vấn, đào tạo du học các trường có uy tín tại Nhật Bản, Hàn Quốc, Malaysia, Đài Loan...</p>
				<a class="ml_dh_hover" href="http://mastercus.com" target="_blank">
					<i class="flaticon-arrow413"></i>
					<i class="ml_web_duhoc">Website của chúng tôi</i>
				</a>
			</div>
			<ul class="list_dh click_slide">
				<li data-tab="tab1"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/1.jpg')}}" alt=""></li>
				<li data-tab="tab2"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/2.jpg')}}" alt=""></li>
				<li data-tab="tab3"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/3.jpg')}}" alt=""></li>
				<li data-tab="tab4"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/4.jpg')}}" alt=""></li>
				<li data-tab="tab5"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/5.jpg')}}" alt=""></li>
			</ul>
			<div class="bh_slide"></div>
			<div class="slide_tab">
				<ul>
					<li class="tab1"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/1.jpg')}}" alt=""></li>
					<li class="tab2"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/2.jpg')}}" alt=""></li>
					<li class="tab3"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/3.jpg')}}" alt=""></li>
					<li class="tab4"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/4.jpg')}}" alt=""></li>
					<li class="tab5"><img src="{{url('/images/7_du_hoc/Du hoc - XK lao dong/5.jpg')}}" alt=""></li>
				</ul>
				<i class="flaticon-arrow413 next"></i>
				<img class="pre" src="{{url('/images/directional30.png')}}" alt="">
			</div>
		</div>
	</section>

@stop
@section('addjs')
	<script type="text/javascript" src="{{url('js/my_slide.js')}}"></script>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('.ml_duhoc').addClass('active');
			$('body').imagesLoaded(function(){
				$('.bh_AnimateYbefore').addClass('bh_AnimateY');
			})
		})
	</script>
@stop