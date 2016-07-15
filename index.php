<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "php/test_sesion.php";
include "php/test_log_pass.php";
?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Autorized</title>
		</head>
		<body>
			<div id=login>
				<div id=Welcome>
					<p> Welcome to Contact manager! </p>
					<p> Login or <a href="registration.php">Registration</a></p>
				</div>
				<div id=input_log_pass>
					<form name="login" method="post" action="index.php">
						<p>
							Name <br>
							<input type="text" name="login" size="20" value="<?=$login?>"> <br><br>
							Password <br>
							<input type="password" name="password" size="20" value="<?=$password?>"> <br><br>
							<input type="submit" name="ok" size="20" value="OK"> 
							<input type="submit" name="cancel" size="20" value="Cancel"> 

						</p>
					</form>
				</div>
			</div>

		</body>
	</html>
