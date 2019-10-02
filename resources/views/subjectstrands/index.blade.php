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
				@foreach($subject-strand as $subject-strand)
					<tr>
						<td>{{ $subject-strand->id }}</td>
						<td>{{ $subject-strand->name }}</td>
						
					</tr>
				@endforeach
			</tbody>
			
			
		</table>
		<a class="btn btn-primary" href='/sections/add'>Add New Subject Strand</a>
	</div>
@endsection