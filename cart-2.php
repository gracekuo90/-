<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Document</title>
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<style type="text/css">
		html,body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
		}

		#container {
			width: 100%;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>

<body>
	<?php
    require_once("cart.inc");
	mysqli_query($link, 'SET NAMES utf8');
	$sql = "INSERT INTO account (`name`, `username`,`email`,`phone_number`,`address`)
    VALUES('$_POST[name]','$_POST[username]','$_POST[email]','$_POST[phone_number]','$_POST[address]')";
	if (!mysqli_query($link, $sql)) {
		die('Error: ' . mysqli_error($link));
	}
	$sql = "DELETE FROM `order` WHERE `name`=''";
	mysqli_query($link, $sql);
	date_default_timezone_set('Asia/Taipei');
	$today = date("Y-m-d H:i:s");

	$sql = "DELETE FROM `cart_milkshop` WHERE `qty`=0";
	mysqli_query($link, $sql);
	$sql = "SELECT cart_milkshop.shop,cart_milkshop.name,cart_milkshop.size,cart_milkshop.sugar,cart_milkshop.ice,SUM(cart_milkshop.qty) AS \"qty\" FROM cart_milkshop ";
	$result_milkshop = mysqli_query($link, $sql);
	if ($result_milkshop) {
		if (mysqli_num_rows($result_milkshop) > 0) {
			$sql = "INSERT INTO `order` (`date`,`name`,`username`,`phone_number`,`shop`,`drinks`,`size`,`sugar`,`ice`,`qty`) SELECT '$today','$_POST[name]','$_POST[username]','$_POST[phone_number]',cart_milkshop.shop,cart_milkshop.name,cart_milkshop.size,cart_milkshop.sugar,cart_milkshop.ice,SUM(cart_milkshop.qty) AS qty FROM `cart_milkshop` GROUP BY cart_milkshop.name,cart_milkshop.size,cart_milkshop.sugar,cart_milkshop.ice";
			if (!mysqli_query($link, $sql)) {
				die('Error:a ' . mysqli_error($link));
			}
		}
	}
	$sql = "DELETE FROM `cart_coco` WHERE `qty`=0";
	mysqli_query($link, $sql);
	$sql = "SELECT cart_coco.shop,cart_coco.name,cart_coco.sugar,cart_coco.ice,SUM(cart_coco.qty) AS \"qty\" FROM cart_coco";
	$result_coco = mysqli_query($link, $sql);
	if ($result_coco) {
		if (mysqli_num_rows($result_coco) > 0) {
			$sql = "INSERT INTO `order` (`date`,`name`,`username`,`phone_number`,`shop`,`drinks`,`size`,`sugar`,`ice`,`qty`) SELECT '$today','$_POST[name]','$_POST[username]','$_POST[phone_number]',cart_coco.shop,cart_coco.name,'-',cart_coco.sugar,cart_coco.ice,SUM(cart_coco.qty) AS qty FROM `cart_coco` GROUP BY cart_coco.name,cart_coco.sugar,cart_coco.ice";
			if (!mysqli_query($link, $sql)) {
				die('Error:b ' . mysqli_error($link));
			}
		}
	}
	$sql = "DELETE FROM `cart_macu` WHERE `qty`=0";
	mysqli_query($link, $sql);
	$sql = "SELECT cart_macu.shop,cart_macu.name,cart_macu.size,cart_macu.sugar,cart_macu.ice,SUM(cart_macu.qty) AS \"qty\" FROM cart_macu";
	$result_macu = mysqli_query($link, $sql);
	if ($result_macu) {
		if (mysqli_num_rows($result_macu) > 0) {
			$sql = "INSERT INTO `order` (`date`,`name`,`username`,`phone_number`,`shop`,`drinks`,`size`,`sugar`,`ice`,`qty`) SELECT '$today','$_POST[name]','$_POST[username]','$_POST[phone_number]',cart_macu.shop,cart_macu.name,cart_macu.size,cart_macu.sugar,cart_macu.ice,SUM(cart_macu.qty) AS qty FROM `cart_macu` GROUP BY cart_macu.name,cart_macu.size,cart_macu.sugar,cart_macu.ice";
			if (!mysqli_query($link, $sql)) {
				die('Error:c ' . mysqli_error($link));
			}
		}
	}

	$sql = "TRUNCATE `網設專題`.`cart_milkshop`";
	mysqli_query($link, $sql);
	$sql = "TRUNCATE `網設專題`.`cart_coco`";
	mysqli_query($link, $sql);
	$sql = "TRUNCATE `網設專題`.`cart_macu`";
	mysqli_query($link, $sql);
	?>
	<div id="container">
		<div style="border-width: 3px; border-style: dashed; border-color: #FF0404; background-color: #FDFDFD; width: 450px; height: 150px; text-align: center; line-height: 75px;">
			<font size="5">
				訂單已送出!<br>3秒後為您導回主頁
			</font>
		</div>
	</div>
	<?php
	header("Refresh:3;url=first.html");
	?>
</body>

</html>