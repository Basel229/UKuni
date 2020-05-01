@extends('layouts.universitypanel')

@section('content')

 
<div class="container"><br>
	<h1 style="text-align: center;">Add Your Course Details here</h1>
	<br>
	<hr>
  @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
    <form enctype="multipart/form-data" action="{{ route('coursedata',app()->getLocale())}}" method="post">
   
      {{ csrf_field() }}
    Enter Course Discipline here : <br>
  	<input type="text" name="discipline" class="form-control" placeholder="Hint : Accounting" required=""><br>
  	<div class="form-row">
  	<div class="form-group col-lg-6">
  	Degree Title : <br>
    <input type="text" name="degree_title" class="form-control" placeholder="Hint : Bachelor in Accounting & Finance" required="">
  	</div>
  	<div class="form-group col-lg-6">
  	Level : <br>
  	<input type="text" name="level" class="form-control" placeholder="Hint : Undergraduate" required="">
  	</div>
  	</div>
  	<div class="form-row">
  	<div class="form-group col-lg-4">
  	Duration : <br>
  	<input type="text" name="duration" class="form-control" placeholder="Hint : 3years" required="">
  	</div>
  	<div class="form-group col-lg-4">
  	Type : <br>
  	<input type="text" name="type" class="form-control" placeholder="Hint : Full Time/ Part Time" required="">
  	</div>
    <div class="form-group col-lg-4">
    Session : <br>
    <input type="text" name="session" class="form-control" placeholder="Hint : 2020-2021" required="">
    </div>
  	</div>
  	
  	<br>
  	<input type="submit" name="submit" value="Add Course" class="btn btn-success btn-block">

     
    </form><br><br><br>
</div>
 
@endsection