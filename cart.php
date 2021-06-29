<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Cart</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style>
    .lh-condensed {
      line-height: 1.5;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .detail-1 {
      margin-left: -30px;
    }

    .detail-2 {
      margin-left: 10px
    }

    .qty {
      position: absolute;
      right: 90px;
      width: 10px;
    }

    .price {
      position: absolute;
      right: 10px;
      width: 50px;
    }

    .hr {
      margin-left: -48px;
      margin-top: 2px;
      margin-bottom: 2px;
    }

    .personal-data {
      padding-left: 150px;
      zoom: 90%;
    }

    .total {
      width: 250%;
      padding-left: 10px;
    }

    .shop {
      float: right;
      border-style: solid;
      position: relative;
      right: 200px;
      zoom: 70%;
      height: 25px;
      width: 80px;
      text-align: center;
    }
  </style>
</head>

<body class="bg-light">
  <nav class="nav bg-white">
    <a class="nav-link active" href="first.html">主頁</a>
    <a class="nav-link" href="Topping Recommendation.php">迷客夏</a>
    <a class="nav-link" href="coco1.php">coco</a>
    <a class="nav-link" href="macu0.php">麻古</a>
  </nav>
  <div class="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/purchase.png" alt="" width="100">
      <h2>購物車</h2>
    </div>
    <?php
    require_once("cart.inc");
    $milkshop = array();
    $coco = array();
    $macu = array();
    $count_milkshop = 0;
    $count_coco = 0;
    $count_macu = 0;
    $total = 0;
    //milkshop 飲料資訊
    $sql = "SELECT milkshop_price.id,cart_milkshop.shop,cart_milkshop.name,cart_milkshop.size,cart_milkshop.sugar,cart_milkshop.ice,SUM(cart_milkshop.qty) AS \"qty\",(milkshop_price.價格)AS \"單價\",(milkshop_price.價格*SUM(cart_milkshop.qty))AS\"價格\" FROM cart_milkshop INNER JOIN milkshop_price ON cart_milkshop.name = milkshop_price.品名 AND cart_milkshop.size = milkshop_price.容量 GROUP BY cart_milkshop.name,cart_milkshop.size,cart_milkshop.sugar,cart_milkshop.ice";
    $result_milkshop = mysqli_query($link, $sql);
    if ($result_milkshop) {
      if (mysqli_num_rows($result_milkshop) > 0) { // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
        while ($row = mysqli_fetch_assoc($result_milkshop)) {
          $milkshop[] = $row;
        }
      }
      mysqli_free_result($result_milkshop); // 釋放資料庫查到的記憶體
    }
    if (!empty($result_milkshop)) {
      #print_r($milkshop);
    }
    for ($i=0; $i < count($milkshop) ; $i++) { 
      $count_milkshop += $milkshop[$i]['qty'];      
    }

    //coco 飲料資訊
    $sql = "SELECT coco.id,cart_coco.shop,cart_coco.name,cart_coco.sugar,cart_coco.ice,SUM(cart_coco.qty) AS \"qty\",(coco.價格)AS \"單價\",(coco.價格*SUM(cart_coco.qty))AS \"價格\" FROM cart_coco INNER JOIN coco ON cart_coco.name = coco.品名 GROUP BY cart_coco.name,cart_coco.sugar,cart_coco.ice";
    mysqli_query($link, 'SET NAMES utf8');
    $result_coco = mysqli_query($link, $sql);
    if ($result_coco) {
      if (mysqli_num_rows($result_coco) > 0) { // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
        while ($row = mysqli_fetch_assoc($result_coco)) {
          $coco[] = $row;
        }
      }
      mysqli_free_result($result_coco); // 釋放資料庫查到的記憶體
    }
    if (!empty($result_coco)) {
      #print_r($coco);
    }
    for ($i=0; $i < count($coco) ; $i++) { 
      $count_coco += $coco[$i]['qty'];      
    }

    //macu 飲料資訊
    $sql = "SELECT macu.id,cart_macu.shop,cart_macu.name,cart_macu.size,cart_macu.sugar,cart_macu.ice,SUM(cart_macu.qty) AS \"qty\",(macu.價格)AS \"單價\",(macu.價格*SUM(cart_macu.qty))AS \"價格\" FROM cart_macu INNER JOIN macu ON cart_macu.name = macu.品名 AND cart_macu.size = macu.容量 GROUP BY cart_macu.name,cart_macu.size,cart_macu.sugar,cart_macu.ice";
    $result_macu = mysqli_query($link, $sql);
    if ($result_macu) {
      if (mysqli_num_rows($result_macu) > 0) { // mysqli_num_rows方法可以回傳我們結果總共有幾筆資料
        while ($row = mysqli_fetch_assoc($result_macu)) {
          $macu[] = $row;
        }
      }
      mysqli_free_result($result_macu); // 釋放資料庫查到的記憶體
    }
    if (!empty($result_macu)) {
      #print_r($macu);
    }
    for ($i=0; $i < count($macu) ; $i++) { 
      $count_macu += $macu[$i]['qty'];      
    }
    
    ?>
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">您的購物車</span>
          <span class="text-muted">
            <font size="4"><?php echo $count_milkshop + $count_coco + $count_macu; ?></font>
          </span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <ul>
                <?php if (!empty($milkshop or $coco or $macu)) : ?>
                  <?php if (!empty($milkshop)) : ?>
                    <h6 class="my-0">
                      <?php foreach ($milkshop as $key => $row) : ?>
                        <span class="detail-1">
                          <a href="cart-3.php? shop='<?php echo $row['shop']; ?>'&name='<?php echo $row['name']; ?>'&size='<?php echo $row['size']; ?>'&sugar='<?php echo $row['sugar']; ?>'&ice='<?php echo $row['ice']; ?>' ">刪除</a>
                          <?php
                          echo $row['name'];
                          echo " " . $row['size']; ?>
                          <div class="shop" style="background-color:#01814A;border-color:#01814A;">
                            <font color="white"><?php echo  $row['shop']; ?></font>
                          </div>
                        </span>
                        <span class="qty">
                          <?php
                          echo " x" . $row['qty'];?>
                        </span>
                        <span class="text-muted price">$<?php echo $row['價格']; ?></span>
                        <br />
                    </h6>
                    <small class="text-muted detail-2 ">
                      <?php echo $row['ice'];
                        echo $row['sugar']; ?><br />
                      <hr class="hr" width="415px" size="3px">
                    </small>
                  <?php endforeach; ?>
                <?php endif; ?>
                <?php if (!empty($coco)) : ?>
                  <h6 class="my-0">
                    <?php foreach ($coco as $key => $row) : ?>
                      <span class="detail-1">
                        <a href="cart-3.php? shop='<?php echo $row['shop']; ?>'&name='<?php echo $row['name']; ?>'&sugar='<?php echo $row['sugar']; ?>'&ice='<?php echo $row['ice']; ?>' ">刪除</a>
                        <?php
                        echo $row['name']; ?>
                        <div class="shop" style="background-color:#EAC100;border-color:#EAC100;">
                          <font color="white"><?php echo  $row['shop']; ?></font>
                        </div>
                      </span>
                      <span class="qty">
                        <?php
                        echo " x" . $row['qty']; ?>
                      </span>
                      <span class="text-muted price">$<?php echo $row['價格']; ?></span>
                      <br />
                  </h6>
                  <small class="text-muted detail-2 ">
                    <?php echo $row['ice'];
                      echo $row['sugar']; ?><br />
                    <hr class="hr" width="415px" size="3px">
                  </small>
                <?php endforeach; ?>
              <?php endif; ?>
              <?php if (!empty($macu)) : ?>
                <h6 class="my-0">
                  <?php foreach ($macu as $key => $row) : ?>
                    <span class="detail-1">
                      <a href="cart-3.php? shop='<?php echo $row['shop']; ?>'&name='<?php echo $row['name']; ?>'&size='<?php echo $row['size']; ?>'&sugar='<?php echo $row['sugar']; ?>'&ice='<?php echo $row['ice']; ?>' ">刪除</a>
                      <?php
                      echo $row['name'];
                      echo " " . $row['size']; ?>
                      <div class="shop" style="background-color:#D94600;border-color:#D94600;">
                        <font color="white"><?php echo  $row['shop']; ?></font>
                      </div>
                    </span>
                    <span class="qty">
                      <?php
                      echo " x" . $row['qty']; ?>
                    </span>
                    <span class="text-muted price">$<?php echo $row['價格']; ?></span>
                    <br />
                </h6>
                <small class="text-muted detail-2 ">
                  <?php echo $row['ice'];
                      echo $row['sugar']; ?><br />
                  <hr class="hr" width="415px" size="3px">
                </small>
              <?php endforeach; ?>
            <?php endif; ?>

            <li class=" d-flex justify-content-between">
              <span class="total">Total</span>
              <strong><span class="price">
                  <?php
                  for ($i = 0; $i < count($milkshop); $i++) {
                    $total = $total + $milkshop[$i]["價格"];
                  }
                  for ($i = 0; $i < count($coco); $i++) {
                    $total = $total + $coco[$i]["價格"];
                  }
                  for ($i = 0; $i < count($macu); $i++) {
                    $total = $total + $macu[$i]["價格"];
                  }
                  echo "$" . $total;
                  ?></span>
              </strong>
            </li>
          </li>
        </ul>
      </div>
      </ul>
      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="備註">
        </div>
      </form>
    <?php else : ?>
      <h6 class="my-0">
        查無資料
      </h6>
      </ul>
    </div>
  <?php endif; ?>
  <?php mysqli_close($link); ?>
  </div>

  <div class="col-md-8 order-md-1 personal-data" id="personal-data">
    <h4 class="mb-3">個人資料</h4>
    <form class="needs-validation" novalidate method="post" action="cart-2.php">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="name">姓名</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required>
          <div class="invalid-feedback">
            姓名欄位未輸入
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label for="username">帳號</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" maxlength="15" required>
            <div class="invalid-feedback" style="width: 100%;">
              帳號欄位未輸入
            </div>
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="email">電子郵件 <span class="text-muted">(Optional)</span></label>
        <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
        <div class="invalid-feedback">
          請輸入正確的電子郵件格式
        </div>
      </div>
      <div class="mb-3">
        <label for="phone_number">電話號碼</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="0287654321 or 0912345678" pattern="0\d{9}" required>
        <div class="invalid-feedback">
          電話號碼欄位未輸入或格式錯誤
        </div>
      </div>
      <div class="mb-3">
        <label for="address">地址</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
        <div class="invalid-feedback">
          地址欄位未輸入
        </div>
      </div>
      <hr class="mb-4">
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="save-info">
        <label class="custom-control-label" for="save-info">記住我 (Save this information for next time)</label>
      </div>
      <p></p>
      <button class="btn btn-primary btn-lg btn-block" type="submit">送出</button>
    </form>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
  </script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/form-validation.js"></script>
</body>

</html>