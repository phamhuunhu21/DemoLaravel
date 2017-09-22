<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>getCategory</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<h1>Danh Sách Thể Loại</h1>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Category Name</td>
		</tr>

		@foreach($category as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td><a href="getDetailCategory?id={{$value->id}}">{{$value->CategoRyName}}</a></td>
		</tr>
		@endforeach

	</table>

	
	
</body>
</html>