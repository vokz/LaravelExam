@extends('layouts.master')

@section('header')
<div class="privacyHead">
	<div class="wrapInner container-fluid">
		<div class="row">
			@include('layouts.header')
			<div class="bannerArea col-md-12 clearfix">
				<div class="privacyBanner col-md-12 clearfix animated fadeInUpShort go">
					<h2>Privacy Policy</h2>
					<div>
						<img src="{{ URL::asset('images/appstore.png') }}" alt="">
						<img src="{{ URL::asset('images/googleplay.png') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('content')
    <div class="privacyContent animated fadeInDownShort go">
    	<div class="wrapInner">
    		<div>
	    		<h1>1.0 Heading Here</h1>
	    		<p>
	    			Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
	    		</p>
	    		<p>
	    			Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
	    		</p>
    		</div>

    		<div>
    			<h2>1.1 Heading Here</h2>
    			<p>
	    			Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
	    		</p>
	    		<p>
	    			Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
	    		</p>
    		</div>

    		<div>
    			<h2>1.1 Heading Here</h2>
    			<p>
	    			Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
	    		</p>
	    		<p>
	    			Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
	    		</p>
    		</div>
    	</div>
    </div>
@endsection