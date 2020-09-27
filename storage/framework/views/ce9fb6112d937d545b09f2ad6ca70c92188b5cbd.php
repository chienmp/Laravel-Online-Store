;
<?php $__env->startSection('title','Chi tiết sản phẩm'); ?>;
<?php $__env->startSection('main'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/details.css')); ?>">

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

					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3><?php echo e($item->prod_name); ?></h3>
							<div class="row">
								<div id="product-img" class="col-xs-12 col-sm-12 col-md-3 text-center">
									<img height="385px" width="220px" src="<?php echo e(asset('storage/avatar/'.$item->prod_img)); ?>">
								</div>
								<div id="product-details" class="col-xs-12 col-sm-12 col-md-9">
									<p>Giá: <span class="price"><?php echo e(number_format($item->prod_price,0,',','.')); ?> VND</span></p>
									<p>Bảo hành: <?php echo e($item->prod_warranty); ?></p> 
									<p>Phụ kiện: <?php echo e($item->prod_accessories); ?></p>
									<p>Tình trạng: <?php echo e($item->prod_condition); ?></p>
									<p>Khuyến mại: <?php echo e($item->prod_promotion); ?></p>
									<p>Còn hàng: <?php if($item->prod_status==1): ?> Còn hàng <?php else: ?> Hết hàng <?php endif; ?></p>
									<p class="add-cart text-center"><a href="<?php echo e(asset('cart/add/'.$item->prod_id)); ?>">Đặt hàng</a></p>
								</div>
							</div>							
						</div>
						<div id="product-detail">
							<h3>Chi tiết sản phẩm</h3>
							<p class="text-justify"><?php echo $item->prod_description; ?></p>
						</div>
						<div id="comment">
							<h3>Bình luận</h3>
							<div class="col-md-9 comment">
								<form method="post">
									<?php echo csrf_field(); ?>
									<div class="form-group">
										<label for="email">Email:</label>
										<input required type="email" class="form-control" id="email" name="email">
									</div>
									<div class="form-group">
										<label for="name">Tên:</label>
										<input required type="text" class="form-control" id="name" name="name">
									</div>
									<div class="form-group">
										<label for="cm">Bình luận:</label>
										<textarea required rows="10" id="cm" class="form-control" name="content"></textarea>
									</div>
									<div class="form-group text-right">
										<button type="submit" class="btn btn-default">Gửi</button>
									</div>
								</form>
							</div>
						</div>
						<div id="comment-list">
							<?php $__currentLoopData = $comment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cmt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<ul>
							<img width="50px" height="40px" src="<?php echo e(asset('img/details/people.png')); ?>">
								<li class="com-title">
									<?php echo e($cmt->com_name); ?>

									<br>
								<span><?php echo e(date('d/m/Y H:i',strtotime($cmt->created_at))); ?></span>	
								</li>
								<li class="com-details">
									<?php echo e($cmt->com_content); ?>

								</li>
							</ul>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
						</div>
					</div>					
					<!-- end main -->
				</div>
			</div>
		</div>
	</section>
	<!-- endmain -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\project-lar\resources\views/frontend/details.blade.php ENDPATH**/ ?>