@extends('frontend.frontend')

@section('content')
<!--Content -->
    <section id="page">
		<div class="container">
			<div class="row content content--list text-center">
				<h1 class="mar-bottom30" style="font-size:70px;font-weight: bold;">404</h1>
				<h1><p class="mar-bottom30">COMPONENT NOT FOUND</p></h1>
				<h1>OH MY GOSH! YOU FOUND IT!!!</h1>
				<h2><p>Looks like the page you're trying to visit doesn't exit.</p></h2>
				<h2><p class="mar-bottom30">Please check url and try your luck again.</p></h2>
				<div class="bg-submit">
				  <input type="button" value="ホーム" onclick="location.href='{{route('frontend.index')}}'" class="bt-submit" name="btnBackHome"/>
				</div>
			</div>
		</div>
    </section>
  <!-- End content -->
<!-- End content -->
@endsection