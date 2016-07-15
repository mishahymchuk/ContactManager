<?php
if (isset($_POST) && !empty($_POST['login']) && !empty($_POST['password'])) 
{
	//var_dump($_POST);
	$a=$_POST['login'];
	$b=$_POST['password'];
	echo "Login=".$a."<br>";
	echo "Password=".$b;
}

?>
<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Contact_manager</title>
		</head>
		<body>
			<div id=login>
				<div id=Welcome>
					<p> Welcome to Contact manager </p>
				</div>
				<div id=input_login>
					<form name="test" method="post" action="index.php">
						<p>
							<input type="text" name="login" size="20"> 
							<input type="password" name="password" size="20">
							<input type="submit" name="ok" size="20">
						</p>
					</form>
				</div>
			</div>

		</body>
	</html>
