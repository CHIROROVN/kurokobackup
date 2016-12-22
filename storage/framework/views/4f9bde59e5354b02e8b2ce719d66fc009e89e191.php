<?php $__env->startSection('content'); ?>
<!--Content -->
  <section class="page clear">
    <div class="banner">
      <img src="<?php echo e(asset('')); ?>public/frontend/common/image/banner-content.png" />
    </div>
    <div class="content">
      <div class="container">
        <h1><img src="<?php echo e(asset('')); ?>public/frontend/common/image/title-price.png" /></h1>
        <table class="table-price table-price-big">
          <tr>
            <td colspan="9"><h2>黒子バックアップサービス 基本料金</h2></td>
          </tr>
          <tr>
            <td class="title">ストレージ容量</td>
            <td class="title">１００GB</td>
            <td class="title">250GB</td>
            <td class="title">500GB</td>
            <td class="title">1TB<br />（1,024GB）</td>
            <td class="title">2TB<br />（2,048GB）</td>
            <td class="title">3TB<br />（3,072GB）</td>
            <td class="title">5TB<br />（5,120GB）</td>
            <td class="title">10TB<br />（10,240GB）</td>
          </tr>
          <tr>
            <td class="title">初期設定費</td>
            <td>0円</td>
            <td>0円</td>
            <td>0円</td>
            <td>0円</td>
            <td>0円</td>
            <td>0円</td>
            <td>0円</td>
            <td>0円</td>
          </tr>
          <tr>
            <td class="title">月次利用料</td>
            <td>2,000円</td>
            <td>5,000円</td>
            <td>10,000円</td>
            <td>20,000円</td>
            <td>40,000円</td>
            <td>60,000円</td>
            <td>100,000円</td>
            <td>200,000円</td>
          </tr>
          <tr>
            <td class="title">年次利用料</td>
            <td>22,000円</td>
            <td>55,000円</td>
            <td>110,000円</td>
            <td>220,000円</td>
            <td>440,000円</td>
            <td>660,000円</td>
            <td>1,100,000円</td>
            <td>2,200,000円</td>
          </tr>
        </table>
        
        <table class="table-price table-price-small">
          <tr>
            <td colspan="2"><h2>追加ストレージ料金</h2>(10TBを超えてご利用の場合)</td>
          </tr>
          <tr>
            <td class="title">ストレージ容量</td>
            <td class="title">＋1TB追加毎<br />（＋1,024GB）</td>
          </tr>
          <tr>
            <td class="title">月次利用料</td>
            <td>10,000円</td>
          </tr>
          <tr>
            <td class="title">年次利用料</td>
            <td>110,000円</td>
          </tr>
        </table>
        <p class="text-price">
          ※上記の他に、消費税が必要です。<br />
          ※サービス利用開始月は、利用料が無料です。翌月1日からの課金開始です。<br />
          ※最低利用期間は、サービス利用開始日の翌月より6ヶ月間です。ストレージ容量減少となるプラン変更も承りません。<br />
          ※【月払いの場合】お申込時に、初期設定費＋月次利用料1ヶ月分を前払いいただきます。以降、2ヶ月目より、毎月のご請求となります。<br />
          ※【年払いの場合】お申込時に、初期設定費＋年次利用料を前払いいただきます。以降、翌年より毎年のご請求となります。
        </p>
      </div>
    </div>
  </section>
  <!-- End content -->
<!-- End content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>