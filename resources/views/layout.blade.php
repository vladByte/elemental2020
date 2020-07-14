<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Elemental')</title>
	@yield('style-links')
</head>
<body>
	@include('pieces/navbar')
	@yield('content')
	@yield('footer')
</body>
</html>