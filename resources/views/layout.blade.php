<!DOCTYPE html>
<html>

<head>

    <title>@yield('title', 'Never!')</title>

</head>

<body>

	<ul>
		<li><a href="/">Home</a></li>
        <li><a href="/about">About us</a></li>
        <li><a href="/contact">Contact us</a></li>
    </ul>

	@yield('content')
    
</body>

</html>