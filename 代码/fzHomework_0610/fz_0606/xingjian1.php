<?php
	include 'db.php';
	$user  = $_POST["user"];
	$pwd = $_POST['pwd'];
	$pwd1 = $_POST['pwd1'];
	$hid = $_POST['hid'];
	if ($pwd !=$pwd1) {
		echo "<script>alert('不对');location.replace('index.php')</script>";;
		exit;
	}if ($user==''or $pwd=="") {
		echo "<script>alert('用户密码不能为空');location.replace('index.php')</script>";
		exit;
	}
	$admin = new db('users');
	$data ['name']= $user;
	$data ['pwd'] = $pwd;
	
	if ($hid>0) {
		$result = $admin ->save($data,"id='$hid'");
		if ($result) {
			echo "<script>alert('修改成功');location.replace('index.php')</script>";
		}
	}else{
		$result =  $admin->add($data);
		if ($result) {
			echo "<script>alert('添加成功');location.replace('index.php')</script>";
		}
	}


	

?>
