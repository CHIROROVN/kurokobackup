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
        <p class="message">※印は必須項目です。</p>
        <table class="table">
          <tr>
            <td class="title">お名前<span class="font-red">※</span></td>
            <td>
              <div class="row">
                <input class="input-md" type="text" name="txt" value="" placeholder="ふりがな" />
              </div>
              <div class="row">
                <input class="input-md" type="text" name="txt" value="" placeholder="お名前" />
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">御社名<span class="font-red">※</span></td>
            <td>
              <input class="input-lg" type="text" name="txt" value="" placeholder="株式会社チロロネット"/>
            </td>
          </tr>
          <tr>
            <td class="title">部署名<span class="font-red">※</span></td>
            <td>
              <input class="input-lg" type="text" name="txt" value="" placeholder="株式会社チロロネット"/>
            </td>
          </tr>
          <tr>
            <td class="title">ご住所<span class="font-red">※</span></td>
            <td>
              <div class="row">
                <input class="input-sm" type="text" name="txt" value=""  placeholder="〒710-0844"/>
              </div>
              <div class="row">
                <input class="input-lg" type="text" name="txt" value="" placeholder="岡山県倉敷市福井125-7"/>
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">連絡先TEL<span class="font-red">※</span></td>
            <td>
              <input class="input-sm" type="text" name="txt" value=""  placeholder="086-430-3956"/>
            </td>
          </tr>
          <tr>
            <td class="title">連絡先FAX</td>
            <td>
              <input class="input-sm" type="text" name="txt" value="" placeholder="086-423-3957"/>
            </td>
          </tr>
          <tr>
            <td class="title">メールアドレス<span class="font-red">※</span></td>
            <td>
              <input class="input-sm" type="text" name="txt" value="" placeholder="support@chiroro.com"/>
            </td>
          </tr>
          <tr>
            <td class="title">お問い合わせ内容<span class="font-red">※</span></td>
            <td>
              <textarea name="" ></textarea>
            </td>
          </tr>
          
        </table>
        <div class="bg-submit">
          <input type="submit" value="送信" class="bt-submit" name=""/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection