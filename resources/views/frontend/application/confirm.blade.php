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
        <table class="table table-confirm">
          <tr>
            <td class="title">ご契約容量</td>
            <td>
              200GB
            </td>
          </tr>
          <tr>
            <td class="title">追加容量</td>
            <td>
              なし
            </td>
          </tr>
          <tr>
            <td class="title">サービス<br />開始希望日</td>
            <td>
              希望なし<br />
              12年25月2016
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">お支払い方法</td>
            <td>
              月払い<br />
              請求書払い（振込手数料はお客様負担）
            </td>
          </tr>
          <tr>
            <td class="title">ご契約者名</td>
            <td>
              ふりがな <br />
              お名前
            </td>
          </tr>
          <tr>
            <td class="title">組織名</td>
            <td>
              株式会社チロロネット
            </td>
          </tr>
          <tr>
            <td class="title">部署名</td>
            <td>
              NS部
            </td>
          </tr>
          <tr>
            <td class="title">役職名</td>
            <td>
              部長
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
            <td class="title">備考</td>
            <td>
              備考
            </td>
          </tr>
          <tr>
            <td class="title">個人情報保護方針</td>
            <td>
              同意する
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