@extends('layout.admin')

@section('content')


	<h2>Details Employee</h2>



	<table border="0">
		<tr>
			<td>UserId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td>{{$std['emp_name']}}</td>
		</tr>
		<tr>
			<td>Contact :</td>
			<td>{{$std['contact_no']}}</td>
		</tr>
</table>
@endsection