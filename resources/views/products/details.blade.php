@extends('layout.customer')

@section('content')

<h2>Details Product</h2>

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
		
		<tr>
			<td>Products Menufacture:</td>
			<td>{{$std['menufac']}}</td>
		</tr>
</table>

<br>
<h3>Give A Review</h3>
<form method="post">

		{{csrf_field()}}
		
		<table>
			<tr>
				<td>Review Star</td>
				<td><input type="text" name="reviewstar" placeholder="1-5"></td>
			</tr>
			<tr>
				<td>Comments</td>
				<td><input type="text" name="review"></td>
			</tr>
			 <input type="hidden" id="productid" name="productid" value="{{$std['products_id']}}">
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
	
	
<br>
<h3>All Review</h3>

@foreach($review as $rev)
		Review Star :{{$rev['reviewstar']}} <br>
		Comment :{{$rev['review']}}<br>
		Author ;{{$rev['customer']}}<br>
		
		<br><br>
		@endforeach


@endsection