@extends('backend.master')
@section('title','Chỉnh sửa danh mục sản phẩm')
@section('main')
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Sửa danh mục
						</div>
						<div class="panel-body">
						@include('note')
							<form method="post">
							@csrf
							<div class="form-group">
								<label>Tên danh mục:</label>
								<input type="text" name="name" class="form-control" placeholder="Tên danh mục..." value="{{$cate->cate_name}}">
							</div>
							<input type="submit" name="submit" class="btn btn-primary" value="Sửa">
							<a href="{{asset('admin/category')}}" class="btn btn-danger">Hủy bỏ</a>
                             </form>
						</div>
					</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	@stop