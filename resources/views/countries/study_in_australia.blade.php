@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/study_in_australia.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">{{ __('study_in_australia.Study_in_Australia')}}</h1>
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
		<p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In Australia. . . </strong></p>
	@if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif  
   
   <form method="get" action="{{ route('ausuniversities',app()->getLocale()) }}" class="form-inline">
    	
    	{{ csrf_field() }}
    	<select name="level" class="form-control form_field_size" style="height: 45px;
			width: 30%;">
			<option value="">Select Level of Studies</option>
			<option value="Associate Degree">Associate Degree</option>
			<option value="Certificate Level 6">Certificate Level 6</option>
			<option value="Diploma">Diploma</option>
			<option value="Diploma level 5">Diploma level 5</option>
			<option value="Diploma level 6">Diploma level 6</option>
			<option value="Dual Degree">Dual Degree</option>
			<option value="English Language">English Language</option>
			<option value="Foundation">Foundation</option>
			<option value="Graduate">Graduate</option>
			<option value="Graduate Certificate">Graduate Certificate</option>
			<option value="Graduate Diploma">Graduate Diploma</option>
			<option value="Ph.D.">Ph.D.</option>
			<option value="Postgraduate">Postgraduate</option>
			<option value="Postgraduate Diploma">Postgraduate Diploma</option>
			<option value="Postgraduate Qualifying Program">Postgraduate Qualifying Program</option>
			<option value="Secondary School">Secondary School</option>
			<option value="Study Abroad">Study Abroad</option>
    		
    	</select>&nbsp;

    	<select name="discipline" class="form-control form_field_size" style="height: 45px;
			width: 30%;">
			<option value="">Select Discipline</option>
						<option value="Accounting">Accounting</option>
						<option value="Aerospace Engineering">Aerospace Engineering</option>
						<option value="Agriculture and Related Sciences">Agriculture and Related Sciences</option>
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
    		<option value="Curtin College">Curtin College</option>
    		<option value="Edith Cowan College">Edith Cowan College</option>
    		<option value="Eynesbury College">Eynesbury College</option>
    		<option value="Griffith College">Griffith College</option>
    		<option value="James Cook University">James Cook University</option>
    		<option value="La Trobe College">La Trobe College</option>
    		<option value="La Trobe University">La Trobe University</option>
    		<option value="Murdoch University">Murdoch University</option>
    		<option value="Newcastle International College (NIC)">Newcastle International College (NIC)</option>
    		<option value="South Australian Institute of Business and Technology (SAIBT)">South Australian Institute of Business and Technology (SAIBT)</option>
    		<option value="The University of Adelaide">The University of Adelaide</option>
    		<option value="University of Canberra College">University of Canberra College</option>

    		
    		
    		
    		
    	</select>&nbsp;
    	
    	
    	
    	<input type="submit" name="submit" value="Search" class="btn btn-info" style="height: 45px;width: 100px;">
    </form>

	<br><br><br>
	</div>
	<div class="col-lg-2"></div>
</div> -->

<br><br>
<!-- Search Filter -->
<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 50px; color: #1f0949;">{{ __('study_in_australia.Why')}} <strong style="font-size: 50px; color: #eb1e25;">{{ __('study_in_australia.choose_australia')}}</strong></p>
		@if(app()->getLocale()  != "ar")
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
        @endif
    <br>
    <p style="font-size:17px;">{{ __('study_in_australia.para1')}} </p>

    <br>
            <p style="font-size: 45px; color: #eb1e25;">{{ __('study_in_australia.Facts_about_studying_in_Australia')}}</p>
       <br>
        <img src="{{ asset('images/blogs/facts_about_studying_in_australia.jpg') }}" style="width: 70%;"><br><br>
        <p style="font-size: 17px;">{{ __('study_in_australia.para2')}}</p>

        <br>
        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head1')}}</p>
        <p style="font-size: 17px;">{{ __('study_in_australia.para3')}}</p>

        <br>
        <p style="font-size: 30px;color: #eb1e25;">{{ __('study_in_australia.head2')}}</p>
        <p style="font-size: 17px;">{{ __('study_in_australia.para4')}}</p>

        <br>
        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head3')}}</p>
        <p style="font-size: 17px;">{{ __('study_in_australia.para5')}}</p>
        
        <br>
        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head4')}}</p>
        <p style="font-size: 17px;">{{ __('study_in_australia.para6')}}</p>

        <img src="{{ asset('images/blogs/emphasis_student.jpg') }}" style="width: 70%">
        <br>
        <br>
        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head5')}}</p>
        <p style="font-size: 17px;">{{ __('study_in_australia.para7')}}</p>

        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head6')}}</p>
        <p style="font-size: 17px;">{{ __('study_in_australia.para8')}}</p>

        
        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head7')}}</p>
        
        <p style="font-size: 17px;">{{ __('study_in_australia.para9')}}</p>

        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head8')}}
        <p style="font-size: 17px;">{{ __('study_in_australia.para10')}}</p>


        <ul>
            <li>{{ __('study_in_australia.li1')}}</li>
            <li>{{ __('study_in_australia.li2')}}</li>
            <li>{{ __('study_in_australia.li3')}}</li>
            <li>{{ __('study_in_australia.li4')}}</li>
            <li>{{ __('study_in_australia.li5')}}</li>
            <li>{{ __('study_in_australia.li6')}}</li>
        </ul>

        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head9')}}</p>
        
        <p style="font-size: 17px;">{{ __('study_in_australia.para11')}}</p>

        <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_australia.head10')}}</p>
        
        <p style="font-size: 17px;">{{ __('study_in_australia.para12')}}</p>

    
	<div class="row">
     <div class="col-lg-11">
                         <br><br>

            <div class="row">

                <div class="col-lg-6" >
                    <div class="row">
                        
                        <div class="col-lg-10" >
                        <img src="{{ asset('images/blogs/after_graduation.jpg') }}" width="100%">
                        <h5 style="margin-top: 10px;">After graduation</h5>
                        <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
                        <hr>
                        <p style="font-size: 16px;">
                             
                            Once you’ve completed your course, you have some decisions to make, whether you stay in Australia or return home.


                        </p>
                        <span style="font-size: 15px;font-weight: 300">January 23, 2020 | Study In Australia</span><br><br>
                        
                        
                        <a href="{{ route('after_graduation',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
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
	<div class="col-lg-3 " >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection