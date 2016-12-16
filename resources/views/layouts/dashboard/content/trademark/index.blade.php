@extends('layouts.dashboard.dashboard')

@section('main-content')
	<table class="table">
		<caption><h3>SẢN PHẨM - TẤT CẢ SẢN PHẨM</h3></caption>
		<thead>
			<tr>
				<th class="text-center">ID</th>
				<th class="text-center">TÊN DANH MỤC</th>
				<th class="text-center">TRẠNG THÁI</th>
				<th class="text-center">THAO TÁC</th>
			</tr>
		</thead>
		<tbody>

		@foreach ($trademarks as $trademark)
			<tr>
				<th class="text-center">{{ $trademark->id }}</th>
				<th class="text-center"><strong><a href="{{ url('dashboard/trademark/detail/'.$trademark->url) }}">{{ $trademark->name }}</a></strong></th>
				<td class="text-center">@if ($trademark->active == 1)Mở Khóa @else Khóa @endif</td>
				<td class="text-center">
					<div class="btn-group">
						<a class="btn btn-success" href="{{ url('dashboard/trademark/edit/'.$trademark->url) }}">EDIT</a>
						<a class="btn btn-danger" href="{{ url('dashboard/trademark/delete/'.$trademark->url) }}">DELETE</a>
					</div>
				</td>
			</tr>

		@endforeach

		</tbody>
	</table>
	<div class="col-lg-12 text-center">{{ $trademarks->links() }}</div>
@overwrite
