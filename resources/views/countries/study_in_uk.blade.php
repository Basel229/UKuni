@extends('layouts.user')
@section('content')
<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/study_in_uk.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">STUDY IN UK</h1>
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
		<p style="font-size: 35px; text-align: center;color: #fff;">Search <strong style="font-size: 35px; color: #fff;">In UK. . . </strong></p>
		@if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif    
    <form method="get" action="{{ route('ukuniversities',app()->getLocale()) }}" class="form-inline">
    	
    	{{ csrf_field() }}
    	<select name="level" class="form-control form_field_size" style="height: 45px;
			width: 30%;">
			<option value="">Select Level of Studies</option>
			<option value="Undergraduate">Undergraduate</option>
			<option value="Postgraduate">Postgraduate</option>
			<option value="Postgraduate Diploma">Postgraduate Diploma</option>
			<option value="Diploma">Diploma</option>
			<option value="Foundation Diploma">Foundation Diploma</option>
			<option value="Certificate">Certificate</option>
    		
    	</select>&nbsp;
    	<select name="discipline" class="form-control form_field_size" style="height: 45px;
			width: 30%;">
    		<option value="">Select Discipline</option>
    		
    		@for($i=0; $i< $totalcount;$i++)
    		<option value="{{ $selecteddata[$i] }}">{{ $selecteddata[$i] }}</option>
    		@endfor

    		
    		
    	</select>&nbsp;
    	<select name="university" class="form-control form_field_size" style="height: 45px;
			width: 25%;">
			<option value="">Select University</option>
    		<option value="Anglia Ruskin University">Anglia Ruskin University</option>
    		<option value="Aston University">Aston University</option>
    		<option value="Bangor University">Bangor University</option>
    		<option value="BPP University">BPP University</option>
    		<option value="Brunel University">Brunel University</option>
    		<option value="Cardiff University">Cardiff University</option>
    		<option value="Coventry University">Coventry University</option>
    		<option value="Glasgow Caledonian University">Glasgow Caledonian University</option>
    		<option value="Kings College London">King's College London</option>
    		<option value="Liverpool John Moores University">Liverpool John Moores University</option>
    		<option value="London South Bank University">London South Bank University</option>
    		<option value="Manchester Metropolitan University">Manchester Metropolitan University</option>
    		<option value="Middlesex University">Middlesex University</option>
    		<option value="Northumbria University">Northumbria University</option>
    		<option value="Oxford Brookes University">Oxford Brookes University</option>
    		<option value="Queen Mary University of London">Queen Mary University of London</option>
    		<option value="Queens University Belfast">Queen's University Belfast</option>
    		<option value="Royal Holloway, University of London">Royal Holloway, University of London</option>
    		<option value="Swansea University">Swansea University</option>
    		<option value="Teesside University">Teesside University</option>
    		<option value="Ulster University">Ulster University</option>
    		<option value="University of Aberdeen">University of Aberdeen</option>
    		<option value="University of Bradford">University of Bradford</option>
    		<option value="University of Brighton">University of Brighton</option>
    		<option value="University of Central Lancashire">University of Central Lancashire</option>
    		<option value="University of Dundee">University of Dundee</option>
    		<option value="University of East Anglia">University of East Anglia</option>
    		<option value="University of Essex">University of Essex</option>
    		<option value="University of Exeter">University of Exeter</option>
    		<option value="University of Kent">University of Kent</option>
    		<option value="University of Leeds">University of Leeds</option>
    		<option value="University of Lincoln">University of Lincoln</option>
    		<option value="University of Liverpool">University of Liverpool</option>
    		<option value="University of Manchester">University of Manchester</option>
    		<option value="University of Plymouth">University of Plymouth</option>
    		<option value="University of Reading">University of Reading</option>
    		<option value="University of Roehampton London">University of Roehampton London</option>
    		<option value="University of Salford">University of Salford</option>
    		<option value="University of Sheffield">University of Sheffield</option>
    		<option value="University of Stirling">University of Stirling</option>
    		<option value="University of Surrey">University of Surrey</option>
    		<option value="University of Sussex">University of Sussex</option>
    		<option value="University of York">University of York</option>
    		
    		
    		
    		
    	</select>&nbsp;
    	
    	
    	
    	<input type="submit" name="submit" value="Search" class="btn btn-info" style="height: 45px;width: 100px;">
    </form>
	<br><br><br>
	</div>
	<div class="col-lg-2"></div>
