<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h1>Registration PAGE</h1>

	<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		{{csrf_field()}}
		
		<table>
			<tr>
				<td>Emp Name</td>
				<td><input type="text" name="ename"></td>
			</tr>
			<tr>
				<td>Contact</td>
				<td><input type="text" name="contact"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td>Role</td>
				<td><select class="form-control selectric" name="type">
                        
                        <option value="admin">admin</option>
                        <option value="customer">customer</option>
                        
                      </select></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
	
	Already a Member ?<a href="{{route('login.index')}}"> Click here for Login</a>

	
</body>
</html>