@extends('frontend.frontend')

@section('content')
{!! Form::open(array('route' => 'frontend.contact.input', 'enctype'=>'multipart/form-data')) !!}
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
                @if ( isset($contact) )
                <input class="input-md" type="text" name="name_kana" value="{{ $contact['name_kana'] }}" placeholder="ふりがな" />
                @else
                <input class="input-md" type="text" name="name_kana" value="{{ old('name_kana') }}" placeholder="ふりがな" />
                @endif
              </div>
              @if ($errors->first('name_kana'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('name_kana') !!}</p>
              </div>
              @endif
              <div class="row">
                @if ( isset($contact) )
                <input class="input-md" type="text" name="name" value="{{ $contact['name'] }}" placeholder="お名前" />
                @else
                <input class="input-md" type="text" name="name" value="{{ old('name') }}" placeholder="お名前" />
                @endif
              </div>
              @if ($errors->first('name'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('name') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">御社名<span class="font-red">※</span></td>
            <td>
              @if ( isset($contact) )
              <input class="input-lg" type="text" name="company_name" value="{{ $contact['company_name'] }}" placeholder="株式会社チロロネット"/>
              @else
              <input class="input-lg" type="text" name="company_name" value="{{ old('company_name') }}" placeholder="株式会社チロロネット"/>
              @endif
              @if ($errors->first('company_name'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('company_name') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">部署名<span class="font-red">※</span></td>
            <td>
              @if ( isset($contact) )
              <input class="input-lg" type="text" name="department_name" value="{{ $contact['department_name'] }}" placeholder="株式会社チロロネット"/>
              @else
              <input class="input-lg" type="text" name="department_name" value="{{ old('department_name') }}" placeholder="株式会社チロロネット"/>
              @endif
              @if ($errors->first('department_name'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('department_name') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">ご住所<span class="font-red">※</span></td>
            <td>
              <div class="row">
                @if ( isset($contact) )
                <input class="input-sm" type="text" name="zipcode" value="{{ $contact['zipcode'] }}"  placeholder="〒710-0844"/>
                @else
                <input class="input-sm" type="text" name="zipcode" value="{{ old('zipcode') }}"  placeholder="〒710-0844"/>
                @endif
              </div>
              @if ($errors->first('zipcode'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('zipcode') !!}</p>
              </div>
              @endif
              <div class="row">
                @if ( isset($contact) )
                <input class="input-lg" type="text" name="address" value="{{ $contact['address'] }}" placeholder="岡山県倉敷市福井125-7"/>
                @else
                <input class="input-lg" type="text" name="address" value="{{ old('address') }}" placeholder="岡山県倉敷市福井125-7"/>
                @endif
              </div>
              @if ($errors->first('address'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('address') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">連絡先TEL<span class="font-red">※</span></td>
            <td>
              @if ( isset($contact) )
              <input class="input-sm" type="text" name="tel" value="{{ $contact['tel'] }}"  placeholder="086-430-3956"/>
              @else
              <input class="input-sm" type="text" name="tel" value="{{ old('tel') }}"  placeholder="086-430-3956"/>
              @endif
              @if ($errors->first('tel'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('tel') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">連絡先FAX</td>
            <td>
              @if ( isset($contact) )
              <input class="input-sm" type="text" name="fax" value="{{ $contact['fax'] }}" placeholder="086-423-3957"/>
              @else
              <input class="input-sm" type="text" name="fax" value="{{ old('fax') }}" placeholder="086-423-3957"/>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">メールアドレス<span class="font-red">※</span></td>
            <td>
              @if ( isset($contact) )
              <input class="input-sm" type="text" name="email" value="{{ $contact['email'] }}" placeholder="support@chiroro.com"/>
              @else
              <input class="input-sm" type="text" name="email" value="{{ old('email') }}" placeholder="support@chiroro.com"/>
              @endif
              @if ($errors->first('email'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('email') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">お問い合わせ内容<span class="font-red">※</span></td>
            <td>
              @if ( isset($contact) )
              <textarea name="content" >{!! $contact['content'] !!}</textarea>
              @else
              <textarea name="content" >{!! old('content') !!}</textarea>
              @endif
              @if ($errors->first('content'))
              <div class="row">
                <p class="message validation-input">{!! $errors->first('content') !!}</p>
              </div>
              @endif
            </td>
          </tr>
          
        </table>
        <div class="bg-submit">
          <input type="submit" value="送信" class="bt-submit" name="save"/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
</form>
@endsection