;
<?php $__env->startSection('title','Cập nhật sản phẩm'); ?>;
<?php $__env->startSection('main'); ?>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div>
	<!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Sửa sản phẩm</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group">
									<label>Tên sản phẩm</label>
									<input required type="text" name="name" class="form-control" value="<?php echo e($product->prod_name); ?>">
								</div>
								<div class="form-group">
									<label>Giá sản phẩm</label>
									<input required type="number" value="<?php echo e($product->prod_price); ?>" name="price" class="form-control">
								</div>
								<div class="form-group">
									<label>Ảnh sản phẩm</label>
									<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
									<img id="avatar" class="thumbnail" width="300px" src="<?php echo e(url('storage/avatar/'.$product->prod_img)); ?>">
								</div>
								<div class="form-group">
									<label>Phụ kiện</label>
									<input required type="text" name="accessories" class="form-control" value="<?php echo e($product->prod_accessories); ?>">
								</div>
								<div class="form-group">
									<label>Bảo hành</label>
									<input required type="text" name="warranty" class="form-control" value="<?php echo e($product->prod_warranty); ?>">
								</div>
								<div class="form-group">
									<label>Khuyến mãi</label>
									<input required type="text" name="promotion" class="form-control" value="<?php echo e($product->prod_promotion); ?>">
								</div>
								<div class="form-group">
									<label>Tình trạng</label>
									<input required type="text" name="condition" class="form-control" value="<?php echo e($product->prod_condition); ?>">
								</div>
								<div class="form-group">
									<label>Trạng thái</label>
									<select required name="status" class="form-control">
										<option value="1" <?php if($product->prod_status==1): ?> checked <?php endif; ?>>Còn hàng</option>
										<option value="0"<?php if($product->prod_status==0): ?> checked <?php endif; ?>>Hết hàng</option>
									</select>
								</div>
								<div class="form-group">
									<label>Miêu tả</label>
									<textarea required class="ckeditor" name="description"><?php echo e($product->prod_description); ?></textarea>
								</div>
								<div class="form-group">
									<label>Danh mục</label>
									<select required name="cate" class="form-control">
										<?php $__currentLoopData = $listcate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<option value="<?php echo e($cate->cate_id); ?>" <?php if($product->prod_cate == $cate->cate_id): ?> selected <?php endif; ?>><?php echo e($cate->cate_name); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
								</div>
								<div class="form-group">
									<label>Sản phẩm nổi bật</label><br>
									Có: <input type="radio" name="featured" value="1"  <?php if($product->prod_featured==1): ?> selected <?php endif; ?>>
									Không: <input type="radio" checked name="featured" value="0" <?php if($product->prod_featured==0): ?> selected <?php endif; ?>>
								</div>
								<input type="submit" name="submit" value="Update" class="btn btn-primary">
								<a href="#" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--/.row-->
</div>
<!--/.main-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\XAMPP\htdocs\project-lar\resources\views/backend/editproduct.blade.php ENDPATH**/ ?>