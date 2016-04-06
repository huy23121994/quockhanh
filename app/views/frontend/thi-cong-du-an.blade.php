@extends('frontend.linh-vuc-chi-tiet')
@section('title')
Thi Công Dự Án
@stop
@section('listing')
	
	<section id="ml_lvct_right">
			<div class="ml_fixed_left bh_transition">
				<ul>
					<li>
						<i class="flaticon-worker18"></i>
						<p>Nhân lực: Đội ngũ kỹ sư, cán bộ kỹ thuật được đào tạo cơ bản, có nhiều năm kinh nghiệm cùng đội công nhân kỹ thuật tay nghề cao</p>
					</li>
					<li>
						<i class="flaticon-manufacture"></i>
						<p>Máy móc thiết bị thi công: Có đầy đủ các máy móc, thiết bị thi công phục vụ sản xuất và thi công; Các thiết bị thí nghiệm, kiểm tra tại hiện trường</p>
					</li>
					<li>
						<i class="flaticon-time28"></i>
						<p>Quản lý chất lượng: Công ty áp dụng quản lý chất lượng theo tiêu chuẩn ISO 9001- 2008 với sự quản lý, giám sát chặt chẽ từng khâu trong hoạt động sản xuất, thi công.</p>
					</li>
					<li>
						<i class="flaticon-instructor"></i>
						<p>15 năm kinh nghiệm trong đấu thầu thi công các dự án, đã trúng thầu và thi công nhiều dự án lớn.</p>
					</li>
					<li>
						<a href="#" download>Hồ Sơ Năng Lực .PDF</a>
					</li>
				</ul>
			</div>
			<div class="ml_content_rigt bh_transition bh_translateRightXbefore">
				<div class="wp_fixed_mid">
					<div class="ml_text_first">
					<pre>C Ô N G   T R Ì N H   T I Ê U    B I Ể U</pre>
					<p>Chúng tôi đã thực hiện hơn 60 hạng mục điều hoà công nghiệp, cơ điện lớn nhỏ trong toàn quốc với nhiều dự án đa dạng về mục đích sử dụng như trung tâm thương mại, nhà ở văn phòng, bệnh viện, chung cư, kho lạnh công nghiệp, văn phòng nhà nước ...</p>
				</div>
				
				{{-- Phần show ảnh công nhân --}}
					<section class="ml_show_img_cong_nhan">
						<div class="wp_row_cn">

							{{-- Phần slide --}}
							<div class="swiper-container">

									<!-- Add Pagination -->
        							<div class="swiper-pagination"></div>
        							<!-- End Pagination -->

        							<ul class="swiper-wrapper click_slide">
            							<li data-tab="tab1" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/1.jpg')}}"> 
            							</li>
            							<li data-tab="tab2" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/2.jpg')}}"> 
            							</li>
            							<li data-tab="tab3" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/3.jpg')}}"> 
            							</li>
            							<li data-tab="tab4" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/4.jpg')}}"> 
            							</li>
            							<li data-tab="tab5" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/5.jpg')}}"> 
            							</li>
            							<li data-tab="tab6" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/6.jpg')}}"> 
            							</li>
            							<li data-tab="tab7" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/7.jpg')}}"> 
            							</li>
            							<li data-tab="tab8" class="swiper-slide">
            								<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/8.jpg')}}"> 
            							</li>
        							</ul>
        							
    						</div>
    						{{-- Hết phần slide --}}
							<div class="bh_slide"></div>
								<div class="slide_tab">
									<ul>
										<li class="tab1">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/1.jpg')}}">
		
										</li>
										<li class="tab2">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/2.jpg')}}">
										</li>
										<li class="tab3">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/3.jpg')}}">
											</li>
										<li class="tab4">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/4.jpg')}}">
										</li>
										<li class="tab5">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/5.jpg')}}">
										</li>
										<li class="tab6">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/6.jpg')}}">
										</li>
										<li class="tab7">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/7.jpg')}}">
										</li>
										<li class="tab8">
											<img src="{{url('/images/4_thi_cong_du_an/Hinh anh cong nhan thi cong/8.jpg')}}">
										</li>
									</ul>
									<i class="flaticon-arrow413 next"></i>
									<img class="pre" src="{{url('/images/directional30.png')}}" alt="">
								</div>
						</div>
					</section>
				{{-- Hết phần show ảnh công nhân --}}

				<div class="ml_list_show">
					<ul>
						<li data-tab="all" class="ml_show_actived">Tất cả</li>
						<li data-tab="lddh">Lắp đặt điều hòa</li>
						<li data-tab="ldtm">Lắp đặt thang máy OTIS</li>
						<li data-tab="bms">BMS</li>
						<li data-tab="cd">Cơ điện</li>
					</ul>
				</div>

				{{-- Phần show all ảnh --}}
				<div class="ml_tab_show all ml_tab_actived"> {{-- Show tất cả --}}
					<ul class="ml_list_img">
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/71 Nguyễn Chí Thanh - Hà nội.png')}}">
							<h3>71 Nguyễn Chí Thanh - Hà Nội</h3>
						</li>
						<li class="ml_li_vuong">
							<img src="{{url('/images/4_thi_cong_du_an/Muzik Park - 57 Cửa nam - Hà nội.png')}}">
							<h3>Muzik Park - 57 Cửa Nam - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Chung cư cao cấp D2 Giảng Võ - Hà Nội.png')}}">
							<h3>Chung cư cao cấp D2 Giảng Võ - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Diamond Flower - Lê Văn Lương - Hà Nội.png')}}">
							<h3>Diamond Flower - Lê Văn Lương - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Hapro Gia lâm - Hà Nội.png')}}">
							<h3>Hapro Gia lâm - Hà Nội</h3>
						</li>
						<li class="ml_li_vuong">
							<img src="{{url('/images/4_thi_cong_du_an/Trung tâm hội nghị Quốc gia.png')}}">
							<h3>Trung tâm hội nghị Quốc gia</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa nhà 335 Cầu Giấy - Hà Nội.png') }}">
							<h3>Tòa nhà 335 Cầu Giấy - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa Nhà Thanh Đồng - 132 Kim mã -Hà nội.png')}}">
							<h3>Tòa Nhà Thanh Đồng - 132 Kim mã - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa nhà văn phòng - 109 Trần Hưng Đạo - Hà Nội.png')}}">
							<h3>Tòa nhà vp - 109 Trần Hưng Đạo - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa nhà văn phòng Invest Hà Đông - Hà nội.png')}}">
							<h3>Tòa nhà văn phòng Invest Hà Đông - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa nhà văn phòng VCCI.png')}}">
							<h3>Tòa nhà văn phòng VCCI</h3>
						</li>
						<li class="ml_li_vuong">
							<img src="{{url('/images/4_thi_cong_du_an/Trung tâm thương mại Vincom Hải phòng.png')}}">
							<h3>Trung tâm thương mại Vincom Hải phòng</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Văn phòng Bộ ngoại Giao 32 Bà Triệu - Hà Nội.png')}}">
							<h3>Văn phòng Bộ ngoại Giao 32 Bà Triệu - Hà Nội</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa văn phòng California.png')}}">
							<h3>Tòa văn phòng California</h3>
						</li>
						<li>
							<img src="{{url('/images/4_thi_cong_du_an/Tòa nhà 335 Cầu Giấy - Hà Nội.png') }}">
							<h3>Tòa nhà 335 Cầu Giấy - Hà Nội</h3>
						</li>
					</ul>
				</div>
				{{-- Hết phần show all ảnh --}}

				<div class="ml_tab_show lddh"> {{-- Show lắp đặt điều hòa --}}
					{{-- Code here --}}
				</div>

				<div class="ml_tab_show ldtm"> {{-- Show ảnh lắp đặt thang máy --}}
					{{-- Code here --}}
				</div>

				<div class="ml_tab_show bms"> {{-- Show ảnh phần bms --}}
					{{-- Code here --}}
				</div>

				<div class="ml_tab_show cd"> {{-- show ảnh phần cơ điện --}}
					{{-- Code here --}}
				</div>
				{{-- hết phần show ảnh --}}
				</div>
				<div class="clear-fix"></div>
			
			</div>
			{{-- Hết phần bên phải --}}
	
	</section>
	{{-- Hết phần thi cong du an --}}
