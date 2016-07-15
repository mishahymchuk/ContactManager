<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "php/test_sesion.php";
include "php/test_log_pass.php";
include "php/ConnectDB.php";
$select="SELECT login FROM users WHERE login='$login'";
$insert = "INSERT INTO users (login, password) VALUES ('$login', '$password')";
$ressel=mysqli_query($connect, $select);
$resSelect=mysqli_fetch_array($ressel);
if (empty($resSelect))
{
	if ($password==$repeat_password) 
	{
		//var_dump ($connect);
		$resInsert = mysqli_query($connect, $insert);
		if (!$resInsert)
		{ 
			echo mysqli_error();
		}	
	} 
	else 
	{
		echo "невірний пароль";
	}
}
else
{
	echo "Зайнятий логін";
}




?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Registration</title>
		</head>
		<body>
			<div id=registration>
				<p> Enter your Name and Password </p>
				<div id=input_date>
					<form name="registration" method="post" action="registration.php">
						<p>
							Name <br>
							<input type="text" name="login" size="20" value="<?=$login?>"> 
							<samp><?=$login_eror?><samp/>
							 <br><br>
							Password <br>
							<input type="password" name="password" size="20" value="<?=$password?>"><br><br>
							Repeat password <br>
							<input type="password" name="repeat_password" size="20" value="<?=$repeat_password?>"> <br><br>
							<input type="submit" name="ok" size="20" value="OK"> 
							<input type="submit" name="cancel" size="20" value="Cancel"> 
						</p>

					</form>
				</div>
			</div>

		</body>
	</html>
