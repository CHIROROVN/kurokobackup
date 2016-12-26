以下の内容でお申込みがありました。 <br />
内容を確認してください。 <br />
↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓ <br />

―――――――――――――――――――――――――――――― <br />
         ＜  黒子バックアップ - お申込み内容  ＞ <br />
―――――――――――――――――――――――――――――― <br /><br />


―――――――――――――――――――――――――――――― <br />
○お申込み内容  <br />
―――――――――――――――――――――――――――――― <br />
<?php $payMethodArr = array('1'=>'月払い', '2'=>'年払い');
$payCreditArr = array('請求書払い（振込手数料はお客様負担）', '2'=>'クレジットカード払い'); ?>
<table>
    <tr>
        <td>【ご契約容量】</td>
        <td>{{$application['contract_capacity']}}</td>
    </tr>
    <tr>
        <td>【追加容量】</td>
        <td>
        @if(!empty($application['additional_capacity']))
            {{$application['additional_capacity']}}
            @else
              なし
            @endif
        </td>
    </tr>
    <tr>
        <td>【サービス開始希望日】</td>
        <td>
            @if($application['select_date'] == 2)
                @if(!empty($application['start_year']))
                {{$application['start_year']}}年{{$application['start_month']}}月{{$application['start_day']}}日
                @endif
            @else
             希望なし
            @endif
        </td>
    </tr>
    <tr>
        <td>【お支払い方法】</td>
        <td>
            {{@$payMethodArr[$application['payment_method']]}}<br />
            {{@$payCreditArr[$application['payment_credit']]}}
        </td>
    </tr>
    <tr>
        <td valign="top">【ご契約者名（ふりがな）】</td>
        <td>
            {{$application['contract_furigana']}} <br />
            {{$application['contract_name']}}
        </td>
    </tr>
    <tr>
        <td>【組織名】</td>
        <td>{{$application['organization_name']}}</td>
    </tr>
    <tr>
        <td>【部署名】</td>
        <td>{{$application['dept_name']}}</td>
    </tr>
    <tr>
        <td>【役職名】</td>
        <td>{{$application['title']}}</td>
    </tr>
    <tr>
        <td>【ご住所】</td>
        <td>〒{{$application['zipcode']}}<br />{{$application['address']}}</td>
    </tr>
    <tr>
        <td>【連絡先TEL】</td>
        <td>{{$application['tel']}}</td>
    </tr>
    <tr>
        <td>【連絡先FAX】</td>
        <td>{{$application['fax']}}</td>
    </tr>
    <tr>
        <td>【メールアドレス】</td>
        <td>{{$application['email']}}</td>
    </tr>
    <tr>
        <td>【備考】</td>
        <td><?php echo nl2br($application['remark']);?></td>
    </tr>
</table>
<br />

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ <br />
 株式会社チロロネット カスタマーサポート <br />
────────────────────────────── <br />
   〒710-0844  岡山県倉敷市福井125-7 <br />
   TEL: 086-430-3956  /  FAX: 086-430-3957 <br />
   E-Mail: support@chiroro.com <br />
   URL: http://www.chiroro.co.jp/ <br />
────────────────────────────── <br />
 情報セキュリティマネジメントシステム ISO27001:2005 認証取得 <br />
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━ <br />