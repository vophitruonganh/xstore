
@section('website')

{{-- 	<script type="text/javascript">
		$(document).ready(function() {
			$('.subnav').click(function(event) {
				$(this).find('li').slideDown(400);
			});

		});
	</script> --}}
	<div class="sitebar">
		<div class="sitebar-top text-center">
			@if (Auth::user()->avata)
			 <img class="img-resonsive" style="float:none !important;margin:40px 0px 0px 0px !important;width:70%;border-radius:50%;box-shadow: 0px 0px 4px 2px #aaa;" src="{{ asset('images/'.Auth::user()->avata) }}" alt="{{ Auth::user()->avata}}">
			 @endif
			 <h2 class="text-center" style="color:#34A853">{{ Auth::user()->firstname .' '.Auth::user()->lastname }}</h2>
			 <span>Status : @if (Auth::user()->status == true)
			 	Online
			 @else
			 	Offline
			 @endif</span>
		</div>
		<div class="subnav">
			<h4></span> Website</h4>
			<ul>
				<li><a href="#">Infomaion</a></li>
				<li><a href="#">Domain</a></li>
				<li><a href="#">Page</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Product</h4>
			<ul>

				<li><a href="{{ url('dashboard/category/create') }}">Create New Category</a></li>
				<li><a href="{{ url('dashboard/trademark/create') }}">Create New Trademark</a></li>
				<li><a href="{{ url('dashboard/product/create') }}">Create New Product</a></li>

				<li><a href="{{ url('dashboard/category') }}">List Category</a></li>

				<li><a href="{{ url('dashboard/trademark') }}">List Trademark</a></li>
				<li><a href="{{ url('dashboard/product') }}">List Product Active</a></li>
				<li><a href="{{ url('dashboard/product/lock') }}">List Product Deactive</a></li>

			</ul>
		</div>
		<div class="subnav">
			<h4>Order</h4>
			<ul>

				<li><a href="#">View All Order</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Shipping</h4>
			<ul>
				<li><a href="#">All Ship</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Upload</h4>
			<ul>
				<li><a href="#">Thư Viện Hình Ảnh</a></li>
			</ul>
		</div>
		<div class="subnav">
			<h4>Site Option</h4>
			<ul>
				<li><a href="#">Template Theme</a></li>
				<li><a href="#">Infomation Site</a></li>
			</
			</ul>
		</div>

</div>