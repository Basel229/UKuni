@extends('layouts.adminpanel')

@section('content')

<div class="row">
            
            <div class="col-lg-12">

              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Immigration & Citizenship Queries </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>He is looking for</th>
                      <th>Action </th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>He is looking for</th>
                      <th>Action </th>
                    </tr>
                  </tfoot>

                  <tbody>
                  @foreach($getimmigrationquery as $key=>$value)
                  @if($value->status != "complete")
                  <tr>
                  	<td>{{$value->fname}}</td>
                  	<td>{{$value->lname}}</td>
                  	<td>{{$value->email}}</td>
                    <td>{{$value->phone_number }}</td>
                    <td>{{$value->information }}</td>
                    <td><a href="{{ route('viewimmigrationquery',['lang'=>app()->getLocale(),'id'=>$value->id])}}" >View</a> | <a href="{{ route('completeimmigrationquery',['lang'=>app()->getLocale(),'id'=>$value->id])}}" >Complete</a> | <a href="{{ route('deleteimmigrationquery',['lang'=>app()->getLocale(),'id'=>$value->id])}}" >Delete</a></td>
                  	
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