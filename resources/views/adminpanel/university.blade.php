@extends('layouts.universitypanel')

@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-lg-10">
            @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
            @endif
        @php
          $temp = 0;
        
        foreach($universitydata as $key=>$value){
          if($value->user_id == Auth::id()){
          $temp = 1;
          break;
          }
        }
        
        @endphp  
        @if($temp == 0)    
            <div class="alert alert-danger">
               <h5>Welcome {{auth()->user()->name}}! Start adding University Content by<a href="{{ route('adduniversity',app()->getLocale())}}"> Click here</a> </h5>

            </div>
            <h6 style="color:red;">*Note : After adding university content. You are allowed to add courses. Otherwise your courses have no identity</h6>
        @endif
        @if($temp == 1)    
            <div class="alert alert-info">
               <h5><i class="fas fa-check-circle" style="font-size:32px;"></i> University Content Added | <a href="{{ route('universitydetail',app()->getLocale())}}">Update Now</a> </h5> 
            </div>
        @php
        $i = 0;
        foreach($universitydata as $key=>$value)
        {
            if($value->user_id == Auth::id())
            {
                $universityid = $value->id;
            }
        }

        foreach($coursedata as $key=>$value)
        {
            if($value->university_id == $universityid)
            {
                $i++;
            }
        }
        @endphp
            <div class="alert alert-info">
               <h5>You have @php echo $i; @endphp course added in your university account | <a href="{{ route('addcourse',app()->getLocale())}}">Add More</a></h5> 
            </div>
        @endif    
        </div>
        <div class="col-lg-1"></div>
    </div>
</div>


<!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">University Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="alert alert-danger" role="alert">
                    You are logged in "{{ auth()->user()->name }}" & your account status is {{ auth()->user()->status}}
                    </div>
                </div>
            </div>
        </div>
    </div> -->
@endsection
