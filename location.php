<?php 

if (isset($_COOKIE['remember'])) {
	$_SESSION['user_id'] = $_COOKIE['remember'];
header('location:index.php');
}
 ?>