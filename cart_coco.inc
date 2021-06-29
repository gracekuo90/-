  <?php
  $link = mysqli_connect("localhost", "root", "") or die("無法開啟MySQL資料庫連接!<br/>");
  mysqli_select_db($link, "網設專題");
  mysqli_query($link, 'SET NAMES utf8');
  error_reporting(0); //隱藏錯誤資訊
  $sql = "DELETE FROM cart_coco WHERE  qty=0";
  mysqli_query($link, $sql);
  $sql = "INSERT INTO cart_coco (`shop`,`name`, `sugar`,`ice`,`qty`)
    VALUES('coco','$_POST[name]','$_POST[Sugar]','$_POST[Ice]','$_POST[qty]')";
  if (!mysqli_query($link, $sql)) {
    die('Error: ' . mysqli_error($link));
  }
  ?>