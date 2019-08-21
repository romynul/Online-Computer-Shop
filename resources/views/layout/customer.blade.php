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

	
	<a href="{{route('products.index')}}">Home</a> |
	<a href="{{route('products.search')}}">Search Products</a> |
	<a href="{{route('products.stdlist')}}">All Products</a> |
	<a href="{{route('products.cart')}}">Cart</a> |
	<a href="/logout">logout</a>
	<br>
	Catagories :
	<a href="{{route('products.laptop')}}">Laptop</a> |
	<a href="{{route('products.ram')}}">Ram</a> |
	<a href="{{route('products.casing')}}">Casing</a> |
	<a href="{{route('products.storage')}}">Storage</a> |
	<a href="{{route('products.monitor')}}">Monitor</a> |

	@yield('content')
	
</body>
</html>