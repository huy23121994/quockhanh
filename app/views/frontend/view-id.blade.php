<?php
	$menu=2;
?>
@extends('frontend.layout.master')
@section('title')
Tin Tức Chi Tiết
@stop
@section('addcss')
	<link rel="stylesheet" type="text/css" href="{{url('css/new-css.css')}}">
@stop
@section('listing')
		<section class="bh_view_content">
		<ul class="menu bh_transition bh_translateLeftbefore">
			<li>
				<div>
					<h4 id="flag">{{ $title }}</h4>
					@if($new['flag']=='tinmoi')
						<i class="right flaticon-information2"></i>
					@elseif($new['flag']=='sukien')
						<i class="right flaticon-monthly5"></i>
					@else
						<i class="right flaticon-professional5"></i>
					@endif
					<i class="clear-fix"></i>
				</div>
			</li>
			@if( Session::has('admin') )
				<li class="post_new">
					<div>
						<h4>Thêm bài mới</h4>
					</div>
				</li>
			@endif
			@foreach($news as $key => $val)
				<li class="v{{ $val['id'] }}">
					<a href="{{ url('tin/'.$val['flag'].'/'.$val['id'] )}}">
						<div>
							<span>{{ substr($val['updated_at'],8,2) }} tháng {{ substr($val['updated_at'],5,2) }}</span>
							<h4>{{ $val['tieu_de'] }}</h4>
							<p>{{ substr($val['noi_dung'],0,100).' ...' }}</p>
						</div>
					</a>
				</li>
			@endforeach
		</ul>
		<ul data-tab="v{{$new['id']}}" class="list block bh_transition bh_translateRightXbefore">
			<li>
				<div>
					@if(Session::has('admin') && $new['flag'])
						<div class="up">
							<i class="flaticon-photography37"></i>
						</div>
					@endif
					<img id="up_new" src="{{url('images/'.$new['images'])}}" alt="">

					@if(Session::has('admin') && $new['flag'])
					<form id="img_edit">
						<input name="image_edit" type="file" accept="image/*">
					</form>
					@endif
				</div>
				<h4 spellcheck="false" @if(Session::has('admin') && $new['flag'])
					contenteditable="true"
					id="tieude_edit"
					@endif>
					{{ $new['tieu_de'] }}
				</h4>
				<p spellcheck="false" @if(Session::has('admin') && $new['flag'])
					contenteditable="true"
					id="noidung_edit"
					@endif>
					{{ $new['noi_dung'] }}
				</p>
				@if(Session::has('admin') && $new['flag'])
					<a id="delete">XÓA</a>
					<a id="edit">XÁC NHẬN</a>
				@endif
			</li>
		</ul>
	</section>
@stop

@section('addjs')
	<script type="text/javascript">
		$(window).on('load',function(){
			$('.ml_tt').addClass('ml_menu_actived');
			var x=$('.bh_view_content .menu').scrollTop();
			var position=$(this).find('.now').offset();
			// console.log(position);
			// $('.bh_view_content .menu').animate({'scrollTop':position.top - 10},0);
			$('body').imagesLoaded(function(){
				$('.bh_translateRightXbefore').addClass('bh_translateRightX');
				$('.bh_translateLeftbefore').addClass('bh_translateLeft');
			})

			setTimeout(function(){
				$('.bh_view_content .menu').niceScroll({
					cursorborderradius: '0px',
					cursorborder: 'rgba(190, 190, 190, 0.560784)',
					cursorcolor: 'rgba(190, 190, 190, 0.560784)',
					cursorwidth: "7px",
				})
			},700);
		})
	</script>
	
	{{-- Script secret --}}
	<script type="text/javascript">
		$('body').on('click','#edit',function(event) {
			event.preventDefault();
			var formData = new FormData($('#img_edit')[0]);
			formData.append('id', $(this).parent().parent().attr('data-tab'));
			formData.append('tieude', $('#tieude_edit').text());
			formData.append('noidung', $('#noidung_edit').text());
			$.ajax({
				url: "{{url('quan-tri/update')}}",
				data: formData,
				type: 'POST',
				cache: false,
				processData : false,
                contentType : false
			}).done(function(data){
				if(data=='success'){
					alert('Thành công!');
					window.location.reload();
				}else{
					alert('Fail!');
				}
			}).fail(function(){
				alert('Lỗi #TK01');
			})
		})
		$('.post_new').on('click',function(){
			$('.list').removeClass("block");
			var text='<ul class="list block"><li><div><div id="up"><i class="flaticon-photography37"></i></div><img id="up_new" src="{{url("images/def_cover.jpg")}}"><form id="img_upload"><input name="image_upload" type="file" accept="image/' + '*"></form></div><h4 spellcheck="false" id="tieude" contenteditable="true">Nhập tiêu đề</h4><p spellcheck="false" id="noidung" contenteditable="true">Nhập nội dung</p><a class="cancel">HỦY</a><a id="post_new">ĐĂNG BÀI</a></li></ul>';
			$('.menu').after(text);
		});
		$('body').on('click','#post_new',function(event) {
			event.preventDefault();
			var formData = new FormData($('#img_upload')[0]);
			formData.append('tieude', $('#tieude').text());
			formData.append('noidung', $('#noidung').text());
			formData.append('flag',$('#flag').text())
			$.ajax({
				type: "POST",
				url: "{{url('quan-tri/post-new')}}",
				data:  formData,
				cache: false,
				processData : false,
                contentType : false
			}).done(function(data){
				if(data=='true'){
					alert('Thành công!');
					window.location.href="/tin-tuc";
				}else{
					alert('Upload chưa thành công!');
				}
			}).fail(function(){
				alert('Lỗi #TK01');
			});
			return false;
		});
		$('body').on('click','.cancel',function() {
			window.location.reload();
		});
		$('body').on('click','#delete',function() {
			$.ajax({
				url: "{{url('quan-tri/delete')}}",
				data: { id: $(this).parents('ul').attr('data-tab') },
				type: 'POST',
				cache: false,
			}).done(function(data){
				if(data=='success'){
					alert('Thành công!');
					window.location.href="/tin-tuc";
				}else{
					alert('Fail!');
				}
			}).fail(function(){
				alert('Lỗi #TK01');
			})
		})
				
		//Upload before

		$('body').on('click','#up',function(){
			$('#img_upload input').click();
		})
		$('body').on('click','.up',function(){
			$('#img_edit input').click();
		})


		$('body').on('change',"#img_upload input",function(){
		    readURL(this); //hien anh
		});
		$('body').on('change',"#img_edit input",function(){
		    readURL(this); //hien anh
		});
		function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();
	            reader.onload = function (theFile) {
	            	var image = new Image();
				    image.src = theFile.target.result;
				    image.onload = function() {
				        $('#up_new').attr('src', this.src);
				 
				    };
	            }
	            reader.readAsDataURL(input.files[0]);
	        }
    	}
	</script>
@stop