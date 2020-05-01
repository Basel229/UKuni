@extends('layouts.adminpanel')

@section('content')
<div class="container">
<h3 style="color:#02003b;">Detailed Data : <span style="color:#f31121;">{{ $viewid->name}}</span></h3>
<hr>
<br>
<div class="row">
	<div class="col-lg-6">
		
		<h5 style="color:#02003b;">Name : <span style="color:#f31121;">{{ $viewid->fname}} {{ $viewid->lname}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Email : <span style="color:#f31121;">{{ $viewid->email}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Phone Number : <span style="color:#f31121;">{{ $viewid->phone_number}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Age : <span style="color:#f31121;">{{ $viewid->age}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Marital Status : <span style="color:#f31121;">{{ $viewid->marital_status}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">How Many children user's have : <span style="color:#f31121;">{{ $viewid->children}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Language Skills - English : <span style="color:#f31121;">{{ $viewid->english}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Language Skills - French : <span style="color:#f31121;">{{ $viewid->french}}</span></h5>
		<hr>
		
		<a href="{{ route('immigrationinquiry')}}" class="btn btn-info">Back to Inquiries</a> 
		<br><br><br>
	</div>
	<div class="col-lg-6">
		<h5 style="color:#02003b;">Level of Studies : <span style="color:#f31121;">{{ $viewid->level_of_studies}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Have you ever : <span style="color:#f31121;">{{ $viewid->have_you_ever}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Visa Refusal in Canada : <span style="color:#f31121;">{{ $viewid->visa_status}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Any Relatives in Canada : <span style="color:#f31121;">{{ $viewid->relatives_canada}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">Total Money and Assets in Canadian Dollars : <span style="color:#f31121;">{{ $viewid->net_worth}}</span></h5>
		<hr>
		<h5 style="color:#02003b;">What Type of Information user's looking for : <span style="color:#f31121;">{{ $viewid->information}}</span></h5>
		<hr>
		<a href="{{ asset('resumes/') }}/{{$viewid->resume}}" class="btn btn-info" target = "_blank">View Resume</a> 
		
	</div>
</div>	
</div>


@endsection