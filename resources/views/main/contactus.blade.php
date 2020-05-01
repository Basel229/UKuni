@extends('layouts.user')
@section('content')
<!-- About Us slider -->

<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ukuni_slider/aboutus.jpg" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">CONTACT US</h1>
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
	
	<div class="col-lg-8">
		<p style="font-size: 50px; text-align: left;color: #1f0949;">Contact <strong style="font-size: 50px; color: #eb1e25;">Us</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">

    <!-- office address -->
    <div class="row">
    	
    	<div class="col-lg-10" style="background-color: #f4f4f4;">
    		<br>
    		<h3 style="color: #eb1e25;font-weight: 700;">Saudia Arabia</h3><hr>
	    	<p><strong style="color: #eb1e25;">Riyadh Office:</strong>Office # 7 I 3144 King Abdullah Branch Rd, Riyadh 6181-12481 | P O Box 19312, Riyadh 11435 | Saudi Arabia |</p>
	    	<p><strong style="color: #eb1e25;">Email:</strong> info@UKuni.org</p>
	    	<p><strong style="color: #eb1e25;">Tel:</strong> +966 (0) 11 275 4606</p>

	    	<a href="https://goo.gl/maps/DAEWerjE2RpT9ssg7"  id="changecolor"  class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:17px;width: 200px;height: 37px;"><span >Get Direction</span> 
                
              </a>
    		<br><br>
    		<p><strong style="color: #eb1e25;">Jeddah Office:</strong>City Center Shopping Mall | Madina Road | First floor, Store #7 | Jeddah 23332 2485 | Saudi Arabia |</p>
	    	<p><strong style="color: #eb1e25;">Email:</strong> jeddah@UKuni.org</p>
	    	<p><strong style="color: #eb1e25;">Tel:</strong> +966 563438758</p>

	    	<a href="https://goo.gl/al8esn"  id="changecolor"  class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:17px;width: 200px;height: 37px;"><span >Get Direction</span> 
                
              </a>
    		<br><br>
    	</div>
    	<div class="col-lg-1"></div>
 		

    </div><br><br>
    <div class="row">
    	
    	<div class="col-lg-10" style="background-color: #f4f4f4;">
    		<br>
    		<h3 style="color: #eb1e25;font-weight: 700;">Pakistan</h3><hr>
	    	<p><strong style="color: #eb1e25;">Lahore Office:</strong>2nd Floor | Plaza 130 – CCA | Block DD | DHA | Lahore | Pakistan |</p>
	    	<p><strong style="color: #eb1e25;">Email:</strong> salaar@UKuni.org</p>
	    	<p><strong style="color: #eb1e25;">Tel:</strong> +92 307 0168978</p>
	    	

	    	<a href="http://bit.ly/2u6KhIK"  id="changecolor"  class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:17px;width: 200px;height: 37px;"><span >Get Direction</span> 
                
              </a>
    		<br><br>
    	</div>
    	<div class="col-lg-1"></div>
 		

    </div><br><br>
  
    <div class="row">
    	
    	<div class="col-lg-10" style="background-color: #f4f4f4;">
    		<br>
    		<h3 style="color: #eb1e25;font-weight: 700;">Canada Office:</h3><hr>
	    	<p><strong style="color: #eb1e25;">Riyadh Office:</strong>35 Glendale Ave, London Ontario N6J 2H9</p>
	    	<p><strong style="color: #eb1e25;">Email:</strong> info@UKuni.org</p>
	    	<p><strong style="color: #eb1e25;">Tel:</strong> +1 (226) 977-6636</p>
	    
    		<br><br>
    	</div>
    	<div class="col-lg-1"></div>
 		

    </div>

    <br><br>



    <!-- office address -->
		

	</div>
	<div class="col-lg-3" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div>
</div>
<br><br>

@endsection
