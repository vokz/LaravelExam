
@extends('layouts.master')

@section('header')
<div class="indexHead">
	<div class="wrapInner container-fluid">
		<div class="row">
			@include('layouts.header')
			<div class="bannerArea col-md-12 clearfix">
				<div class="phones">
					<p class="animated fadeInRightShort go dark"><img src="{{ URL::asset('images/phone-dark.png') }}" alt=""></p>
					<p class="animated fadeInRightShort go light"><img src="{{ URL::asset('images/phone-light.png') }}" alt=""></p>
				</div>

				<div class="desc animated fadeInDownShort go">
					<h2>Your Personal Document Manager</h2>

					<p>
						Getonatop. Developed by people who are bored by personal and household paperwork. Who hate spending time filing bills, policies or any other documents. Who would rather be out in the sun (or rain...) having good times with friends and family...
					
					</p>
					<br><p>...People who want to know they have taken care of EVERYTHING!</p>
					
					<div>
						<ul class="headBtn">
							<li><a href="#"><img src="{{ URL::asset('images/watch.png') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/appstore.png') }}" alt=""></a></li>
							<li><a href="#"><img src="{{ URL::asset('images/googleplay.png') }}" alt=""></a></li>
						</ul>
					</div>
					
					<p class="minitext">Putting your paperwork in it's place!</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('content')
    <div class="sectionBlockA">
		<ul class="features">
			<li class="featureItems">
				<img src="{{ URL::asset('images/para01.png') }}" alt="">
				<h3>A New Idea</h3>
				<p>
					Getonatop apps give you centralised, shareable mobile storage with no clutter and no adverts, just fresh and intuitive screens that are suitable for all age groups. So simple, so fast, so versatile, so you can access everything that matters anytime, anywhere.
				</p>
			</li>

			<li class="featureItems">
				<img src="{{ URL::asset('images/para02.png') }}" alt="">
				<h3>Sorted</h3>
				<p>
					Organise your paperwork with minimal input thanks to comprehensive drop-down lists. (You don’t have to add much, but it will help you!) Upload photos or screenshots of documents in seconds. Find it all quickly and easily with little fuss.
				</p>
			</li>

			<li class="featureItems">
				<img src="{{ URL::asset('images/para03.png') }}" alt="">
				<h3>Never Forget</h3>
				<p>
					Getonatop will remind you when you can and should make a change.
				</p>
			</li>

			<li class="featureItems">
				<img src="{{ URL::asset('images/para04.png') }}" alt="">
				<h3>Bank-grade Security</h3>
				<p>
					Choose your own Getonatop login details and passcode.  Your data is uploaded to your free storage facility (not on your mobile device) with 128-bit AES security, transferred with 2048 bit SSL and stored using AES encryption. And rest assured.., your data is never sold on to third parties.
				</p>
			</li>
		</ul>
	</div>

	<div class="sectionBlockB">
		<div class="vidContainer">
			<iframe src="https://www.youtube.com/embed/9-XIi46lusI" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="sectionBlockC">
		<img src="{{ URL::asset('images/star.png') }}" alt="">
		<h2>Features coming soon</h2>
		<p>
			Getonatop apps are getting even more great features very soon.  We are going to tell you when they are ready.., but keeping checking anyway. We know you are going to love them too!
		</p>
	</div>

	<div class="sectionBlockD">
		<h2>Ready to get started?</h2>
		<p>Download the Get Onatop app today</p>
		<div>
			<img src="{{ URL::asset('images/appstorefoot.png') }}" alt="">
			<img src="{{ URL::asset('images/googleplayfoot.png') }}" alt="">
		</div>
	</div>

	<div class="sectionBlockE">
		<img src="{{ URL::asset('images/cloud.png') }}" alt="">
		<p>
			If you would like to know more about Getonatop and why we have put it together for you, if you are interested in helping us grow, or if you want to invest, then please get in touch: <a href="#">info@getonatop.com</a>.   We would love to hear from you!
		</p>
	</div>
@endsection