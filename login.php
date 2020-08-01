<?php 
	session_start();

	if(isset($_POST['account']) && isset($_POST['pw']))
	{
		unset($_SESSION['account']);
		if($_POST['pw']=='umsi')
		{
			$_SESSION['account'] = $_POST['account'];
			$_SESSION['success'] = "Logged In!";
			header('Location: app.php');
			return;
		}
		else
		{
			$_SESSION['error'] = "Incorrect Password!".
			header('Location: login.php');
			return;
		}
	}
?>

<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<h1>Please Log In</h1>
		<?php 
			if(isset($_SESSION['success']))
			{
				echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
				unset($_SESSION['success']);
			}

			if(isset($_SESSION['error']))
			{
				echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
				unset($_SESSION['error']);
			}
		?>
		<form method="post">
			<p>Account: <input type="text" name="account"></p>
			<p>Password: <input type="text" name="pw"></p>
			<p>
				<input type="submit" value="Log In">
				<a href="app.php">Cancel</a>
			</p>
		</form>
	</body>
</html>