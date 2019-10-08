@extends('layouts.master')
@section('content')
	<div class="container">
		
		<form method="POST" action="/subject-strands/store">
			@csrf
		   <div class="form-group">
		    <label for="description">Semester</label>
		    <input type="text" class="form-control" name="semester" placeholder="semester">
		  </div>
		  <div class="form-group">
		    <label for="exampleCheck1">Grade_Level</label>
		    <input type="text" class="form-control" name="grade_level"
		    placeholder="grade_level" >
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection
