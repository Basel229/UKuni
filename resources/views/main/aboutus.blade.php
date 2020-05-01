@extends('layouts.user')
@section('content')
<!-- About Us slider -->

<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/aboutus.jpg')}}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">ABOUT US</h1>
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #fff;" align="left">
        
<br><br><br><br>
      </div>   
    </div>
   
    
	 
	  </div>

	  
	</div>
		</div>
<br><br>
<!-- About Us slider -->
<!-- About Us Text -->
<div class="container-fluid">
<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-7">
		<p style="font-size: 50px; color: #1f0949;">About <strong style="font-size: 50px; color: #eb1e25;">UKUNI</strong></p>
		
		@if(app()->getLocale() != "ar")
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    @endif
		<p >{{ __('aboutus.para1')}}</p>
		<p>{{ __('aboutus.para2')}}</p>
		<p>{{ __('aboutus.para3')}}</p>
		<p>{{ __('aboutus.para4')}}</p>
		<p>{{ __('aboutus.para5')}}</p>
		<p>{{ __('aboutus.para6')}}</p>
		

		<p style="font-weight: 700;">{{ __('aboutus.para7')}}</p>

	</div>
	<div class="col-lg-3 " >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div>
</div>
<br><br>
<!-- About Us Text -->
<!-- The Team 
<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<p style="font-size: 50px; text-align: left;color: #1f0949;">The <strong style="font-size: 50px; color: #eb1e25;">Team</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
	</div>
	<div class="col-lg-1"></div>
</div><br>
<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<div class="row">
			<div class="col-lg-4">
				<img src="images/team/01.jpg"  width="70%">
				<p style="font-size: 25px; text-align: left;color: #1f0949;">Mr. Ibrahim Al-Najjar</strong></p>
				<p>Mr. Ibrahim Al-Najjar, founder and CEO of UKuni enjoys a long experience that goes back to 1996 and long relations with UK education sector. Mr. Al-Najjar worked as education manager and assistant director of the British Council in Saudi Arabia, and took part in many initiatives to promote the educationalrelationships between Saudi Arabia and the UK. Mr. Al-Najjar was also supported by a dedicatedand enthusiastic team of education advisersand counsellors.</p>
			</div>
			<div class="col-lg-4">
				<img src="images/team/01.jpg"  width="70%">
				<p style="font-size: 25px; text-align: left;color: #1f0949;">Taha Ahmed,</strong></p>
				<p>Taha Ahmed, was, and still a key player in UKuni and was awarded the British Council Certificate for Education Advisers. Taha manages the Riyadh office and has a good team to support him.</p>
				
			</div>
			<div class="col-lg-4">
				<img src="images/team/01.jpg"  width="70%">
				<p style="font-size: 25px; text-align: left;color: #1f0949;">Fuad Hariz</strong></p>
				<p>Fuad Hariz is another member of the team and has also been awarded the British Council Certificate for Education Advisers. Fuad manages the Jeddah office and has a good team to support him.</p>
				
			</div>
		</div>
	</div>
	<div class="col-lg-1"></div>
</div>
The Team -->
@endsection
