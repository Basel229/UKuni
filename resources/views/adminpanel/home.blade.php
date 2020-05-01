@extends('layouts.adminpanel')

@section('content')

    <div class="container">
        <h2 style="text-align: center;">Website Statistics</h2><br>
        <hr>
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-2" style="background-color: #160d42d1;">
            <br>
            <h2 style="text-align: center;color: #fff;">{{ $universitycount }}</h2>
            <h4 style="text-align: center;color: #fff;">Total Universities</h4>
            <br>

        </div>
        <div class="col-lg-2" style="background-color: #ee1c25cc;">
            <br>
            <h2 style="text-align: center;color: #fff;">{{ $getcourse }}</h2>
            <h4 style="text-align: center;color: #fff;">Total Courses</h4>
            <br>

        </div>
        <div class="col-lg-2" style="background-color: #160d42d1;">
          <br>
            <h2 style="text-align: center;color: #fff;">{{ $generalquerycount }}</h2>
            <h4 style="text-align: center;color: #fff;">General Queries</h4>
          <br>  

        </div>
        <div class="col-lg-2" style="background-color: #ee1c25cc;">
           <br>
            <h2 style="text-align: center;color: #fff;">{{ $immigrationquerycount }}</h2>
            <h4 style="text-align: center;color: #fff;">Immigration Queries</h4>
          <br>  

        </div>
        <div class="col-lg-2" style="background-color: #160d42d1;">
           <br>
            <h2 style="text-align: center;color: #fff;">{{ $pendingusercount }}</h2>
            <h4 style="text-align: center;color: #fff;">Pending Accounts</h4>
          <br>  

        </div>
        <div class="col-lg-1"></div>

    </div><hr>
    <div class="row">

        
        <div class="col-lg-7"><br>
            <h3 >Notifications</h3>
            <hr>
            @if($pendingusercount != 0)
            <div class="alert alert-danger">
                <h6>You have new pending request | <a href="{{ route('pendingaccounts',app()->getlocale())}}">View List</a></h6>
            </div>
            @endif
            <div class="alert alert-info">
               @php
               $immigrationpercentage = $immigrationcomplete*100/$immigrationquerycount;
               
               @endphp
               
               <h6>Your have adddressed @php echo number_format((float)$immigrationpercentage, 1, '.', ''); @endphp% on the immigration queries | <a href="{{ route('immigrationinquiry',app()->getlocale())}}">Address More</a></h6> 
            </div>
            
            <div class="alert alert-info">
               @php
               $generalpercentage = $generalcomplete*100/$generalquerycount;
               
               @endphp
               
               <h6>Your have adddressed @php echo number_format((float)$generalpercentage, 1, '.', ''); @endphp% on the general queries | <a href="{{ route('generalinquiry',app()->getlocale())}}">Address More</a></h6> 
            </div>
            </div>
            <div class="col-lg-5">
                <br>
            <h3 >Quick Links</h3>
            <hr>
            <div class="alert alert-info">
               
               
               <h6>Want to view courses list | <a href="{{ route('adminviewcourses',app()->getlocale())}}">View Courses</a></h6> 
            </div>
            <div class="alert alert-info">
               
               
               <h6>Want to view University list | <a href="{{ route('viewuniversities',app()->getlocale())}}">View university</a></h6> 
            </div>
        </div>
    </div>
</div>


    <!-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

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
</div>
@endsection
