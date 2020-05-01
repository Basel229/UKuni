@extends('layouts.adminpanel')

@section('content')

<div class="row">
            
            <div class="col-lg-12">

              <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">All Universities</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     
                      <th>Name</th>
                      <th>Type</th>
                      <th>Logo</th>
                      <th>Country</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      
                      <th>Name</th>
                      <th>Type</th>
                      <th>Logo</th>
                      <th>Country</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>

                  <tbody>
                  @foreach($universities as $key=>$value)
                  <tr>
                  	<td>{{$value->name}}</td>
                  	<td>{{$value->type}}</td>
                  	<td><img src="http://localhost/adminpanel/public/logo/{{$value->logo }}" width="150" height="150"></td>
                  	<td>{{$value->country}}</td>
                    <td>{{$value->phone}}</td>
                  	<td>{{$value->email }}</td>
                  	<td><a href="{{ route('previewuniversity',['lang' => app()->getlocale(),'id'=>$value->id])}}">View</a> | <a href="{{ route('deleteuniversity',['lang' => app()->getlocale(),'id'=>$value->id])}}">Delete</a></td>
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