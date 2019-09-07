<?php
 $db_config_path = require 'config.php';
 	$host = $db_config_path['host'];
	$user = $db_config_path['user'];
	$password = $db_config_path['password'];
	$dbname = $db_config_path['dbname'];
 
try {
	$db = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
	$db->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
	$db->exec("set names utf8");
	

	
} 
catch (Exception $e) {
	exit("Conncettion fail: ". $e->getMessage());
	
}
 ?>	
	