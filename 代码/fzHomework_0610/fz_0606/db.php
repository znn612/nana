<?php 
	$servername = "localhost";
	$username = "root";
	$password = "123456";
	$dbname = "fzphp";
	// 创建连接
	$conn =mysqli_connect($servername, $username, $password, $dbname);
	echo 
	$id = $_GET['id'];
	$sql = "delete from fzsq where id=$id";
	if (mysqli_query($conn,$sql)) {
		echo 1;
	}
?>