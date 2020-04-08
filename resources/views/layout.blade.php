<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/portfolio">Portafolio</a></li>
			<li><a href="/contact">Contacto</a></li>
			<li><a href="/about">About</a></li>
		</ul>
	</nav>
	@yield('contenido')
</body>
</html>