@extends('layout.customer')

@section('content')

	<h2>Edit Products</h2>

	<a href="{{route('products.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
{{@csrf_field()}}
	<table border="0">
		<tr>
			<td>Products Id</td>
			<td>{{$std['products_id']}}</td>
		</tr>
		<tr>
			<td>Products Name</td>
			<td><input type="text" name="pname" value="{{$std['p_name']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="pquantity" value="{{$std['p_quantity']}}"></td>
		</tr>
		<tr>
			<td>Contact</td>
			<td><input type="text" name="pprice" value="{{$std['p_price']}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
@endsection