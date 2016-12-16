<!DOCTYPE html>
<html lang="en">
    @include('layouts.dashboard.head')
<body>
@yield('header')

@section('navigation')
    @include('layouts.dashboard.navigation')
@show
<div class="col-lg-3">
	@section('main-left')
	    @include('layouts.dashboard.mainleft')
	@show
</div>
<div class="main-content col-lg-9">
	@section('main-content')
	    @include('layouts.dashboard.maincontent')
	@show
</div>
<div class="col-lg-3">
	@section('main-right')
	    @include('layouts.dashboard.mainright')
	@show
</div>
<div class="col-lg-12">
	@section('footer')
	    @include('layouts.dashboard.footer')
	@show
</div>
</body>
</html>
