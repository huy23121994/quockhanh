@extends('frontend.linh-vuc-chi-tiet')
@section('title')
Nhà Máy Xí Nghiệp
@stop
@section('listing')
	
	<section id="ml_lvct_right">

		{{-- Phần slide --}}
		<div class="ml_slide_info">
			<div class="ml_nmxn_bonus_line"></div>
			<div class="ml_info_left left">
				<div class="ml_box_slide bh_transition bh_translateTopYbefore">
					<img src="{{url('/images/anh trai_cut.jpg')}}">

						<div class="bh_hide_slide">
							<img src="{{url('/images/hide_slide.png')}}" alt="">
						</div>
				</div>
				<div class="ml_text_nmxn bh_transition bh_translateYbefore">
					<h3><span>5000</span> m2</h3>
					<p>Nhà máy được xây dựng trên diện tích đất hơn 6000m2 tại Lô B2-4-2 Khu công nghiệp Nam Thăng Long - Từ Liêm - Hà Nội.</p>
				</div>
			</div>
			<div class="ml_info_right right">
				<div class="ml_box_slide bh_transition bh_translateTopYbefore">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
					  <!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
						    <div class="item active">
						    	<img src="{{url('/images/3_nha_may_xi_nghiep/IMG_0512_cut.jpg')}}" alt="QK-Company">
						    </div>

						    <div class="item">
						    	<img src="{{url('/images/3_nha_may_xi_nghiep/IMG_0581_cut.jpg')}}" alt="QK-Company">
						    </div>

						    <div class="item">
						    	<img src="{{url('/images/3_nha_may_xi_nghiep/IMG_0606_cut.jpg')}}" alt="QK-Company">
						    </div>

						    <div class="item">
						    	<img src="{{url('/images/3_nha_may_xi_nghiep/IMG_0634_cut.jpg')}}" alt="QK-Company">
						    </div>
						    <div class="item">
						    	<img src="{{url('/images/3_nha_may_xi_nghiep/IMG_0886_cut.jpg')}}" alt="QK-Company">
						    </div>
						    <div class="item">
						    	<img src="{{url('/images/3_nha_may_xi_nghiep/IMG_0997_cut.jpg')}}" alt="QK-Company">
						    </div>
						</div>
						<div class="bh_hide_slide">
							<img src="{{url('/images/hide_slide_r.png')}}" alt="">
						</div>

					  <!-- Left and right controls -->
						<a href="#myCarousel" role="button" data-slide="prev">
							<img src="{{url('/images/move13.png')}}" alt="QK-Company">
						</a>
						<a href="#myCarousel" role="button" data-slide="next">
							<img src="{{url('/images/move13.png')}}" alt="QK-Company">
						</a>
					</div>
				</div>
				<div class="ml_text_nmxn bh_transition bh_translateYbefore">
					<h3><span>02</span> Dây chuyền</h3>
					<p>Là nơi sản xuất, gia công các sản phẩm ống gió, van gió, cửa gió và các phụ kiện khác phục vụ thi công lắp đặt...</p>
				</div>
			</div>
		</div>
		{{-- Hết Phần slide --}}

		{{-- Phần sản phẩm --}}
		<div class="ml_sanpham">
			<h3>S Ả N   P H Ẩ M</h3>
			<ul id="list_grid_sp" class="click_slide">
				<li data-tab="tab1">
					<img src="{{url('/images/3_nha_may_xi_nghiep/ong_gio.jpg')}}">
					<h3>Ống gió</h3>
				</li>
				<li data-tab="tab2">
					<img src="{{url('/images/3_nha_may_xi_nghiep/cua_gio.jpg')}}">
					<h3>Ke góc</h3>
				</li>
				<li data-tab="tab3">
					<img src="{{url('/images/3_nha_may_xi_nghiep/van_gio.jpg')}}">
					<h3>Van gió</h3>
				</li>
				<li data-tab="tab4">
					<img src="{{url('/images/3_nha_may_xi_nghiep/van_dap_lua.jpg')}}">
					<h3>Van dập lửa</h3>
				</li>
				<li data-tab="tab5">
					<img src="{{url('/images/3_nha_may_xi_nghiep/ong_insulate_pipe.jpg')}}">
					<h3>Ống PU cách nhiệt</h3>
				</li>
				<li data-tab="tab6">
					<img src="{{url('/images/3_nha_may_xi_nghiep/ong_tron.jpg')}}">
					<h3>Cửa gió</h3>
				</li>
			</ul>
			<div class="bh_slide"></div>
			<div class="slide_tab">
				<ul>
					<li class="tab1">
						<img src="{{url('/images/3_nha_may_xi_nghiep/ong_gio.jpg')}}">
						<h4>Ống gió</h4>
					</li>
					<li class="tab2">
						<img src="{{url('/images/3_nha_may_xi_nghiep/cua_gio.jpg')}}">
						<h4>Ke góc</h4>
					</li>
					<li class="tab3">
						<img src="{{url('/images/3_nha_may_xi_nghiep/van_gio.jpg')}}">
						<h4>Van gió</h4>
					</li>
					<li class="tab4">
						<img src="{{url('/images/3_nha_may_xi_nghiep/van_dap_lua.jpg')}}">
						<h4>Van dập lửa</h4>
					</li>
					<li class="tab5">
						<img src="{{url('/images/3_nha_may_xi_nghiep/ong_insulate_pipe.jpg')}}">
						<h4>Ống PU cách nhiệt</h4>
					</li>
					<li class="tab6">
						<img src="{{url('/images/3_nha_may_xi_nghiep/ong_tron.jpg')}}">
						<h4>Cửa gió</h4>
					</li>
				</ul>
				<i class="flaticon-arrow413 next"></i>
				<img class="pre" src="{{url('/images/directional30.png')}}" alt="">
			</div>
		</div>
		{{-- Hết Phần sản phẩm --}}
	</section>


@stop
@section('addjs')
	<script type="text/javascript" src="{{url('js/my_slide.js')}}"></script>
	<script type="text/javascript">
	$('#ml_lvct_right').css('background-color','#fff');
	</script>
	<script type="text/javascript">
		$(window).on('load',function(){
			$('.ml_nmxn').addClass('active');
			$('body').imagesLoaded(function(){
				$('.bh_translateTopYbefore').addClass('bh_translateTopY');
				$('.bh_translateYbefore').addClass('translateY');
				$('.ml_nmxn_bonus_line').addClass('ke_duong_line');
			})
	 	});
	</script>
@stop