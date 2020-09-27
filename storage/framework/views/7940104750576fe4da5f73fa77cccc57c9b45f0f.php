;
<?php $__env->startSection('title','Dat hang thanh cong!'); ?>;
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/complete.css')); ?>">
<body>    
	

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
									<img src="<?php echo e(asset('img/home/slide-1.png')); ?>" alt="Los Angeles" >
								</div>
								<div class="carousel-item">
									<img src="<?php echo e(asset('img/home/slide-2.png')); ?>" alt="Chicago">
								</div>
								<div class="carousel-item">
									<img src="<?php echo e(asset('img/home/slide-3.png')); ?>" alt="New York" >
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
								<a href="#"><img src="<?php echo e(asset('img/home/banner-t-1.png')); ?>" alt="" class="img-thumbnail"></a>
							</div>
							<div class="banner-t-item col-md-6 col-sm-12 col-xs-12">
								<a href="#"><img src="<?php echo e(asset('img/home/banner-t-1.png')); ?>" alt="" class="img-thumbnail"></a>
							</div>
						</div>					
					</div>

					<div id="wrap-inner">
						<div id="complete">
							<p class="info">Quý khách đã đặt hàng thành công!</p>
							<p>• Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin Khách hàng của chúng Tôi</p>
							<p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
							<p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
							<p>• Trụ sở chính: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội</p>
							<p>Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</p>
						</div>
						<p class="text-right return"><a href="<?php echo e(asset('/')); ?>">Quay lại trang chủ</a></p>
					</div>					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->

	
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\project-lar\resources\views/frontend/complete.blade.php ENDPATH**/ ?>