@extends('layout.customer')

@section('content')

	<h2>Products List:</h2>
	
	<a href="/products">Back</a> |
	<a href="/logout">logout</a>
	
	

	<table class="table table-bordered table-hover">
		<tr>
			<td>Products ID</td>
			<td>Products Name</td>
			<td>Products Quantity</td>
			<td>Products Price</td>
			<td>Products Brand</td>
			<td>Products Catagory</td>
			<td>Action</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['products_id']}}</td>
			<td>{{$value['p_name']}}</td>
			<td>{{$value['p_quantity']}}</td>
			<td>{{$value['p_price']}}</td>
			<td>{{$value['brand']}}</td>
			<td>{{$value['catagories']}}</td>
			<td>
				<a href="{{route('products.details', $value['products_id'])}}">Details</a> |
				<a href="{{route('products.cartadd', $value['products_id'])}}">Add To Cart</a>
			</td>
		</tr>
		@endforeach

</table>
@endsection