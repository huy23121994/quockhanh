
@if (isset($menu) && $menu == 1)
	<section id="bh_left_content" class="bh_transition">
		<div class="menu">
			<div class="filter"><img src="{{url('images/bg.jpg')}}" alt=""></div>
			<div class="ml_bg_color">

				<!-- Phần logo và tên công ty -->
				<div class="ml_frame_logo">
					<img src="{{url('images/logo.png')}}" alt="logo_Quoc_Khanh">
					<h1 class="ml_name">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT & THƯƠNG MẠI QUỐC KHÁNH</h1>
				</div>

				<!-- Phần menu chính -->
				<ul>
					<a href="{{url('/gioi-thieu')}}">
						<li class="ml_gt">
							<span class="hover_white"></span>
							<p>GIỚI THIỆU</p>
						</li>
					</a>
					<a href="{{url('/linh-vuc-hoat-dong')}}">
						<li class="ml_lvhd">
							<span class="hover_white"></span>
							<p>LĨNH VỰC HOẠT ĐỘNG</p>
						</li>
					</a>
					<a href="{{url('/tin-tuc')}}">
						<li class="ml_tt">
							<span class="hover_white"></span>
							<p>TIN TỨC</p>
						</li>
					</a>
					<a href="{{url('/doi-tac')}}">
						<li class="ml_ll">
							<span class="hover_white"></span>
							<p>ĐỐI TÁC</p>
						</li>
					</a>
				</ul>

				<!-- Phần bottom [location, phone, email]-->
				<div class="bh_bot ml_bot">
					<div class="ml_head_bot">
						<i data-pi="ml_bot_one" class="flaticon-circle181"></i>
						<i data-pi="ml_bot_two" class="flaticon-telephone166"></i>
						<i data-pi="ml_bot_three" class="flaticon-mail3"></i>
					</div> 

					<div class="ml_bot_info ml_bot_one">
						<span>Địa Chỉ</span><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="ml_bot_info ml_bot_two">
						<span>Số Điện Thoại</span><br>
						<p>0987.665.854</p>
					</div>
					<div class="ml_bot_info ml_bot_three">
						<span>Email</span><br>
						<p>Contact@quockhanh.vn</p>
					</div> 
					
				</div>


			</div>
		</div>

		@yield('note')
	</section>
@elseif(isset($menu) && $menu==2)
<section id="ml_menu">
		<div class="filter"><img src="{{url('images/bg.jpg')}}" alt=""></div>
		<div class="ml_bg_color">

			<!-- Phần logo và tên công ty -->
			<div class="ml_frame_logo">
				<img src="{{url('images/logo.png')}}" alt="logo_Quoc_Khanh">
				<h1 class="ml_name">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT & THƯƠNG MẠI QUỐC KHÁNH</h1>
			</div>

			<!-- Phần menu chính -->
			<ul>
				<a href="{{url('/gioi-thieu')}}">
					<li class="ml_gt">
						<span class="hover_white"></span>
						<p>GIỚI THIỆU</p>
					</li>
				</a>
				<a href="{{url('/linh-vuc-hoat-dong')}}">
					<li class="ml_lvhd">
						<span class="hover_white"></span>
						<p>LĨNH VỰC HOẠT ĐỘNG</p>
					</li>
				</a>
				<a href="{{url('/tin-tuc')}}">
					<li class="ml_tt">
						<span class="hover_white"></span>
						<p>TIN TỨC</p>
					</li>
				</a>
				<a href="{{url('/doi-tac')}}">
					<li class="ml_ll">
						<span class="hover_white"></span>
						<p>ĐỐI TÁC</p>
					</li>
				</a>
			</ul>

			<!-- Phần bottom [location, phone, email] -->
				<div class="bh_bot ml_bot">
					<div class="ml_head_bot">
						<i data-pi="ml_bot_one" class="flaticon-circle181"></i>
						<i data-pi="ml_bot_two" class="flaticon-telephone166"></i>
						<i data-pi="ml_bot_three" class="flaticon-mail3"></i>
					</div> 

					<div class="ml_bot_info ml_bot_one">
						<span>Địa Chỉ</span><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="ml_bot_info ml_bot_two">
						<span>Số Điện Thoại</span><br>
						<p>0987.665.854</p>
					</div>
					<div class="ml_bot_info ml_bot_three">
						<span>Email</span><br>
						<p>Contact@quockhanh.vn</p>
					</div> 
					
				</div>

		</div>
	</section>
