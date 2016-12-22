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
        <table class="table table-confirm">
          <tr>
            <td class="title">お名前</td>
            <td>
              ふりがな<br />
              お名前
            </td>
          </tr>
          <tr>
            <td class="title">御社名</td>
            <td>
              株式会社チロロネット
            </td>
          </tr>
          <tr>
            <td class="title">部署名</td>
            <td>
              株式会社チロロネット
            </td>
          </tr>
          <tr>
            <td class="title">ご住所</td>
            <td>
              〒710-0844<br />
              岡山県倉敷市福井125-7
            </td>
          </tr>
          <tr>
            <td class="title">連絡先TEL</td>
            <td>
              086-430-3956
            </td>
          </tr>
          <tr>
            <td class="title">連絡先FAX</td>
            <td>
              086-423-3957
            </td>
          </tr>
          <tr>
            <td class="title">メールアドレス</td>
            <td>
              support@chiroro.com
            </td>
          </tr>
          <tr>
            <td class="title">お問い合わせ内容</td>
            <td>
              test
            </td>
          </tr>
          
        </table>
        <div class="bg-submit">
          <input type="submit" value="送信" class="bt-submit" name=""/>
          <input type="submit" value="送信2" class="bt-submit" name=""/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection