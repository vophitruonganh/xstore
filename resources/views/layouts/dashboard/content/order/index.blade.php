@extends('layouts.dashboard.dashboard')

@section('main-content')
<div class="main-content">
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>
				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">CHỨC NĂNG</th>
			</tr>
		</thead>
		<tbody>

		@foreach ($products as $product)
			<tr>
				<th class="text-center">{{ $product->id }}</th>
				<th class="text-center"><strong><a href="{{ url('dashboard/product/detail/'.$product->url) }}">{{ $product->name }}</a></strong></th>
				<td class="text-right">{{ $product->category_name }}</td>
				<td class="text-right">{{ $product->trademark_name }}</td>
				<td class="text-right">{{ number_format($product->price).' VNĐ' }}</td>
				<td class="text-left">{{ $product->count }}</td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="{{ url('dashboard/product/edit/'.$product->url) }}">EDIT</a>
						<a class="btn btn-danger" href="{{ url('dashboard/product/delete/'.$product->url) }}">DELETE</a>
					</div>
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>
	<div class="col-lg-12">{{ $products->links() }}</div>
</div>
@overwrite