</div><br><br> -->
<!-- Search Filter --><br><br>
<div class="row">
	
	<div class="col-lg-8">
		<p style="font-size: 50px;color: #1f0949;">Why <strong style="font-size: 50px; color: #eb1e25;">Choose UK?</strong></p>
		@if(app()->getLocale() != "ar")
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
        @endif
    <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head1')}} </h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head1li1')}}</li>
    	<li>{{ __('study_in_uk.head1li2')}}</li>
    	<li>{{ __('study_in_uk.head1li3')}}</li>
    	<li>{{ __('study_in_uk.head1li4')}}</li>
    </ul>
     <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head2')}} </h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head2li1')}}</li>
    	<li>{{ __('study_in_uk.head2li2')}}</li>
    	<li>{{ __('study_in_uk.head2li3')}}</li>
    	
    </ul>
    <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head3')}}</h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head3li1')}}</li>
    </ul>
    <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head4')}}</h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head4li1')}}</li>
    </ul>
    <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head5')}}</h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head5li1')}}</li>
    </ul>
    <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head6')}} </h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head6li1')}}</li>
    </ul>
    <br>
    <h3 style="color: #eb1e25;">{{ __('study_in_uk.head7')}} </h3><br>
    <ul>
    	<li>{{ __('study_in_uk.head7li1')}}</li>
    </ul>
    <br><br><br>
    <!-- Blog Section -->
    	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-6" >
					<div class="row">
						
						<div class="col-lg-11 " >
						<img src="{{ asset('images/blogs/why_study_in_the_uk.jpg') }}" width="100%">
						<a href="{{ route('why_study_in_the_uk',app()->getLocale()) }}"><h5 style="margin-top: 10px;">Why Study In The UK</h5></a>
						<p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
						<hr>
						<p style="font-size: 16px;">
							 
							Why study in the UK? The UK and its universities have an undisputed reputation for academic excellence


						</p>
						<span style="font-size: 15px;font-weight: 300">January 27, 2020 | Study In UK</span><br><br>
						<a href="{{ route('why_study_in_the_uk',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
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
						<img src="{{ asset('images/blogs/uk_study_system.jpg') }}" width="100%">
						<h5 style="margin-top: 10px;">UK Education System</h5>
						<p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
						<hr>
						<p style="font-size: 16px;">
							 
							The education system in the UK is divided into four main parts, primary education, 


						</p>
						<span style="font-size: 15px;font-weight: 300">January 27, 2020 | Study In UK</span><br>
						
						<br>
						<a href="{{ route('uk_education_system',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
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
    <!--  Blog Section -->
    <!-- Blog Section -->
        <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-6" >
                    <div class="row">
                        
                        <div class="col-lg-11 " >
                        <img src="{{ asset('images/blogs/scholarships.jpg') }}" width="100%">
                        <a href="{{ route('scholarship_in_uk',app()->getLocale()) }}"><h5 style="margin-top: 10px;">Scholarships</h5></a>
                        <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
                        <hr>
                        <p style="font-size: 16px;">
                             
                            Anatomy / Forensic Anthropology / Forensic and Medical Art, Architecture and Urban Planning, Art and Design, Biological/Biomedical Sciences, Biomedical Engineering


                        </p>
                        <span style="font-size: 15px;font-weight: 300">Febraury 13, 2020 | Study In UK</span><br><br>
                        <a href="{{ route('scholarship_in_uk',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
                            <i class="fas fa-chevron-right"></i>
                        </a>
                        <br><br><hr>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
                <div class="col-lg-6" >
                                        <div class="row">
                        
                        <div class="col-lg-11 " >
                        <img src="{{ asset('images/blogs/graduate_immigration_route.jpg') }}" width="100%">
                        <a href="{{ route('graduate_immigration_route',app()->getLocale()) }}"><h5 style="margin-top: 10px;">Graduate Immigration Route</h5></a>
                        <p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
                        <hr>
                        <p style="font-size: 16px;">
                             
                            On 11 September 2019 the UK Government announced the creation of a new immigration route


                        </p>
                        <span style="font-size: 15px;font-weight: 300">April 16, 2020 | Study In UK</span><br><br>
                        <a href="{{ route('graduate_immigration_route',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
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
    <!--  Blog Section -->
    
	
	<div class="row">
		
	<div class="col-lg-11">

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