@extends('layouts.adminpanel')

@section('content')
<div class="container">
	<a href="{{ route('viewuniversities',app()->getLocale())}}">< Back to University List</a><br><br><h3>University Details</h3>
	<hr>
	<div class="row">
		<div class="col-lg-6">
			<img src="http://localhost/adminpanel/public/logo/{{$finduniversity->logo}}" width="250" height="250">
			<h3 style="color:#02003b;">{{ $finduniversity->name}}</h3>
			<h6 style="color:#f31121;"><span style="color:#111;">Type of Institute :</span> {{ $finduniversity->type}} </h6>
			<h6 style="color:#f31121;"> <span style="color:#111;">City :</span> {{ $finduniversity->city}} </h6>
			<h6 style="color:#f31121;"><span style="color:#111;">Country :</span> {{ $finduniversity->country}}</h6>
			<h6 style="color:#f31121;"><span style="color:#111;">Address :</span>{{ $finduniversity->address}}</h6>
			<h6 style="color:#f31121;"><span style="color:#111;">Area :</span> {{ $finduniversity->area}}  </h6>
			<br>
		</div>
		<div class="col-lg-3">
			
<h5><i class="fa fa-phone" aria-hidden="true" style="color:#02003b;"></i> {{ $finduniversity->phone}}</h5>


		</div>
				<div class="col-lg-3">
			
<h5><i class="fas fa-envelope-open-text" style="color:#02003b;"></i> {{ $finduniversity->email}}</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-11">
			<h4 style="color:#02003b;">Description : </h4><br> @php  echo $finduniversity->description; @endphp	
			<br>
		</div>
	</div>

	

</div>
@endsection