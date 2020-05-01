@extends('layouts.user')
@section('content')
<!-- About Us slider -->


<br><br>
<!-- About Us slider -->
<!-- About Us Text -->
<div class="container-fluid">
<div class="row">
	
	<div class="col-lg-8">

		<p style="font-size: 40px; text-align: left;color: #1f0949;">{{ $dataselected->degree_title}}</p>
		<p style="font-size: 20px; text-align: left;color: #1f0949;">{{ $dataselected->discipline}}</p>
		<img src="{{ asset('images/uk.jpg') }}">&nbsp;<p style="font-size: 20px; text-align: left;color: #1f0949;">{{ $dataselected->university}}</p>

		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
	<br>		

		<div class="row">
			
			<div class="col-lg-12">
				<table class="table table-striped">
					<tr style="background-color: #cd0d2f;color:#fff;">
						<th>Level Of Study</th>
						<th>Duration</th>
						<th>Type</th>
						<th>Session</th>
					</tr>
					<tr style="background-color: #f8f8f8;font-weight: 700;">
						<td><img src="{{ asset('images/detailed_page_icon/field-of-study.png') }}" style="width: 30%"><br>{{$dataselected->level}}</td>
						<td><img src="{{ asset('images/detailed_page_icon/duration.png') }}" style="width: 30%"    ><br>{{$dataselected->duration}}</td>
						<td><img src="{{ asset('images/detailed_page_icon/full-part-time.png') }}" style="width: 28%"    ><br>{{$dataselected->type}}</td>
						<td><img src="{{ asset('images/detailed_page_icon/sessions.png') }}" style="width: 30%"    ><br>{{$dataselected->session}}</td>
					</tr>
				</table>
			</div>
			
		</div>


	</div>
	<div class="col-lg-3 " >
				
		<p style="font-size: 25px; text-align: left;color: #fff;background-color: #1f0949;;padding: 25px;">If you have any query, Send us a message</p>
		<form method="post" action="{{ route('getukselecteduniversitydata') }}" style="background-color: #f8f8f8;padding: 15px;" >

			{{ csrf_field() }}
			<input type="text" name="name" class="form-control" placeholder="Enter Full Name"><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Email Address"><br>
			<input type="number" name="phone_number" class="form-control" placeholder="Phone #(Hint: 00923211234567)"><br>
			<input type="number" name="gpa" class="form-control" placeholder="Enter GPA (Hint: 3.2)" step=any><br>
			<input type="text" name="discipline" value = "{{$dataselected->discipline}}" readonly class="form-control" placeholder="{{$dataselected->discipline}}"><br>
			<input type="text" name="university" value = "{{$dataselected->university}}" readonly class="form-control" placeholder="{{$dataselected->university}}"><br>
			<input type="text" name="degree_title" value = "{{$dataselected->degree_title}}" readonly class="form-control" placeholder="{{$dataselected->degree_title}}"><br>
			<input type="text" name="level" value = "{{$dataselected->level}}" readonly class="form-control" placeholder="{{$dataselected->level}}"><br>
			<input type="text" name="duration" value = "{{$dataselected->duration}}" readonly class="form-control" placeholder="{{$dataselected->duration}}"><br>
			<input type="text" name="type" value = "{{$dataselected->type}}" readonly class="form-control" placeholder="{{$dataselected->type}}"><br>
			<input type="text" name="session" value = "{{$dataselected->session}}" readonly class="form-control" placeholder="{{$dataselected->session}}"><br>
			
			<input type="submit" name="submit" value="Submit" class="btn btn-success">
		</form>
		@if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
	</div>
	<div class="col-lg-1"></div>
</div>
</div>
<br><br>
<!-- About Us Text -->
<!-- The Team 
<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<p style="font-size: 50px; text-align: left;color: #1f0949;">The <strong style="font-size: 50px; color: #eb1e25;">Team</strong></p>
		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
	</div>
	<div class="col-lg-1"></div>
</div><br>
<div class="row">
	<div class="col-lg-1"></div>
	<div class="col-lg-10">
		<div class="row">
			<div class="col-lg-4">
				<img src="images/team/01.jpg"  width="70%">
				<p style="font-size: 25px; text-align: left;color: #1f0949;">Mr. Ibrahim Al-Najjar</strong></p>
				<p>Mr. Ibrahim Al-Najjar, founder and CEO of UKuni enjoys a long experience that goes back to 1996 and long relations with UK education sector. Mr. Al-Najjar worked as education manager and assistant director of the British Council in Saudi Arabia, and took part in many initiatives to promote the educationalrelationships between Saudi Arabia and the UK. Mr. Al-Najjar was also supported by a dedicatedand enthusiastic team of education advisersand counsellors.</p>
			</div>
			<div class="col-lg-4">
				<img src="images/team/01.jpg"  width="70%">
				<p style="font-size: 25px; text-align: left;color: #1f0949;">Taha Ahmed,</strong></p>
				<p>Taha Ahmed, was, and still a key player in UKuni and was awarded the British Council Certificate for Education Advisers. Taha manages the Riyadh office and has a good team to support him.</p>
				
			</div>
			<div class="col-lg-4">
				<img src="images/team/01.jpg"  width="70%">
				<p style="font-size: 25px; text-align: left;color: #1f0949;">Fuad Hariz</strong></p>
				<p>Fuad Hariz is another member of the team and has also been awarded the British Council Certificate for Education Advisers. Fuad manages the Jeddah office and has a good team to support him.</p>
				
			</div>
		</div>
	</div>
	<div class="col-lg-1"></div>
</div>
The Team -->
@endsection
