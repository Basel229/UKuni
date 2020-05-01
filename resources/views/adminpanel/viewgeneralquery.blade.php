@extends('layouts.adminpanel')

@section('content')
<div class="container">
<h3 style="color:#02003b;">Detailed Data : <span style="color:#f31121;">{{ $viewid->name}}</span></h3>
<hr>
<br>
<div class="row">
	<div class="col-lg-6">
		
		<h5 style="color:#02003b;">Name : <span style="color:#f31121;">{{ $viewid->name}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Email : <span style="color:#f31121;">{{ $viewid->email}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Phone Number : <span style="color:#f31121;">{{ $viewid->phone_number}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">User's GPA : <span style="color:#f31121;">{{ $viewid->gpa}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Subject : <span style="color:#f31121;">{{ $viewid->subject}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Degree Level : <span style="color:#f31121;">{{ $viewid->degree_level}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">User's Preferred Destination : <span style="color:#f31121;">{{ $viewid->preferred_destination}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Country : <span style="color:#f31121;">{{ $viewid->country}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">City : <span style="color:#f31121;">{{ $viewid->city}}</span></h5>
		<hr>
		<br>
		<a href="{{ route('generalinquiry')}}" class="btn btn-info">Back to Inquiries</a> 
		<br><br><br>
	</div>
	<div class="col-lg-5">
		
		
	</div>
</div>	
</div>


@endsection