@extends('layout.admin')

@section('content')


	<table class="table table-bordered table-hover">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Contact No</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['emp_name']}}</td>
			<td>{{$value['contact_no']}}</td>
			<td>
				<a href="{{route('home.edit', $value['id'])}}">Edit</a> |
				<a href="{{route('home.delete', $value['id'])}}">Delete</a> |
				<a href="{{route('home.details', $value['id'])}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>

@endsection