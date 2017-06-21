<?php 
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "fzphp";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
$sql = "SELECT * FROM fzsq";
$result = mysqli_query($conn, $sql);


// if (mysqli_num_rows($result) > 0) {
//     // 输出数据
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id: " . $row["id"] ;
//     }
// } else {
//     echo "0 结果";
// }
// var_dump($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<style type="text/css">
		*{
			font-family: 微软雅黑;
		}
	</style>
	<script type="text/javascript" src="jquery-3.2.0.js"></script>
</head>
<body>
	<div class="container">
		<h2 class='page-header'>查看用户:</h2>
		<table class='table table-bordered table-hover'>
			<tr>
				<th>编号</th>
				<th>用户名</th>
				<th>密码</th>
				<th>删除</th>
			</tr>
			<?php 
			while($row = mysqli_fetch_assoc($result)) {
				// echo "<pre>";
				// print_r($row);
				// echo "</pre>";
				// 
					echo "<tr>";
				echo "<td>{$row['id']}</td>";
				echo "<td>{$row['name']}</td>";
				echo "<td>{$row['pwd']}</td>";
				echo "<td><a href='javascript:' class='del' id='{$row['id']}'>删除</a></td>";
				echo "</tr>";
			}
			 ?>
		</table>
	</div>	
</body>

<script type="text/javascript">
	$('.del').click(function(){
	id123=this.id;
	obj = $(this);
	//ajax无刷新删除
	$.get('db.php',{id:id123},function(r){
		console.log(r);
		if(r=='1'){
			obj.parent().parent().hide();
		}
	});
});
</script>