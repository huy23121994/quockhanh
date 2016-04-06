<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
	<title>QUỐC KHÁNH COMPANY</title>
	<style type="text/css">
		*{margin: 0;padding: 0;}

		body{min-width: 1340px;}
		
		/*Loading style*/
		#ml_loading{
			height: 100vh;
			width: 100%;
			background-color: #FAFAFA;
			background-image: url('../images/Loading.svg');
			background-size: 100% 100vh;
			background-repeat: no-repeat;
			overflow: hidden;
			position: fixed;
			z-index: 999999;
		}
		.ml_all_process{
			width: 100%;
			height: 1px;
			background-color: #D9D9D9;
			position: relative;
			top: 50vh;
		}
		.ml_pro{
			max-width: 100%;
			width: 0%;
			height: 1px;
			position: absolute;
			top: 0;
			left: 0;
			background-color: #404040;
		}
		.ml_pro.running{
			width: 100%;
			transition: width 1.5s;
			-webkit-transition: width 1.5s;
			-moz-transition: width 1.5s;
		}
		.ml_text_loading{
			font-family: "Segoe UI Semibold";
			color: #000000;
			text-align: center;
			width: 269px;
			height: auto;
			position: relative;
			top: 44vh;
			left: 50%;
		}
		.ml_text_loading h3{
			font-size: 18pt;
		}
		.ml_text_loading h2{
			font-size: 12pt;
			margin-top: 18px;
		}
		.ml_text_loading h2 span{
			color: #0E4194;
		}
	</style>
</head>
<body>
	
	{{-- Phần loading --}}
	<section id="ml_loading">
			<div class="ml_all_process">
				<div class="ml_pro"></div>
			</div>
			<div class="ml_text_loading">
				<h3>W E L C O M E</h3>
				<h2><span>QUOC KHANH</span> COMPANY</h2>
			</div>
	</section>
	{{-- Hết phần loading --}}

	<script type="text/javascript" src="{{url('/js/jQuery-2.1.4.min.js')}}"></script>
	<script type="text/javascript">
		$('.ml_pro').removeClass('running');
		$(document).ready(function(){
			$('.ml_pro').addClass('running');
			setTimeout(function(){ 
				window.location.href="{{url('/gioi-thieu')}}"; 
			}, 1000);
		});
	</script>
</body>
</html>