@stop
@section('addjs')
	<script type="text/javascript" src="{{url('js/my_slide.js')}}"></script>
	<script type="text/javascript" src="{{url('js/swiper.min.js')}}"></script>
	<script type="text/javascript">
		$('.ml_list_show ul li').on('click',function(){
			var data = $(this).data('tab');
			$('.ml_list_show ul li').removeClass('ml_show_actived');
			$(this).addClass('ml_show_actived');

			$('.ml_tab_show').removeClass('ml_tab_actived');
			$('.'+data).addClass('ml_tab_actived');
		});
		$(window).scroll(function(){
			var top=$(window).scrollTop();
			if (top>343) {
				$('.ml_list_show').addClass('fixed_menu');
			}else{
				$('.ml_list_show').removeClass('fixed_menu');
			};
		})

		$(window).on('load',function(){
			$('.ml_tcda').addClass('active');
			$('body').imagesLoaded(function(){

				$('.bh_translateRightXbefore').addClass('bh_translateRightX');
				$('.ml_fixed_left').css({'left':'271px','opacity': '1'});
				setTimeout(function(){
					$('.ml_fixed_left').niceScroll({
				       	cursorborderradius: '0px',
						cursorborder: 'rgba(0, 0, 0, 0.2)',
						cursorcolor: 'rgba(0, 0, 0, 0.2)',
						cursorwidth: "3px",
						autohidemode: true,
						background: 'rgba(0, 0, 0, 0.1)'
				    });
				},2000)
				
			})
	 	});
	</script>

	<script type="text/javascript">
	    var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 4,
	        paginationClickable: true,
	        spaceBetween: 10,
	        autoplay: 4000,
	        autoplayDisableOnInteraction: false
	    });
	</script>
@stop