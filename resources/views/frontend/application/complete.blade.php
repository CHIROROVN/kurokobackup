@extends('frontend.frontend')

@section('content')
<!--Content -->
  <section class="page clear">
    <div class="banner">
      <img src="{{ asset('') }}public/frontend/common/image/banner-content.png" />
    </div>
    <div class="content">
      <div class="container">
        <h1><img src="{{ asset('') }}public/frontend/common/image/title-application.png" /></h1>
        <p class="text-center">The content application sent successfully.</p>
        <div class="bg-submit">
          <input type="button" value="送信" onclick="location.href='{{route('frontend.application.input')}}'" class="bt-submit" name="btnBackHome"/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection