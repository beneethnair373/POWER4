@extends('layouts.master')
@section('content')
@extends('layouts.errors')
	<div class="container">
		<form method="POST" action="/sections/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Name of the Section">
		  </div>
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='is_active' aria-describedby="emailHelp" placeholder="Active">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection