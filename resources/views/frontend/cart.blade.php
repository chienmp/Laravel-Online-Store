@extends('frontend.master');
@section('title','Giỏ hàng');
@section('main')
<link rel="stylesheet" href="{{asset('css/cart.css')}}">
<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get('{{asset('cart/update')}}',
		{qty:qty,rowId:rowId},
		function(){
			location.reload();
		}
		)
	}
</script>

<!-- main -->
<section id="body">
	<div class="container">
		<div class="row">
			<div id="sidebar" class="col-md-3">
				<nav id="menu">
					<ul>
						<li class="menu-item">danh mục sản phẩm</li>
						@foreach ($cate as $list)
						<li class="menu-item"><a
								href="{{asset('category/'.$list->cate_id.'/'.$list->cate_slug.'.html')}}"
								title="">{{$list->cate_name}}</a></li>
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
					<div id="list-cart">
						<h3>Giỏ hàng</h3>
						@if(Cart::count()>0)
						<form>
							<table class="table table-bordered .table-responsive text-center">
								<tr class="active">
									<td width="11.111%">Ảnh mô tả</td>
									<td width="22.222%">Tên sản phẩm</td>
									<td width="22.222%">Số lượng</td>
									<td width="16.6665%">Đơn giá</td>
									<td width="16.6665%">Thành tiền</td>
									<td width="11.112%">Xóa</td>
								</tr>
								@foreach ($items as $cartitem)
								<tr>
									<td><img class="img-responsive" width="100px" height="100px"
											src="{{asset('storage/avatar/'.$cartitem->options->img)}}"></td>
									<td>{{$cartitem->name}}</td>
									<td>
										<div class="form-group">
											<input class="form-control" type="number" value="{{$cartitem->qty}}"
												onchange="updateCart(this.value,'{{$cartitem->rowId}}')">
										</div>
									</td>
									<td><span class="price">{{number_format($cartitem->price,0,',','.')}} đ</span></td>
									<td><span class="price">{{number_format($cartitem->price*$cartitem->qty,0,',','.')}}
											đ</span></td>
									<td><a class="btn btn-outline-danger"
											href="{{asset('cart/delete/'.$cartitem->rowId)}}" role="button">Xóa</a></td>
								</tr>
								@endforeach

							</table>
							<div class="row" id="total-price">
								<div class="col-md-6 col-sm-12 col-xs-12">
									Tổng thanh toán: <span class="total-price">{{$total}} đ</span>

								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<a href="{{asset('/')}}" class="my-btn btn">Mua tiếp</a>
									<a href="#" class="my-btn btn">Cập nhật</a>
									<a href="{{asset('cart/delete/all')}}" class="my-btn btn">Xóa giỏ hàng</a>
								</div>
							</div>
						</form>
					</div>

					<div id="xac-nhan">
						<h3>Xác nhận mua hàng</h3>
						<form method="POST">
							@csrf
							<div class="form-group">
								<label for="email">Email address:</label>
								<input required type="email" class="form-control" id="email" name="email">
							</div>
							<div class="form-group">
								<label for="name">Họ và tên:</label>
								<input required type="text" class="form-control" id="name" name="name">
							</div>
							<div class="form-group">
								<label for="phone">Số điện thoại:</label>
								<input required type="number" class="form-control" id="phone" name="phone">
							</div>
							<div class="form-group">
								<label for="add">Địa chỉ:</label>
								<input required type="text" class="form-control" id="add" name="add">
							</div>
							<div class="form-group text-right">
								<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
							</div>
						</form>
					</div>
				</div>
				@else
				<h4>Không có hàng trong giỏ hàng</h4>
				@endif
				<!-- end main -->
			</div>
		</div>
	</div>
</section>
<!-- endmain -->
@stop