<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>MY Shop - @yield('title')</title>
	<link rel="stylesheet" href="{{asset('css/frontendcss/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/home.css')}}">
	<script type="text/javascript" src="{{asset('js/frontendjs/jquery-3.2.1.min.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
	<script type="text/javascript" src="{{asset('js/frontendjs/bootstrap.min.js')}}"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
		$(function() {
			var pull        = $('#pull');
			menu        = $('nav ul');
			menuHeight  = menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
	</script>
</head>

<body>
	<!-- header -->
	<header id="header">
		<div class="container">
			<div class="row">
				<div id="logo" class="col-md-3 col-sm-12 col-xs-12">
					<h1>
						<a href="{{asset('/')}}"><img src="{{asset('img/home/logo.png')}}"></a>
						<nav><a id="pull" class="btn btn-danger" href="#">
								<i class="fa fa-bars"></i>
							</a></nav>
					</h1>
				</div>
			<form class="form-inline md-form mr-auto mb-4" role="search" method="GET" action="{{asset('search/')}}">
					<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="result">
					<button class="btn aqua-gradient btn-rounded btn-sm my-0" type="submit">Tìm kiếm</button>
				  </form>
				

				<div id="cart" class="col-md-2 col-sm-12 col-xs-12">
					<a class="display" href="{{asset('cart/show')}}">Giỏ hàng</a>
					<a href="{{asset('cart/show')}}">{{Cart::count()}}</a>
				</div>
			</div>
		</div>
	</header><!-- /header -->
	@yield('main')
	<!-- endheader -->


	<!-- footer -->
	<footer id="footer">
		<div id="footer-t">
			<div class="container">
				<div class="row">
					<div id="lo-f" class="col-md-3 col-sm-12 col-xs-12 text-center">
						<a href="#"><img src="{{asset('img/home/logo.png')}}"></a>
					</div>
					<div id="about" class="col-md-3 col-sm-12 col-xs-12">
						<h3>About us</h3>
						<p class="text-justify">Giới thiệu về chúng tôi</p>
					</div>
					<div id="hotline" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Hotline</h3>
						<p>Phone : 0964 608 433</p>
						<p>Email: phamminhchien21@gmail.com</p>
					</div>
					<div id="contact" class="col-md-3 col-sm-12 col-xs-12">
						<h3>Contact Us</h3>

					</div>
				</div>
			</div>
			<div id="footer-b">
				<div class="container">
					<div class="row">
						<div id="footer-b-l" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Laravel Website</p>
						</div>
						<div id="footer-b-r" class="col-md-6 col-sm-12 col-xs-12 text-center">
							<p>Pham Minh Chien © Copyrights</p>
						</div>
					</div>
				</div>
				<div id="scroll">
					<a href="#"><img src="{{asset('img/home/scroll.png')}}"></a>
				</div>
			</div>
		</div>
	</footer>
	<!-- endfooter -->
</body>

</html>