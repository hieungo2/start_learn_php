<!DOCTYPE html>
<html>
<head>
	<title>trang chu</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
require 'function.php';


$users = show_user();

if(isset($_GET['er'])){
	
	$er = $_GET['er'];
	if ($er == 1){
		echo "<script>alert('sdt ton tai')</script>";
	}
	if ($er == 2){
		echo "<script>alert('sdt hoac mat khau sai')</script>";
	}
	
}

?>
 <table>
 	<tr>
 		<td>STT</td>
 		<td>Name</td>
 		<td>Tel</td>
 		<td>Address</td>
 		<td>Password</td>

 	</tr>
 	<?php $i = 0 ?>
 	<?php foreach($users as $user) : ?>
 		<tr>
 			<td>
 				<?php echo $i++; ?>
 			</td>
 			<td><?php echo $user['name']; ?></td>
 			<td><?php echo $user['sdt']; ?></td>
 			<td><?php echo $user['address']; ?></td>
 			<td><?php echo $user['password']; ?></td>
 		</tr>
 	<?php endforeach; ?>
</body>
</html><h1>Trang Chu</h1>

