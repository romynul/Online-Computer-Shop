@extends('layout.admin')

@section('content')

	<h2>Products List:</h2>
	
	<a href="/products">Back</a> |
	<a href="/logout">logout</a>
		<form method="post">

		<!--{{csrf_field()}} -->
		<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> --> 
		{{csrf_field()}}
		
		<table>
			
			<td>Brand </td>
				<td><select class="form-control selectric" name="brand">
                        
                        <option value="Dell">Dell</option>
                        <option value="Hp">Hp</option>
                        <option value="Asus">Asus</option>
                        
                      </select></td>
			
				<td><input type="submit" name="submit" value=" Submit"></td>
				<td></td>
			
		</table>
	</form>

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
				<a href="{{route('products.edit', $value['products_id'])}}">Edit</a> |
				<a href="{{route('products.delete', $value['products_id'])}}">Delete</a> |
				<a href="{{route('home.detailsc', $value['products_id'])}}">Details</a>
			</td>
		</tr>
		@endforeach

</table>
@endsection