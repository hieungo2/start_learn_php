<link rel="stylesheet" type="text/css" href="css.css">
<form action="function.php" method="post">
	<input type="text" name="name">
	<input type="text" name="sdt">
	<input type="text" name="address">
	<input type="submit" name="" value="Gửi">
</form>

<?php 
require 'function.php';

$users = show_user();
 ?>
 <table>
 	<tr>
 		<td>STT</td>
 		<td>Name</td>
 		<td>Tel</td>
 		<td>Address</td>
 	</tr>
 	<?php $i = 0 ?>
 	<?php foreach($users as $user) : ?>
 		<tr>
 			<td>
 				<?php echo $i++; ?>
 			</td>
 			<td><?php echo $user['name']; ?></td><td><?php echo $user['sdt']; ?></td><td><?php echo $user['address']; ?></td>
 		</tr>
 	<?php endforeach; ?>
 </table>
