@extends('layouts.adminpanel')

@section('content')

<div class="row">
            
            <div class="col-lg-12">

              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All General Queries </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Preferred Destination</th>
                      <th>Action </th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Preferred Destination</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>

                  <tbody>
                  @foreach($getgeneralquery as $key=>$value)
                  @if($value->status != "complete")
                  <tr>
                  	<td>{{$value->name}}</td>
                  	<td>{{$value->email}}</td>
                  	<td>{{$value->phone_number}}</td>
                    <td>{{$value->preferred_destination }}</td>
                    <td><a href="{{ route('viewgeneralquery',['lang'=>app()->getLocale(),'id'=>$value->id])}}" >View</a> | <a href="{{ route('completegeneralquery',['lang'=>app()->getLocale(),'id'=>$value->id])}}" >Complete</a> | <a href="{{ route('deletegeneralquery',['lang'=>app()->getLocale(),'id'=>$value->id,app()->getLocale()])}}" >Delete</a></td>
                  	
                  </tr>
                  @endif
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