@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/subjects/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Subject Name">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection