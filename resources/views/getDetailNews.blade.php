<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>getCategory</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
    @foreach($detail as $value)
	<h1>{{$value->title}}</h1>
    <span>{{$value->detail}}</span>
    @endforeach

	
	
</body>
</html>