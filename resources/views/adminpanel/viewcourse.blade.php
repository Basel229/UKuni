@extends('layouts.universitypanel')

@section('content')

<div class="row">
            
            <div class="col-lg-12">

              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Courses | <a href="{{ route('addcourse',app()->getLocale())}}" class="btn btn-primary">Add New Course</a></h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Discipline</th>
                      <th>Degree Title</th>
                      <th>Level</th>
                      <th>Duration</th>
                      <th>Type</th>
                      <th>Session</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>Discipline</th>
                      <th>Degree Title</th>
                      <th>Level</th>
                      <th>Duration</th>
                      <th>Type</th>
                      <th>Session</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>

                  <tbody>
                  @foreach($getcourse as $key=>$value)
                  <tr>
                  	<td>{{$value->discipline}}</td>
                  	<td>{{$value->degree_title}}</td>
                  	<td>{{$value->level}}</td>
                  	<td>{{$value->duration}}</td>
                  	<td>{{$value->type }}</td>
                    <td>{{$value->session }}</td>
                    <td><a href="{{ route('deletecourse',['lang'=>app()->getLocale(),'id'=>$value->id]) }}">Delete</a></td>
                  	
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