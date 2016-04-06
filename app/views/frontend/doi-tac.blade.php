<?php 
	$menu = 3;	
?>

@extends('frontend.layout.master')

@section('title')
	Đối Tác
@stop
@section('addcss')
	<link rel="stylesheet" type="text/css" href="{{url('/css/new-css.css')}}">
@stop

@section('listing')
	<section class="bh_dt_content bh_transition bh_translateRightXbefore">
		<div class="ml_dt_frame">
				<div class="top">
				<h3>ĐỐI TÁC</h3>
				<p>Công ty có mối quan hệ với nhiều đối tác là các hãng sản xuất máy điều hòa, máy lạnh, máy hút ẩm, quạt thông gió, bơm, tháp giải nhiệt, van... và các nhà sản xuất các vật tư cho ngành điện lạnh như ống đồng, bảo ôn, dây cáp điện, tôn mạ kẽm, ống thép...</p>
			</div>
			<ul class="list_dt">
				<li><img src="{{url('/images/8_doi_tac/1.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/2.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/3.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/4.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/5.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/6.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/7.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/8.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/9.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/10.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/11.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/12.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/13.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/14.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/15.jpg')}}" alt=""></li>
				<li><img src="{{url('/images/8_doi_tac/16.jpg')}}" alt=""></li>
			</ul>
		</div>
	</section>

@stop

@section('addjs')
	<script>
			$('.ml_pro').addClass('running');
		    $(window).load(function() { 
		    		$("#ml_loading").hide();
		    });

		    $(window).on('load',function(){
		    	$('.ml_ll').addClass('ml_menu_actived');
		    	$('body').imagesLoaded(function(){
			    	$('#bh_left_content').css({'left':'0px','opacity':'1'});
					$('.bh_translateRightXbefore').addClass('bh_translateRightX');
				})
	 		});
</script>
	
@stop