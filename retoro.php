<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
      <!-- 大枠 -->
      <div class="is-flex">
        <!-- 左の細いMenu -->
        <div class="layout-left">
          <div class="layout-left__box">
            <img src="./assets/img/menu-text-1.png" alt="" srcset="">
            <img src="./assets/img/menu-text-2.png" alt="" srcset="">
            <img src="./assets/img/menu-text-3.png" alt="" srcset="">
          </div>
        </div>
        <!-- Main Contents -->
        <div class="layout-right">
          <?php
            include_once 'components/area-main.html';
            include_once 'components/area-item-list.php';
            include_once 'components/area-kaitori-group.php';
            include_once 'components/footer.php';
          ?>
        </div>
        <!-- End Main Contents -->
      </div>
    </div>
  </body>
</html>