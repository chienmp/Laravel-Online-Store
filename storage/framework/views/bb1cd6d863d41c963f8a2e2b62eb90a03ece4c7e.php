;
<?php $__env->startSection('title','Khách hàng'); ?>;
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/email.css')); ?>">

	<!-- main -->
	<section id="body">
		<div class="container">
			<div class="row">
				<div id="sidebar" class="col-md-3">
					<nav id="menu">
						<ul>
							<li class="menu-item">danh mục sản phẩm</li>
							<?php $__currentLoopData = $cate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li class="menu-item"><a href="<?php echo e(asset('category/'.$list->cate_id.'/'.$list->cate_slug.'.html')); ?>" title=""><?php echo e($list->cate_name); ?></a></li>
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
						<div id="khach-hang">
							<h3>Thông tin khách hàng</h3>
							<p>
								<span class="info">Khách hàng: </span>
								<?php echo e($info['name']); ?>

							</p>
							<p>
								<span class="info">Email: </span>
								<?php echo e($info['email']); ?>

							</p>
							<p>
								<span class="info">Điện thoại: </span>
								<?php echo e($info['phone']); ?>

							</p>
							<p>
								<span class="info">Địa chỉ: </span>
								<?php echo e($info['add']); ?>

							</p>
						</div>						
						<div id="hoa-don">
							<h3>Hóa đơn mua hàng</h3>							
							<table class="table-bordered table-responsive">
								<tr class="bold">
									<td width="30%">Tên sản phẩm</td>
									<td width="25%">Giá</td>
									<td width="20%">Số lượng</td>
									<td width="15%">Thành tiền</td>
								</tr>
								<?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
								<td><?php echo e($item->name); ?></td>
									<td class="price"><?php echo e(number_format($item->price,0,',','.')); ?> VND</td>
									<td><?php echo e($item->qty); ?></td>
									<td class="price"><?php echo e(number_format($item->price*$item->qty,0,',','.')); ?> VND</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
															
								<tr>
									<td colspan="3">Tổng tiền:</td>
									<td class="total-price"><?php echo e($total); ?> VND</td>
								</tr>
							</table>
						</div>
						<div id="xac-nhan">
							<br>
							<p align="justify">
								<b>Quý khách đã đặt hàng thành công!</b><br />
								• Sản phẩm của Quý khách sẽ được chuyển đến Địa chỉ có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.<br />
								• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng.<br />
								<b><br />Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</b>
							</p>
						</div>
					</div>					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\project-lar\resources\views/frontend/email.blade.php ENDPATH**/ ?>