@extends('layouts.adminpanel')

@section('content')

 
<div class="container"><br>
	<h1 style="text-align: center;">User Role</h1>
	<br>
	<hr>
  <div class="row">
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
          <form  action="{{ route('assignrole',app()->getLocale())}}" method="post">
   
      {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$id}}">
    Please Select User Role : <br>
    <select name="account_type" class="form-control">
      <option value="">Enter Type</option>
      <option value="admin">Admin Role</option>
      <option value="university">University Account Role</option>
      
    </select>
        <br>
    <input type="submit" name="submit" value="Assign Role" class="btn btn-success btn-block">

     
    </form><br><br><br>
    </div>
    <div class="col-lg-4"></div>
  </div>

</div>
 
@endsection