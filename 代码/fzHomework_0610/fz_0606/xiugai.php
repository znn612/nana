<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
请输入新用户名:<input type="text" name="name" autofocus=""><br>
请输入新的账号:<input type="password" name="pwd"><br>
<a href="index.php" onclick="return confirm('确定放弃修改吗?')">返回</a>
<a href="index.php" onclick="return confirm('确定修改吗?')">确定</a>
	<?php
	echo $_GET;
	?>
</body>
</html>
