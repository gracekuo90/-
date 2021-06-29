<?php
$link = mysqli_connect("localhost", "root", "")
or die("無法開啟MySQL資料庫連接!<br/>");
mysqli_select_db($link, "CSV_DB2");  // 選擇CSV_DB2資料庫
mysqli_query($link, 'SET NAMES utf8');
?> 