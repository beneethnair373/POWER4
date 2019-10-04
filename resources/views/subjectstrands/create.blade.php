@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/subject-strand/store">
			@csrf
		  <div class="form-group">
		 
		    <input type="text" class="form-control" name='name' aria-describedby="emailHelp" placeholder="Subject Strand">
		  </div>
		   <div class="form-group">
		    <label for="description">Description</label>
		    <input type="text" class="form-control" name="description" placeholder="Description">
		  </div>
		  <div class="form-group">
		    <label for="exampleCheck1">Due Date</label>
		    <input type="date" class="form-control" name="due_date" >
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
