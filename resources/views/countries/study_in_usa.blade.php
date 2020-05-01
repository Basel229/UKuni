@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/study_in_usa.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">STUDY IN USA</h1>
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
		<p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In USA. . . </strong></p>
	@if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif	    
    <form method="get" action="{{ route('usauniversities',app()->getLocale()) }}" class="form-inline">
    	
    	
    	<select name="city" class="form-control form_field_size" style="height: 45px;
			width: 25%;">
    		<option value="#">Select Discipline</option>
    		<option value="Advanced Certificate">Advanced Certificate</option>
    		<option value="Associate Degree">Associate Degree</option>
    		<option value="Bachelor Degree">Bachelor Degree</option>
    		<option value="Combined Baccalaureate and Masters Prog">Combined Baccalaureate and Masters Prog</option>
    		<option value="Combined Bachelor's / Doctoral Degree">Combined Bachelor's / Doctoral Degree</option>
    		<option value="Combined Graduate / Doctoral Degree">Combined Graduate / Doctoral Degree</option>
    		<option value="Double Major Degree">Double Major Degree</option>
    		<option value="English">English</option>
    		<option value="First-Professional Degree">First-Professional Degree</option>
    		<option value="Foundation for Postgraduate">Foundation for Postgraduate</option>
    		<option value="Foundation for Undergraduate">Foundation for Undergraduate</option>
    		<option value="Graduate Certificate">Graduate Certificate</option>
    		<option value="Honours">Honours</option>
    		<option value="Juris Doctor">Juris Doctor</option>
    		<option value="Masters Degree">Masters Degree</option>
    		<option value="Ph.D.">Ph.D.</option>
    		<option value="Professional Masters Degree">Professional Masters Degree</option>
    	</select>&nbsp;
    	<select name="city" class="form-control form_field_size" style="height: 45px;
			width: 25%;">
    		<option value="">Select Level of Study</option>
    		 <option value="Accounting">Accounting</option>
                        <option value="Agriculture and Related Sciences">Agriculture and Related Sciences</option>
                        <option value="Archaeology">Archaeology</option>
                        <option value="Architecture, building, and planing">Architecture, building, and planing</option>
                        <option value="Art and Design">Art and Design</option>
                        <option value="Business, Management, and Administrative Studies">Business, Management, and Administrative Studies</option>
                        <option value="Chemical Engineering">Chemical Engineering</option>
                        <option value="Chemistry">Chemistry</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Classical Studies">Classical Studies</option>
                        <option value="Computer Science">Computer Science</option>
                        <option value="Creative Arts">Creative Arts</option>
                        <option value="Economics">Economics</option>
                        <option value="Education">Education</option>
                        <option value="Electrical and Electronic Engineering">Electrical and Electronic Engineering</option>
                        <option value="Engineering and Technology">Engineering and Technology</option>
                        <option value="English">English</option>
                        <option value="Film, Cinematics, and Photography">Film, Cinematics, and Photography</option>
                        <option value="Finance">Finance</option>
                        <option value="Game Design">Game Design</option>
                        <option value="Geograpghy">Geograpghy</option>
                        <option value="Geology">Geology</option>
                        <option value="Historical and Philosophical Studies">Historical and Philosophical Studies</option>
                        <option value="Hospitality, Leisure, and Tourism">Hospitality, Leisure, and Tourism</option>
                        <option value="Journalism">Journalism</option>
                        <option value="Languages">Languages</option>
                        <option value="Law">Law</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Mathematical Sciences">Mathematical Sciences</option>
                        <option value="Mechnical Engineering">Mechnical Engineering</option>
                        <option value="Media Studies">Media Studies</option>
                        <option value="Medical Technology">Medical Technology</option>
                        <option value="Medicine and Allied Subjects">Medicine and Allied Subjects</option>
                        <option value="Midwifery">Midwifery</option>
                        <option value="Molecular Biology, Biophysics, and Biochemistry">Molecular Biology, Biophysics, and Biochemistry</option>
                        <option value="Music">Music</option>
                        <option value="Nursing">Nursing</option>
                        <option value="Optometry">Optometry</option>
                        <option value="Paramedic Science">Paramedic Science</option>
                        <option value="Pharmacology, Toxicology, and Pharmacy">Pharmacology, Toxicology, and Pharmacy</option>
                        <option value="Philosophy">Philosophy</option>
                        <option value="Psychology">Psychology</option>
                        <option value="Publishing, Media, and Information Management">Publishing, Media, and Information Management</option>
                        <option value="Social Studies">Social Studies</option>
                        <option value="Social Work">Social Work</option>
                        <option value="Software Engineer">Software Engineer</option>
                        <option value="Sports">Sports</option>
                        <option value="Veterinary Science">Veterinary Science</option>
                        <option value="Zoology">Zoology</option>
    	</select>&nbsp;
    	<select name="university" class="form-control form_field_size" style="height: 45px;
            width: 25%;">
            <option value="">Select University</option>
            <option value="Adelphi University">Adelphi University</option>
                        <option value="American University">American University</option>
                        <option value="Arizona State University">Arizona State University</option>
                        <option value="Auburn University">Auburn University</option>
                        <option value="Auburn University at Montgomery">Auburn University at Montgomery</option>
                        <option value="Baylor University">Baylor University</option>
                        <option value="Colorado State University">Colorado State University</option>
                        <option value="CUNY Queens College">CUNY Queens College</option>
                        <option value="DePaul University">DePaul University</option>
                        <option value="Drew University">Drew University</option>
                        <option value="Florida Atlantic University">Florida Atlantic University</option>
                        <option value="Florida International University">Florida International University</option>
                        <option value="George Mason University">George Mason University</option>
                        <option value="Hofstra University">Hofstra University</option>
                        <option value="Humboldt State University">Humboldt State University</option>
                        <option value="Illinois Institute Of Technology - CEG">Illinois Institute Of Technology - CEG</option>
                        <option value="Illinois State University">Illinois State University</option>
                       <option value="James Madison University - International Study Center (StudyGroup)">James Madison University - International Study Center (StudyGroup)</option>
                        <option value="Long Island University">Long Island University</option>
                        <option value="Louisiana State University">Louisiana State University</option>
                        <option value="Lynn University">Lynn University</option>
                        <option value="Marshall University">Marshall University</option>
                       <option value="Mercer University">Mercer University</option>
                        <option value="Northeastern University">Northeastern University</option>
                        <option value="Oglethorpe University">Oglethorpe University</option>
                        <option value="Oregon State University">Oregon State University</option>
                        <option value="Pace University">Pace University</option>
                       <option value="Richard Bland College of William & Mary - Navitas USA">Richard Bland College of William & Mary - Navitas USA</option>
                        <option value="Saint Louis University">Saint Louis University</option>

                        
                        <option value="Suffolk University">Suffolk University</option>
                        <option value="Suffolk University - INTO USA">Suffolk University - INTO USA</option>
                        <option value="Texas A&M University">Texas A&M University</option>
                        <option value="The University of Illinois at Chicago">The University of Illinois at Chicago</option>
                        <option value="University of Alabama Birmingham">University of Alabama Birmingham</option>
                        <option value="University of Central Florida">University of Central Florida</option>
                        <option value="University of Dayton">University of Dayton</option>
                        <option value="University of Hartford">University of Hartford</option>
                        <option value="University of Idaho">University of Idaho</option>
                        <option value="University of Kansas">University of Kansas</option>
                        <option value="University of Massachusetts Boston">University of Massachusetts Boston</option>
                        <option value="University of Massachusetts Dartmouth">University of Massachusetts Dartmouth</option>
                        <option value="University of Massachusetts Lowell">University of Massachusetts Lowell</option>
                        <option value="University of New Hampshire">University of New Hampshire</option>
                        <option value="University of South Carolina">University of South Carolina</option>
                        <option value="University of Texas - San Antonio">University of Texas - San Antonio</option>
                        <option value="University of the Pacific">University of the Pacific</option>
                        <option value="University of Utah">University of Utah</option>
                        <option value="University of Vermont">University of Vermont</option>
                        <option value="Virginia Commonwealth University">Virginia Commonwealth University</option>
                        <option value="Washington State University">Washington State University</option>
                        <option value="Western Washington University">Western Washington University</option>
            
            
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
		<p style="font-size: 50px; color: #1f0949;">{{ __('study_in_usa.why')}} <strong style="font-size: 50px; color: #eb1e25;">{{ __('study_in_usa.choose_usa')}}</strong></p>
		@if(app()->getLocale() != "ar")
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    @endif
    <br>
    <p style="font-size: 17px;">{{ __('study_in_usa.para1')}}</p>
    <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_usa.head1')}}</p>
    <ul>
        <li>{{ __('study_in_usa.head1li1')}}</li>
        <li>{{ __('study_in_usa.head1li2')}}</li>
        <li>{{ __('study_in_usa.head1li3')}}</li>
        <li>{{ __('study_in_usa.head1li4')}}</li>
        <li>{{ __('study_in_usa.head1li5')}}</li>
    </ul>

    <p style="font-size: 30px; color: #eb1e25;">{{ __('study_in_usa.head2')}}</p>
    <p style="font-size: 25px; color: #eb1e25;">{{ __('study_in_usa.subhead1')}}</p>
    <ul>
        <li>{{ __('study_in_usa.subhead1li1')}}</li>
        <li>{{ __('study_in_usa.subhead1li2')}}</li>
        <li>{{ __('study_in_usa.subhead1li3')}}</li>
    </ul>
    

    <p style="font-size: 25px; color: #eb1e25;">{{ __('study_in_usa.head3')}}</p>
    <p style="font-size: 20px; color: #eb1e25;">{{ __('study_in_usa.subhead1')}} </p>
    <ul>
        <li>{{ __('study_in_usa.subhead2li1')}}</li>
        <li>{{ __('study_in_usa.subhead2li2')}}</li>
        <li>{{ __('study_in_usa.subhead2li3')}}</li>
        <li>{{ __('study_in_usa.subhead2li4')}}</li>
    </ul>

    <p style="font-size: 20px; color: #eb1e25;">{{ __('study_in_usa.subhead3')}}</p>
    <ul>
        <li>{{ __('study_in_usa.subhead3li1')}}</li>
        <li>{{ __('study_in_usa.subhead3li2')}}</li>
        <li>{{ __('study_in_usa.subhead3li3')}}</li>
        <li>{{ __('study_in_usa.subhead3li4')}}</li>
        <li>{{ __('study_in_usa.subhead3li5')}}</li>
    </ul>

    <p style="font-size: 20px; color: #eb1e25;">{{ __('study_in_usa.subhead4')}}</p>
    <ul>
        <li>{{ __('study_in_usa.subhead4li1')}}</li>
        <li>{{ __('study_in_usa.subhead4li2')}}</li>
        <li>{{ __('study_in_usa.subhead4li3')}}</li>
    </ul>
    

	<br><br>
	<div class="row">
		
	<div class="col-lg-10">


   
            <div class="row">

                <div class="col-lg-6" >
                    <div class="row">
                        
                        <div class="col-lg-11" >
                        <img src="{{ asset('images/blogs/usf_scholarship.jpg') }}" width="100%">
                        <h5 style="margin-top: 10px;">USF Scholarship</h5>
                        <p style="font-size: 13px;font-weight: 700;color: #eb1e25">News</p>
                        <hr>
                        <p style="font-size: 16px;">
                             
                            The University of South Florida (USF) is offering some generous scholarships for top students 


                        </p>
                        <span style="font-size: 15px;font-weight: 300">January 23, 2020 | News</span><br><br>
                        
                        
                        <a href="{{ route('usf_scholarship',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <br><br><hr>
                    </div>
                    <div class="col-lg-1"></div>
                    </div>  
                </div>
            </div>        

    <!-- Blogs Section -->

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