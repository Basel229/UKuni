@extends('layouts.user')
@section('content')
<!-- About Us slider -->

<br><br>
<!-- About Us slider -->
<!-- About Us Text -->

<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 45px; text-align: left;color: #1f0949;">February <strong style="font-size: 45px; color: #eb1e25;"> Roadshow</strong></p>
		
		
		<p style="font-size: 17px;">A group of leading UK institutions are coming to Saudi Arabia to meet with students and their families. We would like to give the opportunity for everyone to come along and learn about the different opportunities</p>
		<br>
		<p style="font-size: 22px; text-align: left;color: #1f0949;">Dates :</p>
		<p style="font-size: 17px;"><i class="fa fa-map-marker" aria-hidden="true"></i>
 Jeddah: Sunday 23 Feb 2020, 5-10 PM, Movenpick Hotel, Mishrifah, Shams Hall</p>
		<p style="font-size: 17px;"><i class="fa fa-map-marker" aria-hidden="true"></i>
 Riyadh: Tuesday 25 Feb 2020, 5-10 PM, Sheraton Hotel, Ibn Turki Hall</p>
		<p style="font-size: 17px;"><i class="fa fa-map-marker" aria-hidden="true"></i>
 Al Khobar: 27 Feb 2020, 5-10 PM, Movenpick Hotel, Al Waha hall</p>
 <br>
 <p style="font-size: 20px;">Please register to attend the Roadshow on <a href="http://bit.ly/2RdU2fr" style="color: #fff;" class="btn btn-success">Click Here</a></p>
 <p style="font-size: 17px;">Details about the event are in the flyer</p>



	</div>
	<div class="col-lg-3" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection