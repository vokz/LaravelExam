
<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')

</head>
<body>
	<div class="wrap">
		<header>
			@yield('header')
		</header>
		<main>
			@yield('content')
		</main>
		<footer>
			@include('layouts.footer')
		</footer>
	</div>
</div>
</body>
</html>

