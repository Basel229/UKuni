@extends('layouts.user')
@section('content')

   <br><br><br>
        <div class="row" >
        
        <div class="col-lg-12" >
            <h3 class="heading">General Entries </h3><br>
            <h4 >Total Entries : {{ $totalentries}}</h4>
            <table class="table table-striped">
                <tr style="background-color: #146eb4;color: #fff;">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>GPA</th>
                    <th>Subject</th>
                    <th>Degree Level</th>
                    <th>Preferred Destination</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Received Date/Time</th>
                </tr>
                
                @foreach($getassessment as $key=>$value)
                <tr style="font-size: 20px;">
                
                    
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone_number}}</td>
                    <td>{{$value->gpa}}</td>
                    <td>{{$value->subject}}</td>
                    <td>{{$value->degree_level}}</td>
                    <td>{{$value->preferred_destination}}</td>
                    <td>{{$value->country}}</td>
                    <td>{{$value->city}}</td>
                    <td>{{ $value->created_at->diffForHumans() }}</td>
                 
                    
                </tr>
                @endforeach
            </table>
        </div>
        
    </div><br>
    	<div class="row">
		<div class="col-lg-8">
			{{ $getassessment->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}

		</div>
		<div class="col-lg-4"></div>
	</div>
    <br>
   
    
@endsection
    