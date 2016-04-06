<?php 
	$menu = 4;	
?>
@extends('frontend.layout.master')

@section('title')
TIN TỨC
@stop
@section('addcss')
	<link rel="stylesheet" type="text/css" href="{{url('css/new-css.css')}}">
@stop

@section('listing')
	<section class="bh_news_content bh_transition bh_translateYbefore">
		<div class="ml_margin_new">
		<div class="item">
			<div>
				<a href="
				@if($tintuc1)
					{{url('tin/tinmoi/'.$tintuc1['id'])}}
				@elseif(Session::has('admin'))
					{{url('tin/tinmoi/0')}}
				@else
					{{url('tin/tinmoi/1')}}
				@endif
				"><h4 class="left">TIN TỨC</h4></a>
				<i class="right flaticon-information2"></i>
			</div>
			<ul>
				@foreach( $tintuc as $key => $new )
					<li>
						<img src="{{url('images/'.$new['images'])}}" alt="">
						<h4>{{ $new['tieu_de'] }}</h4>
						<p>{{ substr($new['noi_dung'],0,100).' ...' }}</p>
						<a class="more" href="{{url('tin/tinmoi/'.$new['id'])}}">XEM THÊM</a>
					</li>
				@endforeach
			</ul>
		</div>
		<div class="item">
			<div>
				<a href="
					@if($sukien1)
						{{url('tin/sukien/'.$sukien1['id'])}}
					@elseif(Session::has('admin'))
						{{url('tin/sukien/0')}}
					@else
						{{url('tin/sukien/1')}}
					@endif
					"><h4 class="left">SỰ KIỆN</h4></a>
				<i class="right flaticon-monthly5"></i>
			</div>
			<ul>
			@foreach( $sukien as $key => $new )
				<li>
					<img src="{{url('images/'.$new['images'])}}" alt="">
					<h4>{{ $new['tieu_de'] }}</h4>
					<p>{{ substr($new['noi_dung'],0,100).' ...' }}</p>
					<a class="more" href="{{url('tin/sukien/'.$new['id'])}}">XEM THÊM</a>
				</li>
			@endforeach
			</ul>
		</div>
		<div class="item">
			<div>
				<a href="
					@if($tuyendung1)
						{{url('tin/tuyendung/'.$tuyendung1['id'])}}
					@elseif(Session::has('admin'))
						{{url('tin/tuyendung/0')}}
					@else
						{{url('tin/tuyendung/1')}}
					@endif
					"><h4 class="left">TUYỂN DỤNG</h4></a>
				<i class="right flaticon-professional5"></i>
			</div>
			<ul>
			@foreach( $tuyendung as $key => $new )
				<li>
					<img src="{{url('images/'.$new['images'])}}" alt="">
					<h4>{{ $new['tieu_de'] }}</h4>
					<p>{{ substr($new['noi_dung'],0,100).' ...' }}</p>
					<a class="more" href="{{url('tin/tuyendung/'.$new['id'])}}">XEM THÊM</a>
				</li>
			@endforeach
			</ul>

		</div>
	</div>
	</section>
	<div class="ml_border"></div>
@stop
@section('addjs')
	<script type="text/javascript">
		$(window).ready(function(){
			$('.ml_tt').addClass('ml_menu_actived');
		});
	</script>

	<script type="text/javascript">
		$(window).on('load',function(){
			// $('.filter').remove();
			$('body').imagesLoaded(function(){
        		$('.ml_border').css({
				'width': '1px',
				'height': '100vh',
				'position': 'fixed',
				'background-color': 'rgba(0,0,0,0.1)',
				'top': '0',
				'left': '270px',
				'z-index':'9999999'
				});
        		$('.bh_translateYbefore').addClass('translateY');
			})
        	setTimeout(function(){
				$(".item").niceScroll({
	        		 	cursorborderradius: '0px',
						cursorborder: 'rgba(0, 0, 0, 0.2)',
						cursorcolor: 'rgba(0, 0, 0, 0.2)',
						cursorwidth: "3px",
						autohidemode: true,
						background: 'rgba(0, 0, 0, 0.1)',
						fixed: true,
	        	});
			},700);
 		});
	</script>
@stop
