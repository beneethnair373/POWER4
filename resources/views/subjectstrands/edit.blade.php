@extends('layouts.master')
@section('content')

<form method="POST" action="/subject-strands/{{$subject_strand->id}}/update">
	@csrf
	<input value= '{{$subject_strand->id}}' type='hidden' name='id'>
	<select name='semester'>
		@foreach($sections as $section)
		<option value='{{$section->id}}'> {{$section->name}}</option>
		@endforeach
	</select>
	@csrf
	<input value= '{{$subject_strand->id}}' type='hidden' name='id'>
	<select name='name'>
		@foreach($subjects as $subject)
		<option value='{{$subject->id}}'> {{$subject->name}}</option>
		@endforeach
	</select>

</form>
<a class="btn btn-primary" href='/subject-strands'>Return</a>
@endsection
