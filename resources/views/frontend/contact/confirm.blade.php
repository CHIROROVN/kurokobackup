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
              {{ $contact['name_kana'] }}<br />
              {{ $contact['name'] }}
            </td>
          </tr>
          <tr>
            <td class="title">御社名</td>
            <td>
              {{ $contact['company_name'] }}
            </td>
          </tr>
          <tr>
            <td class="title">部署名</td>
            <td>
              {{ $contact['department_name'] }}
            </td>
          </tr>
          <tr>
            <td class="title">ご住所</td>
            <td>
              {{ $contact['zipcode'] }}<br />
              {{ $contact['address'] }}
            </td>
          </tr>
          <tr>
            <td class="title">連絡先TEL</td>
            <td>
              {{ $contact['tel'] }}
            </td>
          </tr>
          <tr>
            <td class="title">連絡先FAX</td>
            <td>
              {{ $contact['fax'] }}
            </td>
          </tr>
          <tr>
            <td class="title">メールアドレス</td>
            <td>
              {{ $contact['email'] }}
            </td>
          </tr>
          <tr>
            <td class="title">お問い合わせ内容</td>
            <td>
              {!! nl2br($contact['content']) !!}
            </td>
          </tr>
          
        </table>
        <div class="bg-submit">
          <input type="button" value="送信" class="bt-submit" name="send" onClick="location.href='{{ route('frontend.contact.complete') }}'"/>
          <input type="button" value="戻る" class="bt-submit" name="back" onClick="location.href='{{ route('frontend.contact.input') }}'"/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->

@endsection