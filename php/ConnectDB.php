<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$host='localhost';
	$mysql_user='root';
	$mysql_password='';
	$database='cont_manager';
	$connect = mysqli_connect($host, $mysql_user, $mysql_password, $database);

?>
