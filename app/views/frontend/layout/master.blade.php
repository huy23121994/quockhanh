
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>

	<title>@yield('title')</title>
	
	@include('frontend.partials.css')
	@yield('addcss')

</head>
<body>
	<!-- Phần menu - fixed -->
	@include('frontend.partials.menu')	

	{{-- Phần nội dung thay đổi --}}
	@yield('listing')

	<!-- Inlude JS -->
	@include('frontend.partials.js')
	@yield('addjs')
	@if(Session::has('admin'))
		@include('backend.setting')
	@endif
</body>
</html>
