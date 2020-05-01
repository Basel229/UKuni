@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/ukuni_slider/study_in_usa.jpg" alt="Los Angeles" width="1100" height="300">
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
<div class="row" style="background-color: #eb1e25;">
	
	<div class="col-lg-2"></div>
	<div class="col-lg-8" ><br>
		<p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In USA. . . </strong></p>
		    
    <form method="get" action="{{ route('usauniversities') }}" class="form-inline">
    	
    	
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
                        <option value="American University - Shorelight">American University - Shorelight</option>
                        <option value="Arizona State University - Kaplan International">Arizona State University - Kaplan International</option>
                        <option value="Auburn University - Shorelight">Auburn University - Shorelight</option>
                        <option value="Auburn University at Montgomery - Shoreligh">Auburn University at Montgomery - Shorelight</option>
                        <option value="Baylor University - International Study Center (StudyGroup)">Baylor University - International Study Center (StudyGroup)</option>
                        <option value="Colorado State University">Colorado State University</option>
                        <option value="Colorado State University - INTO USA">Colorado State University - INTO USA</option>
                        <option value="CUNY Queens College – Navitas USA">CUNY Queens College – Navitas USA</option>
                        <option value="DePaul University">DePaul University</option>
                        <option value="Drew University - INTO USA">Drew University - INTO USA</option>
                        <option value="Florida Atlantic University - Navitas USA">Florida Atlantic University - Navitas USA</option>
                        <option value="Florida International University - Shorelight">Florida International University - Shorelight</option>
                        <option value="George Mason University - INTO USA">George Mason University - INTO USA</option>
                        <option value="Hofstra University">Hofstra University</option>
                        <option value="Hofstra University - INTO USA">Hofstra University - INTO USA</option>
                        <option value="Humboldt State University (California State University, CSU)">Humboldt State University (California State University, CSU)</option>
                        <option value="Illinois Institute Of Technology - CEG">Illinois Institute Of Technology - CEG</option>
                        <option value="Illinois State University">Illinois State University</option>
                        <option value="Illinois State University - INTO USA">Illinois State University - INTO USA</option>
                        <option value="James Madison University - International Study Center (StudyGroup)">James Madison University - International Study Center (StudyGroup)</option>
                        <option value="Long Island University - Brooklyn">Long Island University - Brooklyn</option>
                        <option value="Long Island University - C.W. Post">Long Island University - C.W. Post</option>
                        <option value="Long Island University, Brooklyn – StudyGroup">Long Island University, Brooklyn – StudyGroup</option>
                        <option value="Long Island University, Post – StudyGroup">Long Island University, Post – StudyGroup</option>
                        <option value="Louisiana State University - Shorelight">Louisiana State University - Shorelight</option>
                        <option value="Lynn University - StudyGroup">Lynn University - StudyGroup</option>
                        <option value="Marshall University - INTO USA">Marshall University - INTO USA</option>
                        <option value="Mercer University-Shorelight">Mercer University-Shorelight</option>
                        <option value="Northeastern University - Kaplan International">Northeastern University - Kaplan International</option>
                        <option value="Oglethorpe University - International Study Center (StudyGroup)">Oglethorpe University - International Study Center (StudyGroup)</option>
                        <option value="Oregon State University">Oregon State University</option>
                        <option value="Oregon State University - INTO USA">Oregon State University - INTO USA</option>
                        <option value="Pace University - Kaplan International">Pace University - Kaplan International</option>
                        <option value="Richard Bland College of William & Mary - Navitas USA">Richard Bland College of William & Mary - Navitas USA</option>
                        <option value="Saint Louis University - INTO USA">Saint Louis University - INTO USA</option>
                        <option value="Suffolk University">Suffolk University</option>
                        <option value="Suffolk University - INTO USA">Suffolk University - INTO USA</option>
                        <option value="Texas A&M University - Corpus Christi - International Study Center (StudyGroup)">Texas A&M University - Corpus Christi - International Study Center (StudyGroup)</option>
                        <option value="The University of Illinois at Chicago - Shorelight">The University of Illinois at Chicago - Shorelight</option>
                        <option value="University of Alabama Birmingham - INTO USA">University of Alabama Birmingham - INTO USA</option>
                        <option value="University of Central Florida - Shorelight">University of Central Florida - Shorelight</option>
                        <option value="University of Dayton - Shorelight">University of Dayton - Shorelight</option>
                        <option value="University of Hartford">University of Hartford</option>
                        <option value="University of Idaho - Navitas USA">University of Idaho - Navitas USA</option>
                        <option value="University of Kansas - Shorelight">University of Kansas - Shorelight</option>
                        <option value="University of Massachusetts Boston - Navitas USA">University of Massachusetts Boston - Navitas USA</option>
                        <option value="University of Massachusetts Dartmouth - Navitas USA">University of Massachusetts Dartmouth - Navitas USA</option>
                        <option value="University of Massachusetts Lowell - Navitas USA">University of Massachusetts Lowell - Navitas USA</option>
                        <option value="University of New Hampshire - Navitas USA">University of New Hampshire - Navitas USA</option>
                        <option value="University of South Carolina - Shorelight">University of South Carolina - Shorelight</option>
                        <option value="University of Texas - San Antonio">University of Texas - San Antonio</option>
                        <option value="University of the Pacific - Shorelight">University of the Pacific - Shorelight</option>
                        <option value="University of Utah - Shorelight">University of Utah - Shorelight</option>
                        <option value="University of Vermont - International Study Center (StudyGroup)">University of Vermont - International Study Center (StudyGroup)</option>
                        <option value="Virginia Commonwealth University - Navitas USA">Virginia Commonwealth University - Navitas USA</option>
                        <option value="Washington State University - INTO USA">Washington State University - INTO USA</option>
                        <option value="Zoology">Western Washington University - International Study Center (StudyGroup)</option>
            
            
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
		<p style="font-size: 50px; text-align: left;color: #1f0949;">About <strong style="font-size: 50px; color: #eb1e25;">USA University</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
    <br><br>
    
	
	<div class="row">
		
	<div class="col-lg-11">


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