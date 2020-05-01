@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row" style="margin-top: 150px;">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<p style="font-size: 25px; text-align: left;color: #1f0949;">Hello {{$name}}! <strong style="font-size: 25px; color: #eb1e25;">Thank you for applying for {{$university}}. We will contact you sortly. If you have any other query Call us by clicking the button</strong></p>
		<a href="#"  id="changecolor"  class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;width: 200px;"><span >Call Now</span> 
                <i class="fas fa-chevron-right"></i>
              </a>&nbsp;&nbsp;<a href="{{ route('index')}}"  id="changecolor"  class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;width: 200px;"><span >Explore More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
	</div>
	<div class="col-lg-2"></div>
</div>
@endsection