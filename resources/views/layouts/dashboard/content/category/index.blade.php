@extends('layouts.dashboard.dashboard')

@section('main-content')
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">ĐỊA CHỈ</th>
				<th class="text-center">HÌNH ẢNH</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($categories as $category)
			<tr class="text-center">
				<th class="text-center">{{ $category->id }}</th>
				<th class="text-center"><strong><a href="{{ url('dashboard/category/detail/'.$category->url) }}">{{ $category->name }}</a></strong></th>
				<td class="text-center">{{ $category->url }}</td>
				<td class="text-center">{{ $category->image or 'ĐANG CẬP NHẬT' }}</td>
				<td class="text-center">@if ($category->active == 1)Mở Khóa @else Khóa @endif</td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="{{ url('dashboard/category/edit/'.$category->url) }}">Edit</a>
						<a class="btn btn-danger" href="{{ url('dashboard/category/delete/'.$category->url) }}">Drop</a>
					</div>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $categories->links() }}</div>
@overwrite