@elseif(isset($menu) && $menu==3)
<section id="bh_left_content"  class="bh_transition" style="background-image: url(images/dt.jpg)">
		<div class="menu">
			<div class="filter"><img src="{{url('images/bg3.jpg')}}" alt=""></div>
			<div class="ml_bg_color">

				<!-- Phần logo và tên công ty -->
				<div class="ml_frame_logo">
					<img src="{{url('images/logo.png')}}" alt="logo_Quoc_Khanh">
					<h1 class="ml_name">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT & THƯƠNG MẠI QUỐC KHÁNH</h1>
				</div>

				<!-- Phần menu chính -->
				<ul>
					<a href="{{url('/gioi-thieu')}}">
						<li class="ml_gt">
							<span class="hover_white"></span>
							<p>GIỚI THIỆU</p>
						</li>
					</a>
					<a href="{{url('/linh-vuc-hoat-dong')}}">
						<li class="ml_lvhd">
							<span class="hover_white"></span>
							<p>LĨNH VỰC HOẠT ĐỘNG</p>
						</li>
					</a>
					<a href="{{url('/tin-tuc')}}">
						<li class="ml_tt">
							<span class="hover_white"></span>
							<p>TIN TỨC</p>
						</li>
					</a>
					<a href="{{url('/doi-tac')}}">
						<li class="ml_ll">
							<span class="hover_white"></span>
							<p>ĐỐI TÁC</p>
						</li>
					</a>
				</ul>

				<!-- Phần bottom [location, phone, email] -->
				<div class="bh_bot ml_bot">
					<div class="ml_head_bot">
						<i data-pi="ml_bot_one" class="flaticon-circle181"></i>
						<i data-pi="ml_bot_two" class="flaticon-telephone166"></i>
						<i data-pi="ml_bot_three" class="flaticon-mail3"></i>
					</div> 

					<div class="ml_bot_info ml_bot_one">
						<span>Địa Chỉ</span><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="ml_bot_info ml_bot_two">
						<span>Số Điện Thoại</span><br>
						<p>0987.665.854</p>
					</div>
					<div class="ml_bot_info ml_bot_three">
						<span>Email</span><br>
						<p>Contact@quockhanh.vn</p>
					</div> 
					
				</div>


			</div>
		</div>
	</section>

@elseif(isset($menu) && $menu==4)
	<section id="ml_menu" style="background-image: none;">
		
		<div class="ml_bg_color">

			<!-- Phần logo và tên công ty -->
			<div class="ml_frame_logo">
				<img src="{{url('/images/logo.png')}}" alt="logo_Quoc_Khanh">
				<h1 class="ml_name">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT &amp; THƯƠNG MẠI QUỐC KHÁNH</h1>
			</div>

			<!-- Phần menu chính -->
			<ul>
				<a href="{{url('/gioi-thieu')}}">
					<li class="ml_gt">
						<span class="hover_white"></span>
						<p>GIỚI THIỆU</p>
					</li>
				</a>
				<a href="{{url('/linh-vuc-hoat-dong')}}">
					<li class="ml_lvhd">
						<span class="hover_white"></span>
						<p>LĨNH VỰC HOẠT ĐỘNG</p>
					</li>
				</a>
				<a href="{{url('/tin-tuc')}}">
					<li class="ml_tt ml_menu_actived">
						<span class="hover_white"></span>
						<p>TIN TỨC</p>
					</li>
				</a>
				<a href="{{url('/doi-tac')}}">
					<li class="ml_ll">
						<span class="hover_white"></span>
						<p>ĐỐI TÁC</p>
					</li>
				</a>
			</ul>

			<!-- Phần bottom [location, phone, email] -->
				<div class="bh_bot ml_bot">
					<div class="ml_head_bot">
						<i data-pi="ml_bot_one" class="flaticon-circle181"></i>
						<i data-pi="ml_bot_two" class="flaticon-telephone166"></i>
						<i data-pi="ml_bot_three" class="flaticon-mail3"></i>
					</div> 

					<div class="ml_bot_info ml_bot_one">
						<span>Địa Chỉ</span><br>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
					<div class="ml_bot_info ml_bot_two">
						<span>Số Điện Thoại</span><br>
						<p>0987.665.854</p>
					</div>
					<div class="ml_bot_info ml_bot_three">
						<span>Email</span><br>
						<p>Contact@quockhanh.vn</p>
					</div> 
					
				</div>

		</div>
	</section>
@else

			<!-- Phần menu chính -->
		<section id="ml_menu" class="bh_menu_ver2">
		<div class="ml_bg_color bh_bg_color">
			<!-- Phần logo và tên công ty -->
			<div class="ml_frame_logo">
				<img src="{{url('images/logo.png')}}" alt="logo_Quoc_Khanh">
				<h1 class="ml_name">CÔNG TY TNHH DỊCH VỤ KỸ THUẬT & THƯƠNG MẠI QUỐC KHÁNH</h1>
			</div>
				<!-- Phần menu chính -->
			<ul>
				<a href="{{url('linh-vuc/nha-may-xi-nghiep')}}">
					<li class="ml_nmxn">
						<span class="hover"></span>
						<p>Nhà máy xí nghiệp</p>
					</li>
				</a>
				<a href="{{url('linh-vuc/thi-cong-du-an')}}">
					<li class="ml_tcda">
						<span class="hover"></span>
						<p>Thi Công & Thiết kế Dự án</p>
					</li>
				</a>
				<a href="{{url('/linh-vuc/dieu-hoa-cong-nghiep')}}">
					<li class="ml_dhcn">
						<span class="hover"></span>
						<p>Điều hòa Công nghiệp</p>
					</li>
				</a>
				<a href="{{url('/linh-vuc/bat-dong-san')}}">
					<li class="ml_bds">
						<span class="hover"></span>
						<p>Bất động sản</p>
					</li>
				</a>
				<a href="{{url('/linh-vuc/du-hoc')}}">
					<li class="ml_duhoc">
						<span class="hover"></span>
						<p>Du học & xuất khẩu lao động</p>
					</li>
				</a>
				<a href="{{url('/linh-vuc-hoat-dong')}}">
					<li>
						<span class="hover"></span>
						<div><img src="{{url('/images/left222.png')}}" alt="" width="6%"></div>
					</li>
				</a>
			</ul>
		</div>
	</section>
@endif