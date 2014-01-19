<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{{ $title }}</title>
	<meta name="viewport" content="width=device-width">
</head>
<body>
	@if(Session::has('message'))
		<p>{{ Session::get('message'); }}</p>
	@endif

	@yield('content')
</body>
</html>
