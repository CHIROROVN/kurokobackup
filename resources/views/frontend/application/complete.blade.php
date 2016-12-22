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
        <p class="text-center">Message</p>
        <div class="bg-submit">
          <input type="submit" value="送信" class="bt-submit" name=""/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection