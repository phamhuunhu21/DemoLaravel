<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POST FORM</title>
</head>
<body>
	<form action="{!! route('postForm') !!}" method="POST">
   	 	<input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
    	<input type="text" name="txtName" />
    	<input type="submit" />
	</form>
</body>
</html>