@extends('layout.customer')

@section('content')


	<table class="table table-bordered table-hover">
		<tr>
			<td>ID</td>
			<td>Customer</td>
			<td>Quantity</td>
			<td>Amount</td>
		</tr>
		@foreach($std as $value)
		<tr>
			<td>{{$value['id']}}</td>
			<td>{{$value['customer']}}</td>
			<td>{{$value['product_quantity']}}</td>
			<td>{{$value['amount']}}</td>
		</tr>
		@endforeach

</table>

@endsection