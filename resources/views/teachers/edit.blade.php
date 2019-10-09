@extends('layouts.master')
@section('content')

<form method="POST" action="/teachers/{{$teacher->id}}/update">
	@csrf
	<input value= '{{$teacher->id}}' type='hidden' name='id'>
	<select name='advisory_section'>
		@foreach($sections as $section)
		<option value='{{$section->id}}'> {{$section->name}}</option>
		@endforeach
	</select>

</form>
<a class="btn btn-primary" href='/teachers'>Return</a>
@endsection