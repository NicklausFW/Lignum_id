
<html>
<head>
	<title>Laporan Products</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>

		<h5>Laporan Products</h4>
		
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>id</th>
				<th>Product_name</th>
				<th>Price</th>
				<th>Promo</th>
				<th>Description</th>
				<th>Image</th>
			</tr>
		</thead>
		<tbody>
			@php @endphp

			@foreach($products as $c)
			<tr>
				<td>{{$c->id }}</td>
				<td>{{$c->product_name}}</td>
				<td>{{$c->price}}</td>
				<td>{{$c->promo}}</td>
				<td>{{$c->description}}</td>
                <td><img src=" {{base_path()}} public/storage/products/ {!!$c->image!!}" style="width:150px;"></img></td>
			</tr>
          
			@endforeach

         
		</tbody>
	</table>

</body>
</html>