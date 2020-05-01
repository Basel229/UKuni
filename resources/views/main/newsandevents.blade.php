@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ukuni_slider/events.jpg" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">NEWS & EVENTS</h1>
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

<div class="row">
	
	<div class="col-lg-8">

	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="row">
				

				<div class="col-lg-6" >
				    					<div class="row">
						
						<div class="col-lg-11 " >
						<img src="images/blogs/biochemistrylecture.jpg" width="100%">
						<h5 style="margin-top: 10px;">Kaplan Biochemistry Lecture</h5>
						<p style="font-size: 13px;font-weight: 700;color: #eb1e25">Offer</p>
						<hr>
						<p style="font-size: 16px;">
							 
							Academics from leading UK Universities are coming to give workshops on key areas to assist candidates


						</p>
						
						<a href="{{ route('kaplan_biochemistry_lecture')}}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
					    	<i class="fas fa-chevron-right"></i>
					    </a>
						<br><br><hr>
						</div>
						<div class="col-lg-1"></div>
					</div>
	
				</div>

			</div>
		</div>
		<div class="col-lg-1"></div>
		
	</div>

	


	</div>
	<div class="col-lg-3" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection