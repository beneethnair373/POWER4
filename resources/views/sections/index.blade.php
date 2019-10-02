@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach($sections as $section)
					<tr>
						<td>{{ $section->id }}</td>
						<td>{{ $section->name }}</td>
						
					</tr>
				@endforeach
			</tbody>
			
			
		</table>
		<a class="btn btn-primary" href='/sections/add'>Add New Section</a>
	</div>
@endsection