@extends('layouts.user')
@section('content')
<!-- About Us slider -->

<br><br>
<!-- About Us slider -->
<!-- About Us Text -->

<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 45px; text-align: left;color: #1f0949;">PhD <strong style="font-size: 45px; color: #eb1e25;"> Roadshow</strong></p>
		
		
		<p style="font-size: 17px;">Academics from leading UK Universities are coming to give workshops on key areas to assist candidates in preparing for UK PhD. They will cover the necessary preparation for application and will present the research interests of their departments. </p>
		<p style="font-size: 17px;">Candidates should have the right qualifications and language level to benefit from the workshops. Selection will be made based on the information provided by the candidates, then an official invitation will be sent to the selected ones. </p>
		<br>
		
 <p style="font-size: 20px;">Please register for the workshops on <a href="http://bit.ly/2RcrGCn" style="color: #fff;" class="btn btn-success">Click Here</a></p>
 <p style="font-size: 17px;">Details about the event are in the flyer</p>



	</div>
	<div class="col-lg-3" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection