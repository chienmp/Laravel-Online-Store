@extends('frontend.master');
@section('title','Tìm kiếm');
@section('main')
<link rel="stylesheet" href="{{asset('css/search.css')}}">

<!-- main -->
<section id="body">
	<div class="container">
		<div class="row">
			<div id="sidebar" class="col-md-3">
				<nav id="menu">
					<ul>
						<li class="menu-item">danh mục sản phẩm</li>
						@foreach ($cate as $list)
						<li class="menu-item"><a href="#" title="">{{$list->cate_name}}</a></li>
						@endforeach
					</ul>
					<!-- <a href="#" id="pull">Danh mục</a> -->
				</nav>

				<div id="banner-l" class="text-center">
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-1.png')}}" alt="1" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-2.png')}}" alt="2" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-3.png')}}" alt="3" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-4.png')}}" alt="4" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-5.png')}}" alt="5" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-6.png')}}" alt="6" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="{{asset('img/home/banner-l-7.png')}}" alt="7" class="img-thumbnail"></a>
					</div>
				</div>
			</div>

			<div id="main" class="col-md-9">
				<!-- main -->
				<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
				<div id="slider">
					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{asset('img/home/slide-1.png')}}" alt="Los Angeles">
							</div>
							<div class="carousel-item">
								<img src="{{asset('img/home/slide-2.png')}}" alt="Chicago">
							</div>
							<div class="carousel-item">
								<img src="{{asset('img/home/slide-3.png')}}" alt="New York">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
				</div>

				<div id="banner-t" class="text-center">
					<div class="row">
						<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
							<a href="#"><img src="{{asset('img/home/banner-t-1.png')}}" alt=""
									class="img-thumbnail"></a>
						</div>
						<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
							<a href="#"><img src="{{asset('img/home/banner-t-1.png')}}" alt=""
									class="img-thumbnail"></a>
						</div>
					</div>
				</div>



				<div id="wrap-inner">
					<div class="products">
					<h3>Tìm kiếm với từ khóa: <span>{{$keyword}}</span></h3>
						<div class="product-list row">
							@foreach($items as $item)
							<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img height="150px" src="{{asset('storage/avatar/'.$item->prod_img)}}" class="img-thumbnail"></a>
									<p><a href="#">{{$item->prod_name}}</a></p>
									<p class="price">{{number_format($item->prod_price,0,',','.')}} VND</p>	  
									<div class="marsk">
										<a href="{{asset('detail/'.$item->prod_id.'/'.$item->prod_slug.'.html')}}">Xem chi tiết</a>
									</div>                                    
								</div>
							@endforeach
							</div> 
						</div>
					</div>

					<div id="pagination">
						<div class="col-md-12">
						{{$items->links()}}
						</div>							
					</div>
				</div>


				<!-- end main -->
			</div>
		</div>
	</div>
</section>
<!-- endmain -->
@stop