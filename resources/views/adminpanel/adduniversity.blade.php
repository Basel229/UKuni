@extends('layouts.universitypanel')

@section('content')

 
<div class="container"><br>
	<h1 style="text-align: center;">Add Your University Basic Information</h1>
	<br>
	<hr>
    <form enctype="multipart/form-data" action="{{ route('universitydata')}}" method="post">
   
      {{ csrf_field() }}
    Enter University Name here : <br>
  	<input type="text" name="name" class="form-control"><br>
  	University Description here : <br>
  	<textarea id="mytextarea" name="description" rows="20"></textarea><br>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	Type of Institution : <br>
  	<select name="type" class="form-control">
  		<option value="">Enter Type</option>
  		<option value="School">School</option>
  		<option value="College">College</option>
  		<option value="University">University</option>
  	</select>
  	</div>
  	<div class="form-group col-lg-6">
  	Country : <br>
  	<input type="text" name="country" class="form-control">
  	</div>
  	</div>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	City : <br>
  	<input type="text" name="city" class="form-control">
  	</div>
  	<div class="form-group col-lg-6">
  	Area : <br>
  	<input type="text" name="area" class="form-control">
  	</div>
  	</div>
  	Address : <br>
  	<input type="text" name="address" class="form-control"><br>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	Email Address : <br>
  	<input type="text" name="email" class="form-control">
  	</div>
  	<div class="form-group col-lg-6">
  	Contact Number : <br>
  	<input type="text" name="phone" class="form-control" >
  	</div>
  	</div>
  	<input  name="logo" class="form-control" type="file" id="imageInput" >
  	<br>
  	<input type="submit" name="submit" value="Publish" class="btn btn-success btn-block">

     
    </form><br><br><br>
</div>
 
@endsection