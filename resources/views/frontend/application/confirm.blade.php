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
        <?php $payMethodArr = array('1'=>'月払い', '2'=>'年払い'); $payCreditArr = array('請求書払い（振込手数料はお客様負担）', '2'=>'クレジットカード払い'); ?>
        <table class="table table-confirm">
          <tr>
            <td class="title">ご契約容量</td>
            <td>
              {{$dataInput->contract_capacity}}
            </td>
          </tr>
          <tr>
            <td class="title">追加容量</td>
            <td>
            @if(!empty($dataInput->additional_capacity))
            {{$dataInput->additional_capacity}}
            @else
              なし
            @endif
            </td>
          </tr>
          <tr>
            <td class="title">サービス<br />開始希望日</td>
            <td>
              @if($dataInput->select_date == 2)
                @if(!empty($dataInput->start_year))
                {{$dataInput->start_year}}年{{$dataInput->start_month}}月{{$dataInput->start_day}}日
                @endif
              @else
              希望なし
              @endif
            </td>
          </tr>
          <tr>
            <td class="title">お支払い方法</td>
            <td>
              {{@$payMethodArr[$dataInput->payment_method]}}<br />
              {{@$payCreditArr[$dataInput->payment_credit]}}
            </td>
          </tr>
          <tr>
            <td class="title">ご契約者名</td>
            <td>
              {{$dataInput->contract_furigana}} <br />
              {{$dataInput->contract_name}}
            </td>
          </tr>
          <tr>
            <td class="title">組織名</td>
            <td>
              {{$dataInput->organization_name}}
            </td>
          </tr>
          <tr>
            <td class="title">部署名</td>
            <td>
              {{$dataInput->dept_name}}
            </td>
          </tr>
          <tr>
            <td class="title">役職名</td>
            <td>
              {{$dataInput->title}}
            </td>
          </tr>
          <tr>
            <td class="title">ご住所</td>
            <td>
              〒{{$dataInput->zipcode}}<br />
              {{$dataInput->address}}
            </td>
          </tr>
          <tr>
            <td class="title">連絡先TEL</td>
            <td>
              {{$dataInput->tel}}
            </td>
          </tr>
          <tr>
            <td class="title">連絡先FAX</td>
            <td>
              {{$dataInput->fax}}
            </td>
          </tr>
          <tr>
            <td class="title">メールアドレス</td>
            <td>
              {{$dataInput->email}}
            </td>
          </tr>
          <tr>
            <td class="title">備考</td>
            <td>
              <?php echo nl2br($dataInput->remark);?>
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
          <input type="button" value="送信" class="bt-submit" name="btnSend" onclick="location.href='{{route('frontend.application.sendMail')}}'"/>
          <input type="button" value="戻る" class="bt-submit" onclick="location.href='javascript:history.back()'" name="btnBack"/>
        </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection