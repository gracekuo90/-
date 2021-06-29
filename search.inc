<?php
    // 定義資料庫資訊
    $link = mysqli_connect("localhost", "root", "root")
        or die("無法開啟MySQL資料庫連接!<br/>");
    mysqli_select_db($link, "php");
    // 設定連線編碼
    mysqli_query($link, "SET NAMES 'UTF-8'");
?>