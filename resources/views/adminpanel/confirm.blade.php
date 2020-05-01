@extends('layouts.universitypanel')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-3"></div>
		<div class="col-lg-6">
			<div class="alert alert-info"><br><br><br><br>
				<h4 style="text-align: center;"><i class="fas fa-check-circle" style="font-size:32px;"></i> University Content Added. <a href="{{ route('home') }}"> Continue </a></h4>
				
				<br><br><br><br>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>

@endsection