
@extends('layout.customer')

@section('content')

	<h2>Delete Products</h2>
<form method="post">
	{{@csrf_field()}}
	<table border="0">
	<tr>
			<td>Products Id :</td>
			<td>{{$std['products_id']}}</td>
		</tr>
		<tr>
			<td>Products Name :</td>
			<td>{{$std['p_name']}}</td>
		</tr>
		<tr>
			<td>Products Quantity :</td>
			<td>{{$std['p_quantity']}}</td>
		</tr>
		<tr>
			<td>Products Price:</td>
			<td>{{$std['p_price']}}</td>
		</tr>
		
</table>
	<h3>Are you sure You want to remove from cart?</h3>
	<input type="submit" name="delete" value="Confirm">
</form>
@endsection