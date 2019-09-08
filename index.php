<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="css.css">
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="javascript.js"></script>
</head>
<body>
<?php 
if(isset($_GET['er'])){
	
	$er = $_GET['er'];
	if ($er == 1){
		echo "<script>alert('sdt ton tai')</script>";
	}
	if ($er == 2){
		echo "<script>alert('sdt hoac mat khau sai')</script>";
	}
	
} ?>
<div class="register">
	<form action="function.php?s=rg" method="post">
	<div>
		<p>Tên</p>
		<input type="text" name="name" required="required">
		<p>Sdt:</p>
		<input type="text" name="sdt" required="required">
		<p>Address</p>
		<input type="text" name="address" required="required">
		<p>Password</p>
		<input type="password" name="password" required="required">

		<input type="submit" name="submit" value="Gửi" >
	</div>

	</form>

<button id="log_in">Đăng Nhập</button>
</div>
<div class="log_in">
	<form action="function.php?s=lg " method="post">
	<div>
		<p>Sdt:</p>
		<input type="text" name="sdt" required="required">
		<p>Password</p>
		<input type="password" name="password" required="required">
		<input type="submit" name="submit" value="Gửi" >
	</div>
</form>
<button id="register">Tạo tài khoản mới</button>
</div>

 </table>
</body>
</html>
