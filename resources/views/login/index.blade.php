<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>LOGIN PAGE</h1>

	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		{{csrf_field()}}
		
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
	Not a Member ?<a href="{{route('home.registration')}}"> Click here for Sign Up</a>

	<div>
		{{session('msg')}}
	</div>
</body>
</html>