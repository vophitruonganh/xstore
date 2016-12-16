@extends('layouts.dashboard.dashboard')

@section('main-content')

	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				{{-- <th class="text-center">HÌNH ẢNH</th> --}}
				<th class="text-center">TÊN SẢN PHẨM</th>
				<th class="text-center">NHÓM</th>

				<th class="text-center">THƯƠNG HIỆU</th>
				<th class="text-center">GIÁ</th>
				<th class="text-center">SỐ LƯỢNG</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>

		@foreach ($products as $product)

			<tr>
				{{-- <th class="text-center">{{ $product->id }}</th> --}}
				@foreach ($product->attachment as $attachment)
				{{-- <th class="text-center"><image style="max-width: 100px;" class="img-responsive" src=""></th> --}}
				@endforeach
				<th class="text-center"><strong><a href="{{ url('dashboard/product/detail/'.$product->id) }}">{{ $product->name }}</a></strong></th>
				@foreach ($product->category as $category)
					<td class="text-center">{{ $category->name}}</td>
				@endforeach
				@foreach ($product->trademark as $trademark)
					<th class="text-center">{{ $trademark->name}}</td>
				@endforeach
				<td class="text-right">{{ number_format($product->price).' VNĐ' }}</td>
				<td class="text-center">{{ $product->count }}</td>
				<td class="text-center">@if ($product->status == 1) {{ 'Đang Bán' }} @else{{ 'Ngưng Bán' }} @endif</td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="{{ url('dashboard/product/edit/'.$product->id) }}">Edit</a>
						<a class="btn btn-danger" href="{{ url('dashboard/product/delete/'.$product->id) }}">Drop</a>
					</div>
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $products->links() }}</div>

@overwrite
