
<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')

</head>
<body>
	<div class="wrap">
		<header>
			@include('layouts.header')
		</header>
		<main>
			<div class="sectionBlockA">
				<div class="features">
					<div class="item">
						<img src="{{ URL::asset('images/para01.png') }}" alt="">
						<h3>A New Idea</h3>
						<p>
							Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.
						</p>

					</div>

					<div class="item">
						<img src="{{ URL::asset('images/para02.png') }}" alt="">
						<h3>A New Idea</h3>
						<p>
							Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.
						</p>

					</div>

					<div class="item">
						<img src="{{ URL::asset('images/para03.png') }}" alt="">
						<h3>A New Idea</h3>
						<p>
							Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.
						</p>

					</div>

					<div class="item">
						<img src="{{ URL::asset('images/para04.png') }}" alt="">
						<h3>A New Idea</h3>
						<p>
							Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.
						</p>

					</div>
				</div>
			</div>
		</main>
		<footer>
			@include('layouts.footer')
		</footer>
	</div>
</div>
</body>
</html>

