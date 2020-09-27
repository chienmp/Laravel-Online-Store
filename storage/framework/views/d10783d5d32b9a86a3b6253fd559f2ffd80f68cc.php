;
<?php $__env->startSection('title','Giỏ hàng'); ?>;
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/cart.css')); ?>">
<script type="text/javascript">
	function updateCart(qty,rowId){
		$.get('<?php echo e(asset('cart/update')); ?>',
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
						<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="menu-item"><a
								href="<?php echo e(asset('category/'.$list->cate_id.'/'.$list->cate_slug.'.html')); ?>"
								title=""><?php echo e($list->cate_name); ?></a></li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<!-- <a href="#" id="pull">Danh mục</a> -->
				</nav>

				<div id="banner-l" class="text-center">
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-1.png')); ?>" alt="1" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-2.png')); ?>" alt="2" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-3.png')); ?>" alt="3" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-4.png')); ?>" alt="4" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-5.png')); ?>" alt="5" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-6.png')); ?>" alt="6" class="img-thumbnail"></a>
					</div>
					<div class="banner-l-item">
						<a href="#"><img src="<?php echo e(asset('img/home/banner-l-7.png')); ?>" alt="7" class="img-thumbnail"></a>
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
								<img src="<?php echo e(asset('img/home/slide-1.png')); ?>" alt="Los Angeles">
							</div>
							<div class="carousel-item">
								<img src="<?php echo e(asset('img/home/slide-2.png')); ?>" alt="Chicago">
							</div>
							<div class="carousel-item">
								<img src="<?php echo e(asset('img/home/slide-3.png')); ?>" alt="New York">
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
							<a href="#"><img src="<?php echo e(asset('img/home/banner-t-1.png')); ?>" alt=""
									class="img-thumbnail"></a>
						</div>
						<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
							<a href="#"><img src="<?php echo e(asset('img/home/banner-t-1.png')); ?>" alt=""
									class="img-thumbnail"></a>
						</div>
					</div>
				</div>

				<div id="wrap-inner">
					<div id="list-cart">
						<h3>Giỏ hàng</h3>
						<?php if(Cart::count()>0): ?>
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
								<?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><img class="img-responsive" width="100px" height="100px"
											src="<?php echo e(asset('storage/avatar/'.$cartitem->options->img)); ?>"></td>
									<td><?php echo e($cartitem->name); ?></td>
									<td>
										<div class="form-group">
											<input class="form-control" type="number" value="<?php echo e($cartitem->qty); ?>"
												onchange="updateCart(this.value,'<?php echo e($cartitem->rowId); ?>')">
										</div>
									</td>
									<td><span class="price"><?php echo e(number_format($cartitem->price,0,',','.')); ?> đ</span></td>
									<td><span class="price"><?php echo e(number_format($cartitem->price*$cartitem->qty,0,',','.')); ?>

											đ</span></td>
									<td><a class="btn btn-outline-danger"
											href="<?php echo e(asset('cart/delete/'.$cartitem->rowId)); ?>" role="button">Xóa</a></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</table>
							<div class="row" id="total-price">
								<div class="col-md-6 col-sm-12 col-xs-12">
									Tổng thanh toán: <span class="total-price"><?php echo e($total); ?> đ</span>

								</div>
								<div class="col-md-6 col-sm-12 col-xs-12">
									<a href="<?php echo e(asset('/')); ?>" class="my-btn btn">Mua tiếp</a>
									<a href="#" class="my-btn btn">Cập nhật</a>
									<a href="<?php echo e(asset('cart/delete/all')); ?>" class="my-btn btn">Xóa giỏ hàng</a>
								</div>
							</div>
						</form>
					</div>

					<div id="xac-nhan">
						<h3>Xác nhận mua hàng</h3>
						<form method="POST">
							<?php echo csrf_field(); ?>
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
				<?php else: ?>
				<h4>Không có hàng trong giỏ hàng</h4>
				<?php endif; ?>
				<!-- end main -->
			</div>
		</div>
	</div>
</section>
<!-- endmain -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\project-lar\resources\views/frontend/cart.blade.php ENDPATH**/ ?>