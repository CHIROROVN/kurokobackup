<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title></title>
<meta name="Keywords" content="">
<meta name="Description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">

<link href="{{ asset('') }}public/frontend/common/css/import.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ asset('') }}public/frontend/common/js/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}public/frontend/common/js/function.js"></script>
</head>

<body>
  <!-- Header -->
  <header>
    <div class="container">
      <a class="fl-left logo" href="{{route('frontend.index')}}">
        <img src="{{ asset('') }}public/frontend/common/image/logo.png" />
      </a>
      <nav class="fl-right"> 
        <ul>
          <li id="nav01"><a href="{{route('frontend.function.index')}}" title="機能紹介">機能紹介</a></li>
          <li id="nav02"><a href="{{route('frontend.price.index')}}" title="価格">価格</a></li>
          <li id="nav03"><a href="question.html" title="よくある質問">よくある質問</a></li>
          <li id="nav04"><a href="{{route('frontend.application.input')}}" title="お申し込み">お申し込み</a></li>
          <li id="nav05"><a href="{{route('frontend.contact.input')}}" title="お問い合わせ">お問い合わせ</a></li>
        </ul>
       </nav>
    </div>
  </header>
  <!-- End Header -->