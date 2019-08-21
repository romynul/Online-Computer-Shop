<!DOCTYPE html>
<html>
<head>
	<title>Add Student</title>
</head>
<body>

	<h2>Create Student</h2>

	<a href="{{route('home.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Employee Name :</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Contact No :</td>
			<td><input type="text" name="contact"></td>
		</tr>
		<tr>
			<td>Username :</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="password" name="password"></td>
		</tr>
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Add_Employee"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>