<?php
	$login = "";
	$password = "";
	$repeat_password = "";
	$login_eror = "";
	if (isset($_POST['login']) && !empty($_POST['login'])) 
	{
		$login = $_POST['login'];
	}
	if (isset($_POST['password']) && !empty($_POST['password'])) 
	{
		$password = $_POST['password'];	
	}
	if (isset($_POST['repeat_password']) && !empty($_POST['repeat_password'])) 
	{
		$repeat_password = $_POST['repeat_password'];	
	}
	echo "login=".$login."<br>";
	echo "password=".$password."<br>";
	echo "repeat_password=".$repeat_password."<br>";
?>
