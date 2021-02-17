<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <?php 
      
    ?>
      <!-- 大枠 -->
      <div class="is-flex">
        <!-- 左の細いMenu -->
        <div class="layout-left has-background-danger">
          left Menu
        </div>
        <!-- Main Contents -->
        <div class="layout-right has-background-primary-light">
          <?php 
            include_once 'components/area-main.html';
            include_once 'components/area-item-list.php';
            include_once 'components/area-kaitori-group.php';
            include_once 'components/footer.php';
          ?>
        </div>
        <!-- end Main Contents -->
      </div>
    </div>
  </body>
</html>