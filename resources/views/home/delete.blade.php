
<!DOCTYPE html>
<html>
<head>
	<title>Delete Employee</title>
</head>
<body>

	<h2>Delete Employee</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
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
	<h3>Are you sure?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
</body>
</html>