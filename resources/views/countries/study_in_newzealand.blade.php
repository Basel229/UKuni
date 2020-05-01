@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/study_in_newzealand.jpg')}}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">STUDY IN NEW ZEALAND</h1>
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
<!-- Search Filter -->
<!-- <div class="row" style="background-color: #eb1e25;">
	
	<div class="col-lg-2"></div>
	<div class="col-lg-8" ><br>
		<p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In New Zealand. . . </strong></p>
		@if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif
		    
    <form method="get" action="{{ route('nzuniversities',app()->getLocale()) }}" class="form-inline">
    	
    	{{ csrf_field() }}
    	
    	<select name="level" class="form-control form_field_size" style="height: 45px;
			width: 30%;">
			<option value="">Select Level of Studies</option>
			<option value="Undergraduate">Undergraduate</option>
			<option value="Postgraduate">Postgraduate</option>
			<option value="Postgraduate Certificate">Postgraduate Certificate</option>
			<option value="Ph.D.">Ph.D.</option>
			<option value="Certificate Level 1">Certificate Level 1</option>
			<option value="Certificate Level 5">Certificate Level 5</option>
			<option value="Diploma Level 5">Diploma Level 5</option>
			<option value="Dual (Conjoint) Degree">Dual (Conjoint) Degree</option>
			<option value="English Language">English Language</option>
			<option value="Foundation">Foundation</option>
			<option value="Non Award">Non Award</option>
			
			
			
    		
    	</select>&nbsp;
    	<select name="discipline" class="form-control form_field_size" style="height: 45px;
			width: 30%;">
			<option value="">Select Discipline</option>
			<option value="Accounting">Accounting</option>
    		    		<option value="Creative Arts">Creative Arts</option>
    		    		<option value="Civil Engineering">Civil Engineering</option>
    		    		<option value="Computer Science">Computer Science</option>
    		    		<option value="Creative Arts">Creative Arts</option>
    		    		<option value="Economics">Economics</option>
    		    		<option value="Education">Education</option>
    		    		<option value="English">English</option>
    		    		<option value="Finance">Finance</option>
    		    		<option value="Law">Law</option>
    		    		<option value="Marketing">Marketing</option>
    		    		<option value="Media Studies">Media Studies</option>
    		    		<option value="Music">Music</option>
    		    		<option value="Philosophy">Philosophy</option>
    		    		<option value="Teaching">Teaching</option>
    	</select>&nbsp;
    	<select name="university" class="form-control form_field_size" style="height: 45px;
			width: 25%;">
			<option value="">Select University</option>
			
    		<option value="University of Canterbury">University of Canterbury</option>
    		<option value="The University of Waikato">The University of Waikato</option>
    		<option value="Massey University">Massey University</option>
    		<option value="Taylors College Auckland">Taylors College Auckland</option>
    		<option value="The University of Auckland English Language Academy">The University of Auckland English Language Academy</option>
    		
    	</select>&nbsp;
    	
    	<input type="submit" name="submit" value="Search" class="btn btn-info" style="height: 45px;width: 100px;">
    </form>
	<br><br><br>
	</div>
	<div class="col-lg-2"></div>
</div> -->

<br><br>
<!-- Search Filter -->
<!-- Search Filter -->
<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 50px; text-align: left;color: #1f0949;">Why <strong style="font-size: 50px; color: #eb1e25;">Choose New Zealand</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    
    <p style="font-size: 17px;">New Zealand is a unique country, with gorgeous scenery and excellent study opportunities. It’s a safe and welcoming community with a world-class reputation for cutting-edge research and creative energy. These elements make the country an attractive destination for international students.</p>
   <p style="font-size: 30px; text-align: left;color: #eb1e25;">Why Study in New Zealand?</p>
   <p style="font-size: 17px;">New Zealand has several types of higher education institutions: universities, colleges, private institutions and polytechnics. There are 8 universities in New Zealand, which all offer high quality education. All 8 of these universities are ranked within the QS World University Ranking top 500. The highest ranked is the University of Auckland, which is in 82nd place, followed by the University of Otago in 151st place.</p>
   <p style="font-size: 17px;">One great advantage to studying in New Zealand is the unique approach to education. Students are encouraged to think as an individual and find their own solutions, which is how many develop unique strengths and ideas whilst studying in the country.</p>
   <p style="font-size: 17px;">You are able to study in New Zealand at all of the traditional levels; undergraduate (bachelor’s), postgraduate (master’s) and doctoral (PhD). There are options to gain specific qualifications, such as Graduate Diplomas and Honours. These types of study generally last one year.</p>
   <p style="font-size: 30px; text-align: left;color: #eb1e25;">About New Zealand</p>
   <p style="font-size: 17px;">New Zealand is an island country located in the Pacific Ocean. The country mainly comprises of two islands. These are the North Island and South Island, although there are numerous smaller islands. The closest countries to New Zealand are Australia and the Pacific island nations: Fiji, New Caledonia and Tonga.</p>
   <p style="font-size: 17px;">Made internationally famous through the Lord of the Rings film series, the beautiful scenery of New Zealand is varied thanks to ancient volcanic eruptions. New Zealand offers a rich mix of various cultures, including Maori, Pakeha (people of European descent), Asian and Pacific populations.</p>
   <p style="font-size: 17px;">It is a developed country and does well in national performance rankings. These rankings consider all aspects, including quality of life, health, education and economic freedom. The most dominant sector of the national economy is the service sector, followed by the industrial sector.</p>
   <p style="font-size: 17px;">The top tourist attractions in New Zealand include:</p>
   <ul>
   	<li>Coromandel Peninsula</li>
   	<li>Abel Tasman National Park</li>
   	<li>Sky Tower (Auckland)</li>
   	<li>Napier Art Deco</li>
   	<li>Kaikoura</li>
   </ul>
<br><br>
       <!-- Blog Section -->
      <div class="row">
    
    <div class="col-lg-11">
      <div class="row">
        <div class="col-lg-6" >
          <div class="row">
            
            <div class="col-lg-11 " >
            <img src="{{ asset('images/blogs/nz1.jpg') }}" width="100%">
            <a href="{{ route('canadian_way_of_life',app()->getLocale()) }}"><h5 style="margin-top: 10px;">10 Things to Know Before Studying Abroad in New Zealand</h5></a>
            <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
            <hr>
            <p style="font-size: 16px;">
               
              So you want a non-traditional study abroad experience, filled with outdoor adventures and environmental studies alike. The mountains are calling you, and your heart is set on New Zealand.


            </p>
            <span style="font-size: 15px;font-weight: 300">September 22, 2016 | Study In New Zealand</span><br><br>
            <a href="{{ route('things_to_know_before_studying_abroad_in_new_zealand',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
                <i class="fas fa-chevron-right"></i>
              </a>
            <br><br><hr>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
        <div class="col-lg-6" >
          <div class="row">
            
            <div class="col-lg-11" >
            <img src="{{ asset('images/blogs/nz21.jpg') }}" width="100%">
            <h5 style="margin-top: 10px;">Overcoming Challenges for International Students</h5>
            <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
            <hr>
            <p style="font-size: 16px;">
               
              Being a student is a challenge, being an international student is an even bigger one.  


            </p>
            <span style="font-size: 15px;font-weight: 300">2 Years Ago | Study In New Zealand</span><br>
            
            <br>
            <a href="{{ route('overcoming_challenges_for_international_students',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
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

	<div class="col-lg-3 university-logo" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection