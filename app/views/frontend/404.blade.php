<?php 
	$menu = 1;	
?>

@extends('frontend.layout.master')

@section('title')
	Trang không tồn tại
@stop
@section('addcss')
<style type="text/css">
/*404 style*/
.frame_error{
	width: 651px;
	height: 100vh;
	margin: 0 auto;
	text-align: center;
	overflow: hidden;
}
.frame_error h1{
	font-family: "Segoe UI Light";
	font-size: 80pt;
	color: rgb(13,13,13);
	text-align: center;
	margin-top: 26vh;
}
.ke_chi{
	width: 100%;
	height: 1px;
	background-color: #E8E8E8;
	margin-top: 25px;
}
.frame_error span{
	text-align: center;
	font-family: "Segoe UI Semilight";
	font-size: 10.5pt;
	color: rgb(13,13,13);
	display: inline;
	line-height: 80px;
}
.frame_error span a{
	color: #1252BA;
	border-bottom: 2px solid #1252BA;
}
</style>
@stop

@section('listing')

<section id="bh_right_content">
	<div class="frame_error">
		<h1>404</h1>
		<div class="ke_chi"></div>
		<span>Nội dung bạn vừa truy cập không tồn tại. <a href="{{url()}}">Về trang chủ</a></span>
	</div>
</section>
@stop
@section('addjs')
	<script type="text/javascript">

		$(window).ready(function(){
			$('#bh_left_content').css({'left':'0px','opacity':'1'});
			$('#bh_right_content').css({'margin-left':'627px','opacity':'1'});
			$('.ml_bg_color ul li p').css('margin-bottom','0');
		});
	</script>
	
@stop