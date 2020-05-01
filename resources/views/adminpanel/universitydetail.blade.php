@extends('layouts.universitypanel')

@section('content')

 
<div class="container"><br>
	<h1 style="text-align: center;">Add Your University Basic Information</h1>
	<br>
	<hr>
  @foreach($getdata as $key=>$value)
    <form enctype="multipart/form-data" action="{{ route('updateuniversitydata',app()->getLocale())}}" method="post">
   
      {{ csrf_field() }}
    Enter University Name here : <br>
    <input type="hidden" name="id" value="{{$value->id}}">
  	<input type="text" name="name" class="form-control" value="{{ $value->name}}"><br>
  	University Description here : <br>
  	<textarea id="mytextarea" name="description" rows="20" >{{$value->description}}</textarea><br>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	Type of Institution : <br>
  	<select name="type" class="form-control"  >
  		<option value="{{$value->type}}">{{$value->type}}</option>
  		<option value="School">School</option>
  		<option value="College">College</option>
  		<option value="University">University</option>
  	</select>
  	</div>
  	<div class="form-group col-lg-6">
  	Country : <br>
  	<input type="text" name="country" class="form-control" value="{{ $value->country}}">
  	</div>
  	</div>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	City : <br>
  	<input type="text" name="city" class="form-control" value="{{ $value->country}}">
  	</div>
  	<div class="form-group col-lg-6">
  	Area : <br>
  	<input type="text" name="area" class="form-control" value="{{ $value->area}}">
  	</div>
  	</div>
  	Address : <br>
  	<input type="text" name="address" class="form-control" value="{{ $value->address}}"><br>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	Email Address : <br>
  	<input type="text" name="email" class="form-control" value="{{ $value->email}}">
  	</div>
  	<div class="form-group col-lg-6">
  	Contact Number : <br>
  	<input type="text" name="phone" class="form-control" value="{{ $value->phone}}">
  	</div>
  	</div>
    <img src="logo/{{$value->logo}}" width="150" height="150"><br>
    <p style="color: red;">*if you want to change logo. Upload New Logo below</p><br>
  	<input  name="logo" class="form-control" type="file" id="imageInput" >
  	<br>
  	<input type="submit" name="submit" value="Update Information" class="btn btn-success btn-block">

     
    </form><br><br><br>
    @endforeach
</div>
 
@endsection