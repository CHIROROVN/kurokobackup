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
        {!! Form::open(array('route' => ['frontend.application.input', 'method' => 'post', 'enctype'=>'multipart/form-data', 'accept-charset'=>'utf-8'])) !!}
        <table class="table">
          <tr>
            <td class="title">ご契約容量<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <div class="bg-select bg-select-sm-er">
                <select class="input-sm-er" name="contract_capacity">
                  <option value="200GB" @if(old('contract_capacity') == '200GB') selected="" @endif>200GB</option>
                  <option value="250GB" @if(old('contract_capacity') == '250GB') selected="" @endif>250GB</option>
                  <option value="500GB" @if(old('contract_capacity') == '500GB') selected="" @endif>500GB</option>
                  <option value="1TB" @if(old('contract_capacity') == '1TB') selected="" @endif>1TB</option>
                  <option value="2TB" @if(old('contract_capacity') == '2TB') selected="" @endif>2TB</option>
                  <option value="3TB" @if(old('contract_capacity') == '3TB') selected="" @endif>3TB</option>
                  <option value="5TB" @if(old('contract_capacity') == '5TB') selected="" @endif>5TB</option>
                  <option value="10TB" @if(old('contract_capacity') == '10TB') selected="" @endif>10TB</option>
                </select>
              </div>
              </div>
                @if ($errors->first('contract_capacity'))<span class="error-input">{!! $errors->first('contract_capacity') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">追加容量</td>
            <td>
            <div class="row">
              <div class="bg-select bg-select-sm-er">
                <select class="input-sm-er" name="additional_capacity">
                  <option value="" @if(old('additional_capacity') == '') selected="" @endif>なし</option>
                  <option value="1TB" @if(old('additional_capacity') == '1TB') selected="" @endif>1TB</option>
                  <option value="2TB" @if(old('additional_capacity') == '2TB') selected="" @endif>2TB</option>
                  <option value="3TB" @if(old('additional_capacity') == '3TB') selected="" @endif>3TB</option>
                  <option value="4TB" @if(old('additional_capacity') == '4TB') selected="" @endif>4TB</option>
                  <option value="5TB" @if(old('additional_capacity') == '5TB') selected="" @endif>5TB</option>
                  <option value="6TB" @if(old('additional_capacity') == '6TB') selected="" @endif>6TB</option>
                  <option value="7TB" @if(old('additional_capacity') == '7TB') selected="" @endif>7TB</option>
                  <option value="8TB" @if(old('additional_capacity') == '8TB') selected="" @endif>8TB</option>
                  <option value="9TB" @if(old('additional_capacity') == '9TB') selected="" @endif>9TB</option>
                  <option value="10TB" @if(old('additional_capacity') == '10TB') selected="" @endif>10TB</option>
                </select>
              </div>
              </div>
              @if ($errors->first('additional_capacity'))<span class="error-input">{!! $errors->first('additional_capacity') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">サービス<br />開始希望日<span class="font-red">※</span></td>
            <td>
              <div class="checkbox">
                <input id="none_date" type="radio" name="select_date" value="1" @if(old('select_date') == 1) checked="" @else checked="" @endif>
                <label for="none_date"></label> 希望なし
              </div>
              <div class="checkbox">
                <input id="yes_date" type="radio" name="select_date" value="2"  @if(old('select_date') == 2) checked="" @endif>
                <label for="yes_date"></label> 希望あり
              </div>
              <div class="row">
                <div class="bg-select bg-select-year">
                  <select class="input-year strat_date" id="start_year" name="start_year">
                    <option value="" @if(old('start_year') == '') selected="" @endif>----</option>
                    <option value="{{$yearCurr}}" @if(old('start_year') == $yearCurr) selected="" @endif>{{$yearCurr}}</option>
                    <option value="{{$yearNext}}" @if(old('start_year') == $yearNext) selected="" @endif>{{$yearNext}}</option>
                    <option value="{{$yearLast}}" @if(old('start_year') == $yearLast) selected="" @endif>{{$yearLast}}</option>
                  </select>
                </div>
                <span class="text-date">年</span>
                <div class="bg-select bg-select-date">
                  <select class="input-date strat_date" id="start_month" name="start_month">
                    <option value="" @if(old('start_month') == '') selected="" @endif>--</option>
                    <option value="01" @if(old('start_month') == '01') selected="" @endif>01</option>
                    <option value="02" @if(old('start_month') == '02') selected="" @endif>02</option>
                    <option value="03" @if(old('start_month') == '03') selected="" @endif>03</option>
                    <option value="04" @if(old('start_month') == '04') selected="" @endif>04</option>
                    <option value="05" @if(old('start_month') == '05') selected="" @endif>05</option>
                    <option value="06" @if(old('start_month') == '06') selected="" @endif>06</option>
                    <option value="07" @if(old('start_month') == '07') selected="" @endif>07</option>
                    <option value="08" @if(old('start_month') == '08') selected="" @endif>08</option>
                    <option value="09" @if(old('start_month') == '09') selected="" @endif>09</option>
                    <option value="10" @if(old('start_month') == '10') selected="" @endif>10</option>
                    <option value="11" @if(old('start_month') == '11') selected="" @endif>11</option>
                    <option value="12" @if(old('start_month') == '12') selected="" @endif>12</option>
                  </select>
                </div>
                <span class="text-date">月</span>
                <div class="bg-select bg-select-date">
                  <select class="input-date strat_date" id="start_day" name="start_day">
                    <option value="" @if(old('start_day') == '') selected="" @endif>--</option>
                  </select>
                </div>
                <span class="text-date">日</span>
              </div>
              <div class="row"> 
              <br />
              </div>
              @if ($errors->first('start_year'))<br /><span class="error-input">{!! $errors->first('start_year') !!}</span>@endif
              @if ($errors->first('start_month')) <br /><span class="error-input">{!! $errors->first('start_month') !!}</span> <br />@endif
              @if ($errors->first('start_day'))@if(empty($errors->first('start_month'))) <br /> @endif<span class="error-input">{!! $errors->first('start_day') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">お支払い方法<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <div class="bg-select bg-select-sm">
                <select class="input-sm" name="payment_method">
                  <option value="1">月払い</option>
                  <option value="2">年払い</option>
                </select>
              </div>
              <div class="bg-select bg-select-md">
                <select class="input-md" name="payment_credit">
                  <option value="1" @if(old('payment_credit') == 1) selected="" @endif>請求書払い（振込手数料はお客様負担）</option>
                  <option value="2" @if(old('payment_credit') == 2) selected="" @endif>クレジットカード払い</option>
                </select>
              </div>
              </div>
              @if ($errors->first('payment_credit'))<span class="error-input">{!! $errors->first('payment_credit') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">ご契約者名<span class="font-red">※</span></td>
            <td>
              <div class="row">
                <input class="input-md" type="text" name="contract_furigana" value="{{old('contract_furigana')}}" placeholder="ふりがな"/>
              </div>
              @if ($errors->first('contract_furigana'))<span class="error-input">{!! $errors->first('contract_furigana') !!}</span>@endif
              <div class="row">
                <input class="input-md" type="text" name="contract_name" value="{{old('contract_name')}}" placeholder="お名前"/>
              </div>
              @if ($errors->first('contract_name'))<span class="error-input">{!! $errors->first('contract_name') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">組織名<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <input class="input-lg" type="text" name="organization_name" value="{{old('organization_name')}}" placeholder="株式会社チロロネット" />
              </div>
              @if ($errors->first('organization_name'))<span class="error-input">{!! $errors->first('organization_name') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">部署名<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <input class="input-lg" type="text" name="dept_name" value="{{old('dept_name')}}" placeholder="NS部"/>
              </div>
              @if ($errors->first('dept_name'))<span class="error-input">{!! $errors->first('dept_name') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">役職名<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <input class="input-lg" type="text" name="title" value="{{old('title')}}" placeholder="部長"/>
              </div>
               @if ($errors->first('title'))<span class="error-input">{!! $errors->first('title') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">ご住所<span class="font-red">※</span></td>
            <td>
              <div class="row">
                <input class="input-sm" type="text" name="zipcode" value="{{old('zipcode')}}"  placeholder="〒710-0844"/>
              </div>
              @if ($errors->first('zipcode'))<span class="error-input">{!! $errors->first('zipcode') !!}</span>@endif
              <div class="row">
                <input class="input-lg" type="text" name="address" value="{{old('address')}}" placeholder="岡山県倉敷市福井125-7"/>
              </div>
              @if ($errors->first('address'))<span class="error-input">{!! $errors->first('address') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">連絡先TEL<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <input class="input-sm" type="text" name="tel" value="{{old('tel')}}"  placeholder="086-430-3956"/>
              </div>
              @if ($errors->first('tel'))<span class="error-input">{!! $errors->first('tel') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">連絡先FAX</td>
            <td>
            <div class="row">
              <input class="input-sm" type="text" name="fax" value="{{old('fax')}}" placeholder="086-423-3957"/>
              </div>
              @if ($errors->first('fax'))<span class="error-input">{!! $errors->first('fax') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">メールアドレス<span class="font-red">※</span></td>
            <td>
            <div class="row">
              <input class="input-sm" type="text" name="email" value="{{old('email')}}" placeholder="support@chiroro.com"/>
              </div>
              @if ($errors->first('email'))<span class="error-input">{!! $errors->first('email') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">備考</td>
            <td>
            <div class="row">
              <input class="input-lg" type="text" name="remark" value="{{old('remark')}}"/>
              </div>
              @if ($errors->first('remark'))<span class="error-input">{!! $errors->first('remark') !!}</span>@endif
            </td>
          </tr>
          <tr>
            <td class="title">個人情報保護方針<span class="font-red">※</span></td>
            <td>
              <div class="checkbox">
                弊社ホームページのプライバシーポリシーをご確認いただいた上、
ご同意いただき送信をお願いいたします。<br />
                <input id="policy_check" type="checkbox" value="同意する" name="policy_check" @if(old('policy_check')) checked="" @endif">
                <label for="policy_check" ></label> 同意する
              </div>
              @if ($errors->first('policy_check'))<span class="error-input">{!! $errors->first('policy_check') !!}</span>@endif
            </td>
          </tr>
        </table>
        <div class="bg-submit">
          <input type="submit" value="送信" id="btnSubmit" class="bt-submit" name="btnSubmit"/>
        </div>
      {!! Form::close() !!}
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->

<script  type="text/javascript">
$(document).ready(function(){
      var date = new Date();
      var year = date.getFullYear();
      var month    = date.getMonth()+1;
      var day = format2Digit(date.getDate());
      var totaldays = new Date(year,month,1,-1).getDate();

      var opthtml = "<option value=''>--</option>";

      var oldDay = "{{old('start_day')}}";
      for(var i=1; i<=totaldays; i++){
        opthtml += '<option value="' + format2Digit(i) + '">'+ format2Digit(i) +'</option>';
      }
      $('#start_day').html(opthtml);
      $('#start_day').find('option').each(function(){
        if($(this).val()==oldDay){
            $('#start_day option[value="'+oldDay+'"]').prop('selected',true);
        }
      });

    if($('#none_date').is(':checked')){
       $('.strat_date').attr('disabled', true);
    }else{
       $('.strat_date').attr('disabled', false);
    }

    $('#none_date').click(function(event) {
      $('.strat_date').attr('disabled', true);

      $('#start_year option[value=""]').prop('selected',true);
      $('#start_month option[value=""]').prop('selected',true);
      $('#start_day option[value=""]').prop('selected',true);
    });

    $('#yes_date').click(function(event) {
      $('.strat_date').attr('disabled', false);

      var date = new Date();
      var year = date.getFullYear();
      var month    = date.getMonth()+1;
      var day = format2Digit(date.getDate());
      var totaldays = new Date(year,month,1,-1).getDate();

      var opthtml = "<option value=''>--</option>";
      for(var i=1; i<=totaldays; i++){
        opthtml += '<option value="' + format2Digit(i) + '">'+ format2Digit(i) +'</option>';
      }
      $('#start_day').html(opthtml);
      $('#start_day').find('option').each(function(){
        if($(this).val()==oldDay){
            $('#start_day option[value="'+oldDay+'"]').prop('selected',true);
        }
      });

      if(year == ''){
        $('#start_year option[value=""]').prop('selected',true);
      }else{
        $('#start_year option[value="'+year+'"]').prop('selected',true);
      }

      if(month == ''){
        $('#start_month option[value=""]').prop('selected',true);
      }else{
        $('#start_month option[value="'+month+'"]').prop('selected',true);
      }

      if(day == ''){
        $('#start_day option[value=""]').prop('selected',true);
      }else{
        $('#start_day option[value="'+day+'"]').prop('selected',true);
      }

    });

    // if($('#policy_check').is(':checked')){
    //    $('#btnSubmit').attr('disabled', false);
    // }else{
    //    $('#btnSubmit').attr('disabled', true);
    // }
});

// $("#policy_check").change(function() {
//     if(this.checked) {
//         $('#btnSubmit').attr('disabled', false);
//     }else{
//       $('#btnSubmit').attr('disabled', true);
//     }
// });

</script>

  <script type="text/javascript">
    var date = new Date();
    var month    = date.getMonth()+1;
    var day = format2Digit(date.getDate());

    $("#start_year").change(function(event) {
      if($(this).val() == ''){
        $('#start_month option[value=""]').prop('selected',true);
        $('#start_day option[value=""]').prop('selected',true);
      }else{
        $('#start_month option[value="'+month+'"]').prop('selected',true);
        $('#start_day option[value="'+day+'"]').prop('selected',true);
      }
    });

    $("#start_month").change(function(event) {
      var cyear = $('#start_year').val();
      var cmonth = $(this).val();
      var totaldays = new Date(cyear,cmonth,1,-1).getDate();

      var opthtml = "<option value=''>--</option>";
      for(var i=1; i<=totaldays; i++){
        opthtml += '<option value="' + format2Digit(i) + '">'+ format2Digit(i) +'</option>';
      }
      $('#start_day').html(opthtml);

      if(cmonth == ''){
        $('#start_day option[value=""]').prop('selected',true);
      }else{
        $('#start_day option[value="'+day+'"]').prop('selected',true);
      }
    });

  function format2Digit(num)
  {
    if(num < 10) { return '0'+num }
    else return num;
  }

</script>
@endsection