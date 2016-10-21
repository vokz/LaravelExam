
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
				<ul class="features">
					<li class="item">
						<img src="{{ URL::asset('images/para01.png') }}" alt="">
						<h3>A New Idea</h3>
						<p>
							Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.
						</p>
					</li>

					<li class="item">
						<img src="{{ URL::asset('images/para02.png') }}" alt="">
						<h3>Sorted</h3>
						<p>
							Organise your paperwork with minimal input thanks to comprehensive drop-down lists. (You don’t have to add much, but it will help you!) Upload photos or screenshots of documents in seconds. Find it all quickly and easily with little fuss.
						</p>
					</li>

					<li class="item">
						<img src="{{ URL::asset('images/para03.png') }}" alt="">
						<h3>Never Forget</h3>
						<p>
							Getonatop will remind you when you can and should make a change.
						</p>
					</li>

					<li class="item">
						<img src="{{ URL::asset('images/para04.png') }}" alt="">
						<h3>Bank-grade Security</h3>
						<p>
							Choose your own Getonatop login details and passcode.  Your data is uploaded to your free storage facility (not on your mobile device) with 128-bit AES security, transferred with 2048 bit SSL and stored using AES encryption. And rest assured.., your data is never sold on to third parties.
						</p>
					</li>
				</ul>
			</div>
		</main>
		<footer>
			@include('layouts.footer')
		</footer>
	</div>
</div>
</body>
</html>

