<?php
	include 'db.php';
	$a='delete from fzsq where id="' .$_GET["id"].'" limit 1';
	echo $a;
	$mydb = new db("fzsq");
	$resule =$mydb ->delete($a);
	if ($resule) {
		echo "<script>alert('删除成功'),location.replace('index.php')</script>";
		echo "<script>location.replace('index.php')</script>";
	}else{
		echo "<script>location.replace('index.php')</script>";
	}
?>