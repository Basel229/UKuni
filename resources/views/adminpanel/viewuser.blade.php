@extends('layouts.adminpanel')

@section('content')

<div class="row">
            
            <div class="col-lg-12">

              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Name</th>
                      <th>Email</th>
                      <th>Account Type</th>
                      <th>Status</th>
                      <th>Date / Time</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>Name</th>
                      <th>Email</th>
                      <th>Account Type</th>
                      <th>Status</th>
                      <th>Date / Time</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>

                  <tbody>
                  @foreach($users as $key=>$value)
                  <tr>
                  	<td>{{$value->name}}</td>
                  	<td>{{$value->email}}</td>
                  	<td>{{$value->account_type}}</td>
                  	<td>{{$value->status}}</td>
                  	<td>{{$value->created_at->diffForHumans() }}</td>
                  	<td>
                  		@if($value->status == "pending")
                  			<a href="{{ route('pendinguser',['lang' => app()->getlocale(),'id'=>$value->id])}}" >Need Approve</a> | <a href="{{ route('deleteuser',['lang' => app()->getlocale(),'id'=>$value->id])}}" >Delete</a>
                  		@endif
                  		@if($value->status == "approve")
                  			<a href="#" >View Details</a> | <a href="{{ route('deleteuser',['lang' => app()->getlocale(),'id'=>$value->id])}}" >Delete</a>
                  		@endif
                  	</td>
                  </tr>
                  @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
             
                </div>
              </div>




@endsection