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
		<img src="{{ asset('images/ireland.jpg') }}">&nbsp;<p style="font-size: 20px; text-align: left;color: #1f0949;">{{ $dataselected->university}}</p>

		<hr width="10%" style="border-top-width: 3px;
    border-top-style: solid;
    border-top-color: #1f0949;" align="left">
	<br>		

		<div class="row">
			
			<div class="col-lg-12">
				<table class="table table-striped">
					<tr style="background-color: #cd0d2f;color:#fff;">
						<th>Level Of Study</th>
						<th>Discipline</th>
						<th>Degree Title</th>
						<th>Time</th>
					</tr>
					<tr style="background-color: #f8f8f8;font-weight: 700;">
						<td><img src="{{ asset('images/detailed_page_icon/field-of-study.png') }}" style="width: 30%"><br>{{$dataselected->level}}</td>
						<td><img src="{{ asset('images/detailed_page_icon/duration.png') }}" style="width: 30%"    ><br>{{$dataselected->discipline}}</td>
						<td><img src="{{ asset('images/detailed_page_icon/full-part-time.png') }}" style="width: 11%"    ><br>{{$dataselected->degree_title}}</td>
						<td><img src="{{ asset('images/detailed_page_icon/sessions.png') }}" style="width: 30%"    ><br>{{$dataselected->time}}</td>
					</tr>
				</table>
			</div>
			
		</div>


	</div>
	<div class="col-lg-3 " >
				
		<p style="font-size: 25px; text-align: left;color: #fff;background-color: #1f0949;;padding: 25px;">If you have any query, Send us a message</p>
		<form method="post" action="{{ route('getirelandselecteduniversitydata') }}" style="background-color: #f8f8f8;padding: 15px;" >

			{{ csrf_field() }}
			<input type="text" name="name" class="form-control" placeholder="Enter Full Name"><br>
			<input type="email" name="email" class="form-control" placeholder="Enter Email Address"><br>
			<input type="number" name="phone_number" class="form-control" placeholder="Phone #(Hint: 00923211234567)"><br>
			<input type="number" name="gpa" class="form-control" placeholder="Enter GPA (Hint: 3.2)" step=any><br>
			<input type="text" name="discipline" value = "{{$dataselected->discipline}}" readonly class="form-control" placeholder="{{$dataselected->discipline}}"><br>
			<input type="text" name="university" value = "{{$dataselected->university}}" readonly class="form-control" placeholder="{{$dataselected->university}}"><br>
			<input type="text" name="degree_title" value = "{{$dataselected->degree_title}}" readonly class="form-control" placeholder="{{$dataselected->degree_title}}"><br>
			
			<input type="text" name="time" value = "{{$dataselected->time}}" readonly class="form-control" placeholder="{{$dataselected->session}}"><br>
			
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

@endsection
