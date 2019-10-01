@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/teachers/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Teachers Name">
		    <br>
		    <input type="text" class="form-control" name='advisory_section' aria-describedby="emailHelp" placeholder="Advisory">

		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection