<?php
  session_start();
  if(isset($_POST)) {
  	unset($_SESSION);
  	header("Location:text.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<form action="" method="post">
		<input type="submit" name="submit" value="Logout">
	</form>
	
</body>
</html>