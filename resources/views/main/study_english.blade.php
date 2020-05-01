@extends('layouts.user')
@section('content')

<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/study_english.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">{{ __('study_english.STUDY')}} {{ __('study_english.ENGLISH')}}</h1>
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

		<p style="font-size: 35px; text-align: left;color: #1f0949;"></span>{{ __('study_english.united_kingdomh')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.united_kingdom')}}</p>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: #fff;">+ UK Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse1" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>Kaplan International Languages</h4>
	            <p>{{ __('study_english.kaplan_international_languages')}}</p>
	            <h4>LAL Language Centres</h4>
	            <p>{{ __('study_english.lal_language_center')}}</p>
				<h4>INTO</h4>
	            <p>{{ __('study_english.into')}}</p>
	            <h4>Kings Education</h4>
	            <p>{{ __('study_english.kings_education')}}</p>
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            <h4>Regent</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            <h4>BSC</h4>
	            <p>{{ __('study_english.bsc')}}</p>
	            <h4>Bell</h4>
	            <p>{{ __('study_english.bell')}}</p>
	            <h4>Stafford House International</h4>
	            <p>{{ __('study_english.stafford_house')}}</p>
	            <h4>St Giles</h4>
	            <p>{{ __('study_english.st_giles')}}
	            </p>
	            <h4>Celtic English Academy</h4>
	            <p>{{ __('study_english.celtic_english_academy')}}</p>
	            <h4>Eurocentres</h4>
	            <p>{{ __('study_english.eurocenter')}}</p>
	            <h4>Language Studies International</h4>
	            <p>{{ __('study_english.lsi')}}</p>
	        </div>
	      </div>
	    </div>
	</div>
<br> 

	<hr style="border-top-width: 3px;">
<br>
		<p style="font-size: 35px; color: #1f0949;"></span>{{ __('study_english.united_states_of_americah')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.united_states_of_america')}}</p>
		<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" style="color: #fff;">+ USA Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse2" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>Kaplan International Languages</h4>
	            <p>{{ __('study_english.kaplan_international_languages')}}</p>
	            <h4>LAL Language Centres</h4>
	            <p>{{ __('study_english.lal_language_center')}}</p>
				<h4>INTO</h4>
                    <p>{{ __('study_english.into')}}</p>
	            <h4>Kings Education</h4>
	            <p>{{ __('study_english.kings_education')}}</p>
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            
	            <h4>Eurocentres</h4>
	            <p>{{ __('study_english.kaplan_international_languages')}}</p>

	            <p>{{ __('study_english.stafford_house')}}.</p>
	            <h4>St Giles</h4>
	            <p>{{ __('study_english.st_giles')}}
	            </p>
	            
	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>

		<p style="font-size: 35px; color: #1f0949;"></span>{{ __('study_english.canadah')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.canada')}}</p>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" style="color: #fff;">+ Canada Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse3" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>Kaplan International Languages</h4>
	            <p>{{ __('study_english.kaplan_international_languages')}}</p>
	            <h4>LAL Language Centres</h4>
	            <p>{{ __('study_english.lal_language_center')}}</p>
				
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>

	            <h4>Eurocentres</h4>
	            <p>{{ __('study_english.eurocenter')}}</p>

	            <h4>Language Studies International</h4>
	            <p>{{ __('study_english.lsi')}}</p>
	            
	            <h4>St Giles</h4>
	            <p>{{ __('study_english.st_giles')}}
	            </p>

	            <h4>Stafford House International</h4>
	            <p>{{ __('study_english.stafford_house')}}</p>
	            
	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>

		<p style="font-size: 35px; color: #1f0949;"></span>{{ __('study_english.australiah')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.australia')}}</p>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" style="color: #fff;">+ Australia Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse4" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>Kaplan International Languages</h4>
	            <p>{{ __('study_english.kaplan_international_languages')}}</p>
	            <h4>LAL Language Centres</h4>
	            <p>{{ __('study_english.lal_language_center')}} </p>
			
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            
	            <h4>Language Studies International</h4>
	            <p>{{ __('study_english.lsi')}}</p>
	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>

		<p style="font-size: 35px; color: #1f0949;"></span>{{ __('study_english.new_zealandh')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.new_zealand')}}</p>
		<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5" style="color: #fff;">+ New Zealand Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse5" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>Kaplan International Languages</h4>
	            <p>{{ __('study_english.kaplan_international_languages')}}</p>
			
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            
	            <h4>Language Studies International</h4>
	            <p>{{ __('study_english.lsi')}}</p>
	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>

		<p style="font-size: 35px; color: #1f0949;"></span>{{ __('study_english.south_africah')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.new_zealand')}}</p>
		<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6" style="color: #fff;">+ South Africa Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse6" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>LAL Language Centres</h4>
	            <p>{{ __('study_english.lal_language_center')}} </p>
			
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            
	            <h4>Language Studies International</h4>
	            <p>{{ __('study_english.lsi')}}</p>

	            <h4>Eurocentres</h4>
	            <p>{{ __('study_english.eurocenter')}}</p>
	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>

		<p style="font-size: 35px;color: #1f0949;"></span>{{ __('study_english.maltah')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.malta')}}</p>
		<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse7" style="color: #fff;">+ Malta Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse7" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">
	            <h4>LAL Language Centres</h4>
	            <p>{{ __('study_english.lal_language_center')}}</p>
			
	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>
	            
	            <h4>Language Studies International</h4>
	            <p>{{ __('study_english.lsi')}}</p>

	            <h4>Eurocentres</h4>
	            <p>{{ __('study_english.eurocenter')}}</p>
	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>

		<p style="font-size: 35px; text-align: left;color: #1f0949;"></span>{{ __('study_english.irelandh')}}</p>
		<p style="font-size: 17px;">{{ __('study_english.ireland')}}</p>
				<div class="panel-group" id="accordion">
		<div class="panel panel-default" >
	      <div class="panel-heading">
	        <h4 class="panel-title" style="background-color: #eb1e25;padding:10px;color: #fff;">
	          <a data-toggle="collapse" data-parent="#accordion" href="#collapse8" style="color: #fff;">+ Ireland Schools List</a>
	        </h4>
	      </div>
	      <div id="collapse8" class="panel-collapse collapse in">
	        <div class="panel-body" style="margin-top: -9px;padding: 19px;background-color: #eb1e25d1;color: #f8f8f8;">

 				<h4>Eurocentres</h4>
	            <p>{{ __('study_english.eurocenter')}}</p>

	            <h4>EC</h4>
	            <p>{{ __('study_english.ec')}}</p>

	            <h4>Twin</h4>
	            <p>{{ __('study_english.twin')}}</p>

	            <h4>CES</h4>
	            <p>{{ __('study_english.celtic_english_academy')}}</p>
	           

	        </div>
	      </div>
	    </div>
	</div>
	<br> 

	<hr style="border-top-width: 3px;">
<br>
		<br><br><br>
		<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-6" >
					<div class="row">
						
						<div class="col-lg-11 " >
						<img src="{{ asset('images/blogs/women_only.png') }}" width="100%">
						<a href="{{ route('women_only',app()->getLocale()) }}"><h5 style="margin-top: 10px;">Women Only</h5></a>
						<p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
						<hr>
						
						<span style="font-size: 15px;font-weight: 300">Febraury 13, 2020 | Study English</span><br><br>
						<a href="{{ route('women_only',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
					    	<i class="fas fa-chevron-right"></i>
					    </a>
						<br><br><hr>
						</div>
						<div class="col-lg-1"></div>
					</div>
				</div>
				<div class="col-lg-4" >

				</div>
				<div class="col-lg-4" >

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