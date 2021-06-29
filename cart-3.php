<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<style type="text/css">

	</style>
</head>

<body> 
	<?php
    require_once("cart.inc");
	mysqli_query($link, 'SET NAMES utf8');
	if ($_GET['shop']=="'milkshop'"){
		$sql = "DELETE FROM cart_milkshop WHERE  name=" . $_GET['name'] ."AND size=" . $_GET['size']."AND sugar=" . $_GET['sugar']."AND ice=" . $_GET['ice'];  //刪除資料
		mysqli_query($link, $sql) or die("無法刪除"); //執行sql語法
	}
	elseif ($_GET['shop']=="'coco'"){
		$sql = "DELETE FROM cart_coco WHERE name=" . $_GET['name']."AND sugar=" . $_GET['sugar']."AND ice=" . $_GET['ice'];  //刪除資料
		mysqli_query($link, $sql) or die("無法刪除"); //執行sql語法
	}
	elseif ($_GET['shop']=="'macu'"){
		$sql = "DELETE FROM cart_macu WHERE name=" . $_GET['name']."AND size=" . $_GET['size']."AND sugar=" . $_GET['sugar']."AND ice=" . $_GET['ice'];  //刪除資料
		mysqli_query($link, $sql) or die("無法刪除"); //執行sql語法
	}
	mysqli_close($link); //關閉資料庫連結
	header("location:cart.php");
	?>
</body>
</html>