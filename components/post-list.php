<div class="post-list">
  <!-- タイトル -->
  <h1>
    <?php 
    // title に 文字を指定したい場合。
      $title=null;
      if (!$title) { ?>
        <img src="assets/img/text-powerful.png" alt="" srcset="">
      <?php } else {
        echo $title;
      }
    ?>
  </h1>

  <!-- タイル -->
  <?php for ($i=0; $i < 5; $i++) { ?>
    <div class="tiles">
      <!-- Arrow > -->
      <img class="arrow" src="assets/img/arrow-right.png" alt="">
      <!-- BOX -->
      <div class="is-flex tiles__bax">
        <!-- IMG: post icon -->
        <figure class="" style="width: 30%;">
        <!--
          画像の sizeで 合わせる場合。
            - sizeの上限を決める。max-widthなど。 
            - width, height: 100%;
        -->
          <img style="
            height: 100%;
            width: 100%;
            object-fit: contain;
          " src="assets/img/thumb-1.png" alt="" srcset="">
        </figure>
        <!-- Body: post text -->
        <div style="
          width: 100%;
          height: 100%;
          padding: 11px 54px 11px 19px;
          overflow: hidden;
        ">
          <h3 style="
            font-size: 31px;
            line-height: 1;
          ">
            BUYERS BOX
          </h3>
          <p style="
            margin: 11px 0;
            line-height: 1;
            font-size: 15px;
            font-weight: bold;
          ">
            ーアメカジ＆ブランド古着買取専門店ー
          </p>
          <p>
            dさdsfありがとうございます！dさdsfありがとうございます！
            dさdsfありがとうございます！dさdsfありがとうございます！
          </p>
        </div>
      </div>
    </div>
  <?php } ?>
</div>