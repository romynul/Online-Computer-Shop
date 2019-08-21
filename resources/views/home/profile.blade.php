<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Profile</h1> 

	
	<form method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<input type="file" name="pic">
		<input type="submit" name="submit" value="Submit">
	</form>




</body>
</html>