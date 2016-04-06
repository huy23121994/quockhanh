<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Nhập</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		 }
		body{
			width: 100%;
			height: 100vh;
			background-color: #2C363F;
			overflow: hidden;
		}
		#login_frame{
			width: 400px;
			height: 360px;
			margin-top: 150px;
			margin-left: auto;
			margin-right: auto;
			background-color: rgba(255,255,255,0.02);
			text-align: center;
		}
		#login_frame pre{
			font-family: 'Helvetica';
			color: #fff;
			text-align: center;
			font-size: 11pt;
			font-weight: 100;
			padding-top: 60px;
		}
		#admin_login{
			width: 244px;
			height: auto;
			margin-bottom: 20px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 15px;
			font-family: 'Open Sans',Sans-serif;
			font-size: 14px;
		}
		#admin_login input{
			width: 230px;
			height: 36px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 15px;
			padding-left: 12px;
			background-color: rgba(255,255,255,0.2);
			color: #fff;
			outline:none;
			border: none;
		}
		#admin_login input[type='submit']{
			width: 242px;
			padding: 10px 20px;
			margin-top: 20px;
			border:none;
			background-color: #1E9A53;
			color: #fff;
			outline: none;
		}
		em{
			font-family: Arial;
			font-size: 10pt;
			color: #fff;
			display: inline-block;
		}
	</style>
</head>
<body>
	<section id="login_frame">
		<pre>Đ Ă N G   N H Ậ P   Q U Ả N   T R Ị</pre>
		<form id="admin_login">
			<input type="text" placeholder="quantri@quockhanh.vn" class="account">
			<input type="password" value="password" class="password">
			<input type="submit" value="Đăng Nhập" class="btn-submit">
		</form>
		<em></em>
	</section>

	{{-- Include JS --}}
	<script type="text/javascript" src="{{url('/js/jQuery-2.1.4.min.js')}}"></script>
	<script type="text/javascript">
		$('#admin_login').on('submit',function(){
			var acc  = $('.account').val();
			var pass = $('.password').val();
			$.ajax({
				type	: 'POST',
				url 	: "{{url('quan-tri/login')}}",
				cache	: false,
				data	: {account: acc, password: pass},
				success: function(data){
					//console.log(data);
					if(data=='true'){
						// alert('đúng');
						window.location.href="{{url()}}";
					}else
					$('em').html('Sai tài khoản hoặc mật khẩu');
				}
			});
			return false;
		});
	</script>
</body>
</html>