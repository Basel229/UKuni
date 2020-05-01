@extends('layouts.user')
@section('content')

   <br><br><br>
        <div class="row" >
        
        <div class="col-lg-12" >
            <h3 class="heading">Immigration Entries </h3><br>
            <h4 >Total Entries : {{ $totalentries}}</h4>
            <table class="table table-striped">
                <tr style="background-color: #146eb4;color: #fff;">
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Age</th>
                    <th>Married Status</th>
                    <th>Do You Have Children?</th>
                    <th>English Language</th>
                    <th>French Language</th>
                    <th>Highest Level Of Education</th>
                    <th>Have You ever</th>
                    <th>Refused Canada Before</th>
                    <th>Relatives in Canada
</th>
                    <th>Approximate Net Worth
</th>
                    <th>Information he is looking for:</th>
                    <th>Resume/ CV</th>
                    <th>Received Date/Time</th>
                </tr>
                
                @foreach($getassessment as $key=>$value)
                <tr style="font-size: 20px;">
                
                    
                    <td>{{$value->fname}}</td>
                    <td>{{$value->lname}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->phone_number}}</td>
                    <td>{{$value->age}}</td>
                    <td>{{$value->marital_status}}</td>
                    <td>{{$value->children}}</td>
                    <td>{{$value->english}}</td>
                    <td>{{$value->french}}</td>
                    <td>{{$value->level_of_studies}}</td>
                    <td>{{$value->have_you_ever}}</td>
                    <td>{{$value->visa_status}}</td>
                    <td>{{$value->relatives_canada}}</td>
                    <td>{{$value->net_worth}}</td>
                    <td>{{$value->information}}</td>
                    <td><a href="resumes/{{ $value->resume }}" class="btn btn-info" target = "_blank">View</a></td>
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
    