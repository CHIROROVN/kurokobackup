@extends('frontend.frontend')

@section('content')
<!--Content -->
<section class="page clear">
    <div class="banner">
      <img src="{{ asset('') }}public/frontend/common/image/banner-content.png" />
    </div>
    <div class="content">
      <div class="container">
        <h1><img src="{{ asset('') }}public/frontend/common/image/title-contact.png" /></h1>
        <p class="text-center">The content inquiry has been sent successfully.</p>
        <div class="bg-submit">
          <input type="button" value="<< 問い合わせ" class="bt-submit" onclick="location.href='{{route('frontend.contact.input')}}'" name="btnBackHome"/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection