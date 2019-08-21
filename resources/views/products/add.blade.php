<!DOCTYPE html>
<html>
<head>
	<title>Add Products</title>
</head>
<body>

	<h2>Create Products</h2>

	<a href="{{route('products.index')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	{{csrf_field()}}
	<table border="0">
		<tr>
			<td>Products Name :</td>
			<td><input type="text" name="pname"></td>
		</tr>
		<tr>
			<td>Products Quantity :</td>
			<td><input type="text" name="pquantity"></td>
		</tr>
		<tr>
			<td>Products Price :</td>
			<td><input type="text" name="pprice"></td>
		</tr>
		
		<tr>
			<td>Products Brand :</td>
			<td><input type="text" name="pbrand"></td>
		</tr>
		
		
		<tr>
			<td>Products Catagory :</td>
				<td>
						<select class="form-control selectric" name="catagory">
                        
                        <option value="laptop">laptop</option>
                        <option value="ram">Ram</option>
                        <option value="casing">casing</option>
                        <option value="storage">storage</option>
                        <option value="monitor">monitor</option>
                        <option value="graphics">graphics</option>
                        
                      </select>
				</td>
		</tr>
		<tr>
			<td>Manufacture :</td>
			<td><textarea name="menufac" rows="10" cols="30">Menufacture Review</textarea></td>
		</tr>
		
		
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Add_Employee"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>