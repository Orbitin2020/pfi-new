<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts_user.incl_top')
</head>

<body id="bg">
	<div id="loading-area" class="loading-page-1">
		<div class="bar-load">
			<div class="line"></div>
		</div>
	</div>
	<div class="page-wraper">
		<!-- Header -->
		<header class="site-header mo-left header header-transparent style-2">
			<!-- Main Header -->
			@include('layouts_user.header')
			<!-- Main Header End -->
		</header>

		{{-- Content --}}
		@yield('content')
		{{-- End Content --}}

		<!-- Footer -->
		@include('layouts_user.footer')
		<!-- Footer End -->

		<button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
	</div>
	<!-- JAVASCRIPT FILES ========================================= -->
	@include('layouts_user.incl_bot')
	@stack('scripts')
</body>

</html>