<!DOCTYPE html>
<html>
<head>
<meta name="_token" content="{{ csrf_token() }}">
<title>Live Search</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>

<h1>Welcome {{session('user')}}</h1> 

	<a href="{{route('home.index')}}">Home</a> |
	<a href="{{route('home.stdlist')}}">Customer List</a> |
	<a href="{{route('home.search')}}">Search Products</a> |
	<a href="{{route('home.addc')}}">Add Products</a> |
	<a href="{{route('home.stdlistc')}}">All Products</a> |
	<a href="/logout">logout</a>

	
	@yield('content')

</body>
</html>