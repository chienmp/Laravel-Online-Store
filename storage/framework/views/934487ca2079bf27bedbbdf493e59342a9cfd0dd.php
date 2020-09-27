<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $__env->yieldContent('title'); ?> | Vietpro shop</title>
<link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo asset('css/datepicker3.css')?>" rel="stylesheet">
<link href="<?php echo asset('css/styles.css')?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo asset('ckeditor\ckeditor.js')?>"></script>
<script src="<?php echo asset('js/lumino.glyphs.js')?>"></script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo e(asset('admin/home')); ?>">My Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo e(Auth::user()->email); ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="<?php echo e(asset('logout')); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li role="presentation" class="divider"></li>
			<li class="active"><a href="<?php echo e(asset('admin/home')); ?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Trang chủ</a></li>
			<li><a href="<?php echo e(asset('admin/product')); ?>"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Sản phẩm</a></li>
			<li><a href="<?php echo e(asset('admin/category')); ?>"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Danh mục</a></li>
			<li role="presentation" class="divider"></li>
		</ul>
		
	</div><!--/.sidebar-->
		
	<!--Main-->
	<?php echo $__env->yieldContent('main'); ?>	  

	<script src="<?php echo asset('js/jquery-1.11.1.min.js')?>"></script>
	<script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
	<script src="<?php echo asset('js/chart.min.js')?>"></script>
	<script src="<?php echo asset('js/chart-data.js')?>"></script>
	<script src="<?php echo asset('js/easypiechart.js')?>"></script>
	<script src="<?php echo asset('js/easypiechart-data.js')?>"></script>
	<script src="<?php echo asset('js/bootstrap-datepicker.js')?>"></script>
	
	<script>
		$('#calendar').datepicker({
  });

  !function ($) {
      $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
          $(this).find('em:first').toggleClass("glyphicon-minus");      
      }); 
      $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
  }(window.jQuery);

  $(window).on('resize', function () {
    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
  })
  $(window).on('resize', function () {
    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
  })
  // Chang Image add product
  function changeImg(input){
      //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
      if(input.files && input.files[0]){
          var reader = new FileReader();
          //Sự kiện file đã được load vào website
          reader.onload = function(e){
              //Thay đổi đường dẫn ảnh
              $('#avatar').attr('src',e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
      }
  }
  $(document).ready(function() {
      $('#avatar').click(function(){
          $('#img').click();
      });
  });
	</script>	
</body>

</html>
<?php /**PATH D:\XAMPP\htdocs\project-lar\resources\views/backend/master.blade.php ENDPATH**/ ?>