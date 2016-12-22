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
        <p class="message">※印は必須項目です。</p>
        <table class="table">
          <tr>
            <td class="title">ご契約容量<span class="font-red">※</span></td>
            <td>
              <div class="bg-select bg-select-sm-er">
                <select class="input-sm-er">
                  <option value="200GB">200GB</option>
                  <option value="250GB">250GB</option>
                  <option value="500GB">500GB</option>
                  <option value="1TB">1TB</option>
                  <option value="2TB">2TB</option>
                  <option value="3TB">3TB</option>
                  <option value="5TB">5TB</option>
                  <option value="10TB">10TB</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">追加容量</td>
            <td>
              <div class="bg-select bg-select-sm-er">
                <select class="input-sm-er">
                  <option value="なし">なし</option>
                  <option value="1TB">1TB</option>
                  <option value="2TB">2TB</option>
                  <option value="3TB">3TB</option>
                  <option value="4TB">4TB</option>
                  <option value="5TB">5TB</option>
                  <option value="6TB">6TB</option>
                  <option value="7TB">7TB</option>
                  <option value="8TB">8TB</option>
                  <option value="9TB">9TB</option>
                  <option value="10TB">10TB</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">サービス<br />開始希望日<span class="font-red">※</span></td>
            <td>
              <div class="checkbox">
                <input id="ck01" type="checkbox" name="checkbox" value="checkbox">
                <label for="ck01"></label> 希望なし
              </div>
              <div class="checkbox">
                <input id="ck02" type="checkbox" name="checkbox" value="checkbox">
                <label for="ck02"></label> 希望あり
              </div>
              <div class="row">
                <div class="bg-select bg-select-year">
                  <select class="input-year">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                  </select>
                </div>
                <span class="text-date">年</span>
                <div class="bg-select bg-select-date">
                  <select class="input-date">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <span class="text-date">月</span>
                <div class="bg-select bg-select-date">
                  <select class="input-date">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
                <span class="text-date">日</span>
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">お支払い方法<span class="font-red">※</span></td>
            <td>
              <div class="bg-select bg-select-sm">
                <select class="input-sm">
                  <option value="">月払い</option>
                  <option value="">年払い</option>
                </select>
              </div>
              <div class="bg-select bg-select-md">
                <select class="input-md">
                  <option value="">請求書払い（振込手数料はお客様負担）</option>
                  <option value="">クレジットカード払い</option>
                </select>
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">ご契約者名<span class="font-red">※</span></td>
            <td>
              <div class="row">
                <input class="input-md" type="text" name="txt" value="" placeholder="ふりがな"/>
              </div>
              <div class="row">
                <input class="input-md" type="text" name="txt" value="" placeholder="お名前"/>
              </div>
            </td>
          </tr>
          <tr>
            <td class="title">組織名<span class="font-red">※</span></td>
            <td>
              <input class="input-lg" type="text" name="txt" value="" placeholder="株式会社チロロネット" />
            </td>
          </tr>
          <tr>
            <td class="title">部署名<span class="font-red">※</span></td>
            <td>
              <input class="input-lg" type="text" name="txt" value="" placeholder="NS部"/>
            </td>
          </tr>
          <tr>
            <td class="title">役職名<span class="font-red">※</span></td>
            <td>
              <input class="input-lg" type="text" name="txt" value="" placeholder="部長"/>
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
            <td class="title">備考</td>
            <td>
              <input class="input-lg" type="text" name="txt" value=""/>
            </td>
          </tr>
          <tr>
            <td class="title">個人情報保護方針<span class="font-red">※</span></td>
            <td>
              <div class="checkbox">
                弊社ホームページのプライバシーポリシーをご確認いただいた上、
ご同意いただき送信をお願いいたします。<br />
                <input id="ck03" type="checkbox" name="checkbox" value="checkbox">
                <label for="ck03" ></label> 同意する
              </div>
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