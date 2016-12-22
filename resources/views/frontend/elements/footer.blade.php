  <!-- footer -->
  <footer>
    <a href="" id="ptop">
      <img src="{{ asset('') }}public/frontend/common/image/bt-top.png" alt="" />
    </a>
    <div class="footer-top">
      <a href="application.html" title="">
        <img src="{{ asset('') }}public/frontend/common/image/bt-bottom.png" alt="" />
      </a>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="info clear">
          <div class="logo fl-left">
            <a href="{{route('frontend.index')}}" title="">
              <img src="{{ asset('') }}public/frontend/common/image/logo-footer.png" alt="" />
            </a>
          </div>
          <div class="menu fl-left">
            <a href="function.html" title="機能紹介">● 機能紹介</a>
            <a href="price.html" title="価格">● 価格</a>
            <a href="question.html" title="よくある質問">● よくある質問</a>
            <a href="{{route('frontend.application.input')}}" title="お申し込み">● お申し込み</a>
            <a href="{{route('frontend.contact.input')}}" title="お問い合わせ">● お問い合わせ</a>
            <a href="chiroro.co.jp" title="運営会社">● 運営会社</a>
            <a href="" title="プライバシーポリシー">● プライバシーポリシー</a>
          </div>
        </div>
        <div class="coppy">
          Copyright © {{date('Y')}} KUROKO BACKUP. All Rights Reserved.
        </div>
      </div>
    </div>
    <div class="img-chiroro">
      <img src="{{ asset('') }}public/frontend/common/image/logo-chiroro.png" alt="" />
    </div>
  </footer>
  <!-- End footer -->

</body>
</html>