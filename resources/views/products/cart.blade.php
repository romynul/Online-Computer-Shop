@extends('layout.customer')

@section('content')

<br>
<h2> Your Cart</h2>
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
				<a href="{{route('cart.delete', $value['products_id'])}}">Delete</a> 
			</td>
		</tr>
		@endforeach

</table>


<h2> Select Payment method</h2>
<input type="radio" name="payment" value="Cash"> Cash<br>
<input type="radio" name="payment" value="Bkash"> Bkash<br>

<button type="button" class="btn btn-primary">Confirm Order</button>

@endsection