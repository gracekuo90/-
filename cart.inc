<?php
$link = mysqli_connect("localhost", "root", "") or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "網設專題");
?>