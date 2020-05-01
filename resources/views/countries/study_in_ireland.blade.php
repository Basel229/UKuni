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
<!-- Search Filter -->
<div class="row" style="background-color: #eb1e25;">
	
	<div class="col-lg-2"></div>
	<div class="col-lg-8" ><br>
		<p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In Ireland. . . </strong></p>
	   @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif  
   
   <form method="get" action="{{ route('irelanduniversities') }}" class="form-inline">
        
        {{ csrf_field() }}
        <select name="level" class="form-control form_field_size" style="height: 45px;
            width: 30%;">
            <option value="">Select Level of Studies</option>
            <option value="Bachelor Degree with Honours">Bachelor Degree with Honours</option>
            <option value="Doctorate (Specialised)">Doctorate (Specialised)</option>
            <option value="Dual (Conjoint) Degree">Dual (Conjoint) Degree</option>
            <option value="English Language">English Language</option>
            <option value="Foundation">Foundation</option>
            <option value="Masters Degree (Research)">Masters Degree (Research)</option>
            <option value="Masters Degree (Taught)">Masters Degree (Taught)</option>
            <option value="Ph.D.">Ph.D.</option>
            <option value="Postgraduate Certificate">Postgraduate Certificate</option>
            <option value="Postgraduate Diploma">Postgraduate Diploma</option>
            
        </select>&nbsp;

        <select name="discipline" class="form-control form_field_size" style="height: 45px;
            width: 30%;">
            <option value="">Select Discipline</option>
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
            <option value="Royal College of Surgeons in Ireland">Royal College of Surgeons in Ireland</option>
            <option value="University College Dublin">University College Dublin</option>
        
        </select>&nbsp;
        
        
        
        <input type="submit" name="submit" value="Search" class="btn btn-info" style="height: 45px;width: 100px;">
    </form>	    
    
	<br><br><br>
	</div>
	<div class="col-lg-2"></div>
</div><br><br>
<!-- Search Filter -->
<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 50px; text-align: left;color: #1f0949;">About <strong style="font-size: 50px; color: #eb1e25;">In Canada</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    
    <p style="font-size: 17px;">Canada is the second largest country in the world and has one of the more advanced education systems. The country attracts thousands of international students that aim to complete their degrees and many choose to settle and work in Canada.</p>
    <p style="font-size: 17px;">
    	Canada welcomes international students that graduate from its higher education institutions to apply for settlement and has well established system for accommodating qualified professionals
    </p>
    
	


	</div>
	<div class="col-lg-3 university-logo" >
		@include('layouts.queryForm')
	</div>
	<div class="col-lg-1"></div>
</div><br><br>
<!-- About Us Text -->
@endsection