<i id="b_end_setting" class="flaticon-settings21"></i>
<ul class="b_end_list">
	<li class="ml_doi_pass">Đổi mật khẩu</li>
	<li><a href="" download>Tài liệu hướng dẫn</a></li>
	<li class="dang_xuat"><a href="{{url('quan-tri/logout')}}">Thoát</a></li>
</ul>
<form id="b_end_pass">
	<input type="password" placeholder="Mật khẩu cũ..." name="last_pass">
	<input type="password" placeholder="Mật khẩu mới..." name="new_pass">
	<em class="ml_return"></em>
	<input type="submit" value="XÁC NHẬN"><span class="submit_huy">HỦY</span>
</form>
<div class="return_ok">
	<p>Đổi mật khẩu thành công</p>
</div>
<script type="text/javascript">
    $('#b_end_setting').on('click',function(){
		$('.b_end_list').toggle();
	});	
	$('.ml_doi_pass').on('click',function(){
		$('.b_end_list').css('display','none');
		$('#b_end_pass').show();	
	});
	$('.submit_huy').on('click',function(){
		$('#b_end_pass').css('display','none');
		$('.b_end_list').show();
	});
</script>
<script type="text/javascript">
	$('#b_end_pass').on('submit',function(e){
		e.preventDefault();
		var form = new FormData($('#b_end_pass')[0]);
		$.ajax({
			type: "POST",
			url : "{{url('quan-tri/password')}}",
			data: form,
			cache: false,
			processData: false,
			contentType: false,
		}).done(function(data){
			if (data=="true") {
				$('#b_end_pass > input[type="password"]').val('');
				$('.return_ok').css('display','block');
				$('#b_end_pass').css('display','none');	
				setTimeout(function(){
					$('.return_ok').css('display','none');
				}, 2000);
			}else{
				$('.ml_return').html('Sai mật khẩu cũ.');
				setTimeout(function(){
					$('.ml_return').html('');
					$('#b_end_pass > input[type="password"]').val('');
				},800);
			}
		});
		return false;
	});
</script>
