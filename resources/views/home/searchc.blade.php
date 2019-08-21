@extends('layout.admin')

@section('content')

	

<h3>Search Results</h3>

<input type="text" class="form-controller" id="search" name="search"></input>

<table class="table table-bordered table-hover">
<thead>
<tr>
<th>ID</th>
<th>Product Name</th>
<th>Brand</th>
<th>Price</th>
<th>Catagories</th>

</tr>
</thead>
<tbody>
</tbody>
</table>

<script type="text/javascript">
$('#search').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('search')}}',
data:{'search':$value},
success:function(data){
$('tbody').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
@endsection