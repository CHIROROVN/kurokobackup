@extends('frontend.frontend')

@section('content')
<!--Content -->
  <section class="page clear">
    <div class="banner">
      <img src="{{ asset('') }}public/frontend/common/image/banner-content.png" />
    </div>
    <div class="content">
      <div class="container">
        <h1><img src="{{ asset('') }}public/frontend/common/image/title-question.png" /></h1>
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            バックアップは何台まで対象ですか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              バックアップ台数は無制限です
            </div>
          </div>
        </div>
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            バックアップは何世代まで取得可能ですか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              世代は無制限です。
            </div>
          </div>
        </div>
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            対応OSを教えてください。
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              対応しているOSは以下の通りです。<br />
              WindowsPC (Windows XP Pro SP2以降　/　Windows Vista　/　Windows 7　/
                    　Windows 8 or 8.1　/　Windows 10)<br />
              MacPC (OSX 10.8以降)<br />
              モバイル （iOS, Android）<br />
              Windowsサーバー （Windows Server 2003以降）<br />
              Linuxサーバー (Redhat Enterprise Linux 4以降　/　CentOS 4.x以降　/　Ubuntu)<br />
              仮想化ホスト (VMware ESXi, Hyper-V, Virtuozzo)<br />
              アプリケーション (Microsoft Exchange 2003 SP2以降　/　Microsoft SQL Server 2005〜)
            </div>
          </div>
        </div>
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            Macでも使用可能ですか？
          </div>
          <div class="row-ans  clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              はい。Macでもご利用が可能です。
            </div>
          </div>
        </div>
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            iPad、iPhone、Androidからのアクセスは可能ですか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              ブラウザ経由であればすべて可能です。
            </div>
          </div>
        </div>
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            サイト内のロゴを、自社のロゴに替えたいのですが可能なのでしょうか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              変更ができません。
            </div>
          </div>
        </div>
        
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            ログインパスワードを変更でますか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              ユーザー設定画面より新しいパスワードに変更することが可能です。
            </div>
          </div>
        </div>
        
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            サービス利用中に、ディスク容量を追加したい場合の手続きはどのようにしたらよいでしょうか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              黒子バックアップ変更申込書にご記入いただき、FAXまたは郵送にてご提出ください。
            </div>
          </div>
        </div>
        
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            サービスを解約したいのですが。
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              黒子バックアップ解約申込書にご記入いただき、解約月の20日までに郵送でお送りください。
FAXでは受理いたしません。
            </div>
          </div>
        </div>
        
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            サービス利用中に、支払い方法を変更したい場合の手続きはどのようにしたらよいでしょうか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              お支払い方法変更申込書にご記入いただき、郵送またはFAXにてお送りください。
            </div>
          </div>
        </div>
        
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            利用できるクレジットカードの種類を教えてください。
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              ご利用いただけるクレジットカードは以下の通りです。<br />
JCB・VISA・MasterCard・American Express
            </div>
          </div>
        </div>
        
        <div class="box-ques">
          <div class="row-ques">
            <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
            最低契約期間はありますか？
          </div>
          <div class="row-ans clear">
            <div class="fl-left">
              <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
            </div>
            <div class="fl-left text-ans">
              黒子バックアップの最低契約期間は、課金開始日より3ヶ月間です。
            </div>
          </div>
          
          <div class="box-ques">
            <div class="row-ques">
              <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
              データセンターはどこですか？サーバーはどこにありますか？
            </div>
            <div class="row-ans clear">
              <div class="fl-left">
                <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
              </div>
              <div class="fl-left text-ans">
                データセンター（サーバー）は、岡山県内にあります。
              </div>
            </div>
          </div>
          <div class="box-ques">
            <div class="row-ques">
              <img src="{{ asset('') }}public/frontend/common/image/icon-q.png" />
              最低契約期間はありますか？
            </div>
            <div class="row-ans clear">
              <div class="fl-left">
                <img src="{{ asset('') }}public/frontend/common/image/icon-a.png" />
              </div>
              <div class="fl-left text-ans">
                黒子バックアップの最低契約期間は、課金開始日より3ヶ月間です。
              </div>
            </div>
          </div>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
@endsection