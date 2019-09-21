<!DOCTYPE html>
<html>
<head>
	<title>trang chu</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<meta charset="utf-8">
</head>
<body>
	<h1>Trang Chu</h1>
	<?php
		require 'function.php';
		$users = show_user();
	?>
	<?php
 	if(isset($_SESSION['user_id'])){
 		echo $_SESSION['user_name'];
		echo '<a href="function.php?s=log_out"> log_out</a>';
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
	<?php }else{
		header('location:index.php');
	}
	?>
</body>
</html>
