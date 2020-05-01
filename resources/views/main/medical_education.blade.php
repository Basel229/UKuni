@extends('layouts.user')
@section('content')

<!-- About Us slider -->
<div class="row">
			<div id="demo" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/ukuni_slider/medicine.jpg') }}" alt="Los Angeles" width="1100" height="300">
      <div class="carousel-caption" >
        <h1 style="font-size: 50px;">{{ __('medical_education.medical')}} {{ __('medical_education.education')}}</h1>
        <hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #fff;" align="left">
        
<br><br>

<br><br>
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
		<p style="font-size: 50px; color: #1f0949;">{{ __('medical_education.medical')}} <strong style="font-size: 50px; color: #eb1e25;">{{ __('medical_education.education')}}</strong></p>
		



	<p style="font-size: 17px;">{{ __('medical_education.para1')}}</p>
    <p style="font-size: 17px;">{{ __('medical_education.para2')}}<a href = "https://www.qmul.ac.uk/smd/" style="color:#eb1e25;">Click Here</a>.{{ __('medical_education.para3')}} </p>

    <p style="font-size: 17px;">{{ __('medical_education.para4')}}</p>

    <p style="font-size: 17px;">{{ __('medical_education.para5')}}</p>
    <p style="font-size:17px;">{{ __('medical_education.para6')}}: <a href="https://www.qmul.ac.uk/smd/" style="color:#eb1e25;">Click Here</a></p>
    <p style="font-size:17px;">{{ __('medical_education.para7')}}</p>


	
	<br><br>
	<p style="font-size: 40px; color: #1f0949;">Kaplan <strong style="font-size: 40px; color: #eb1e25;">Medical</strong></p><br>
	<img src="{{ asset('images/medical_education/kaplan1.png')}}" width="85%"><br><br>
	<p style="font-size: 30px; color: #1f0949;">{{ __('medical_education.who_is_kaplan')}}</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para1')}} </p>
	<ul>
	<li>{{ __('medical_education.head1li1')}}</li>
	<li>{{ __('medical_education.head1li2')}}</li>
	<li>{{ __('medical_education.head1li3')}}</li>
	<li>{{ __('medical_education.head1li4')}}</li>
	<li>{{ __('medical_education.head1li5')}}</li>
	<li>{{ __('medical_education.head1li6')}}</li>

	</ul>
	<ul>
		<li>{{ __('medical_education.head1li7')}}</li>
		<li>{{ __('medical_education.head1li8')}} </li>
		<li>{{ __('medical_education.head1li9')}}</li>

	</ul>
	<p style="font-size: 30px; color: #1f0949;">{{ __('medical_education.why_kaplan')}}</p>
	<ul>
		<li>{{ __('medical_education.head2')}}<br>
			{{ __('medical_education.head2li1')}}
		 </li>
		<li>{{ __('medical_education.head3')}}<br>
			{{ __('medical_education.head2li2')}}
		 </li>
		<li>{{ __('medical_education.head4')}}<br>
			{{ __('medical_education.head2li3')}}
		 </li>
	</ul>

	<p style="font-size: 30px;color: #1f0949;">{{ __('medical_education.what_does_kaplan_do')}}</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para2')}}</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para3')}}</p>


	<p style="font-size: 30px; color: #1f0949;">{{ __('medical_education.how_does_kaplan_assist_students')}}</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para4')}}</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para5')}}</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para6')}}
	</p>
	<p style="font-size: 17px;">{{ __('medical_education.kaplan_para7')}}
	</p>
	<img src="{{ asset('images/medical_education/kaplan2.jpg') }}" width="85%"><br><br>

			<br><br><br>
		<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div class="row">
				<div class="col-lg-6" >
					<div class="row">
						
						<div class="col-lg-11 " >
						<img src="{{ asset('images/medical_education/kaplan1.png') }}" width="100%">
						<a href="{{ route('kaplan_event_calender',app()->getLocale()) }}"><h5 style="margin-top: 10px;">Kaplan Event Calender</h5></a>
						<p style="font-size: 13px;font-weight: 700;color: #eb1e25">Article</p>
						<hr>
						
						<span style="font-size: 15px;font-weight: 300">Febraury 13, 2020 | Kaplan Medical</span><br><br>
						<a href="{{ route('kaplan_event_calender',app()->getLocale()) }}"  id="changecolor" class="btn btn-default " style="background-color:#fff; color: #111;border-color: #1f0949; font-family:BusnosAires-light;font-size:20px;"><span >Read More</span> 
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