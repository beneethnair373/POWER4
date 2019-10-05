@extends('layouts.master')
@section('content')

			@csrf
<form method="POST" action="/teachers/{{$teacher->id}}/edit">
	@csrf
	<input value= '{{$teacher->id}}' type='hidden' name='id'>
	<select name='advisory_section'>
		@foreach($sections as $section)
		<option value='{{$section->id}}'> {{$section->name}}</option>
		@endforeach
	</select>

</form>
@endsection