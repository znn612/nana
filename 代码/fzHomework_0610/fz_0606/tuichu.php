<?php
	//退出的时候销毁sesstion
	session_start();
	unset($_SESSION['admin']);
	echo "<script>location.replace('0521_1.html')</script>";
?>