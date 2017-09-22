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
			<td>Tên bài viết</td>
		</tr>

        @foreach($detail as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td><a href="getDetailNews?id={{$value->id}}">{{$value->title}}</a></td>
		</tr>
		@endforeach

	</table>

	
	
</body>
</html>