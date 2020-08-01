<?php
	session_start();
?>
<html>
	<head>
		<title>My Smart App</title>
	</head>
	<body>
		<h1>Cool Application</h1>
		<?php 
			if(isset($_SESSION['success']))
			{
				echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
				unset($_SESSION['success']);
			}

			if(!isset($_SESSION['account']))
			{
				echo '<p>Please <a href="login.php">Log In</a> to start.</p>'."\n";
			}

			else
			{
				echo '<p>This is where a cool application would be.</p>'."\n";
				echo '<p>Please <a href="logout.php">Log Out</a> when you are done.</p>';
			}
		?>
	</body>
</html>