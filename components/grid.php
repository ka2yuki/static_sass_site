<?php require_once './funcs/functions.php'; ?>

<?php $img_num=1; 
/*
 ● 列毎に、一つ飛ばしのタイルを表示する。
*/ 
  for ($x = 1; $x <= 4; $x++) { ?><!-- 列 -->
  <div class="
      grid-area 
      columns 
      is-gapless
    ">
    <?php for ($y = 1; $y <= 6; $y++) { ?><!-- 行 -->
      <div class="
          column
          content-center 
          overflow-hidden 
          sankaku-<?php echo odd_is_left_sankaku($y); ?>
        ">
        <!-- 切り替える。空白を, 奇数行と偶数行で。 -->
        <?php if (odd($x) == odd($y) && !odd($x) == !odd($y) ) { ?>
          <!-- 列が：奇数の時、行は：奇数-->
          <!-- 列が：偶数の時、行は：偶数-->
          <img src="assets/img/soft-<?php echo $img_num++; ?>.png" alt="" srcset="">
        <?php }else { ?>
          <!-- 列：奇数、行：偶数 -->
          <!-- 列：偶数、行：奇数 -->
          <div class="">テキスト</div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
<?php } ?>