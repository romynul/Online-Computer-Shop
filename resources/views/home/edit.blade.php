@extends('layout.admin')

@section('content')

	<h2>Edit Employee</h2>



<form method="post">
	<table border="0">
		<tr>
			<td>UserId</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$std['emp_name']}}"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="contact" value="{{$std['contact_no']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
@endsection