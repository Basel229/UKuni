@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ukuni_slider/study_in_ireland.jpg" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">STUDY IN IRELAND</h1>
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #fff;" align="left">
        
<br><br><br><br>
      </div>   
    </div>
   
    
	 
	  </div>

	  
	</div>
		</div>

<!-- About Us slider -->
<!-- About Us Text -->
<br><br>
<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 50px; text-align: left;color: #1f0949;">Search <strong style="font-size: 50px; color: #eb1e25;">Results</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    <br><br>
    
	
	<div class="row">
		
	<div class="col-lg-11">
		
		@foreach ($desired_data as $key => $value) 
		<div class="row" >
			
			<div class="col-lg-6 " >
				<img src="images/ireland_university/{{$value->university}}.png"
				style="width: 397px;height: 262px;" 
				>
		
			</div>
			<div class="col-lg-6 div_background" style="height: auto;">
				<span style="font-size: 13px;color: #e3fb08;">{{ $value->university}}</span>
				
				<h5>{{ $value->degree_title}}</h5>
				<h5>{{ $value->level}}</h5>
				<h6>{{ $value->time}}</h6>
				
				<a href="{{ route('irelandselectedcourse',['id'=>$value->id]) }}" class="btn btn-success" style="color: #fff;">Apply Now</a>
			</div>
			
		</div><br><br>
		@endforeach
		

	</div>	
		
	</div>
	<div class="row">
		<div class="col-lg-8">
			{{ $desired_data->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}

		</div>
		<div class="col-lg-4"></div>
	</div>

	</div>
	<div class="col-lg-3 university-logo" >
		<p style="font-size: 25px; text-align: left;color: #fff;background-color: #1f0949;;padding: 25px;">If you have any query, Send us a message</p>
		<form method="" action="#" style="background-color: #f8f8f8;padding: 15px;" >
			<input type="text" name="full_name" class="form-control" placeholder="Enter Full Name"><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Email Address"><br>
			<input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number"><br>
			<select name="destination" class="form-control">
				<option value="">Select Your Destination</option>
				<option value="1">UK</option>
				<option value="1">USA</option>
				<option value="1">Australia</option>
				<option value="1">New Zealand</option>
				<option value="1">Canada</option>
			</select><br>
			<select name="city" class="form-control">
				<option value="">Select Your City</option>
				<option value="1">UK</option>
				<option value="1">USA</option>
				<option value="1">Australia</option>
				<option value="1">New Zealand</option>
				<option value="1">Canada</option>
			</select><br>
			<textarea class="form-control" name="message" rows="4" placeholder="Type your message here. . .">
				
				
			</textarea><br>
			<a href="#" id="changecolor"  class="btn btn-default centerbutton" style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Submit</span> 
					    	<i class="fas fa-chevron-right"></i>
					    </a>
		</form>
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection