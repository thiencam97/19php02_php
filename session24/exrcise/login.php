<?php 
  session_start();
  $username = $password = "";
  $errUsername = $errPass = $info = "";
  if(isset($_POST['submit'])) {
  	 $username = $_POST['username'];
  	 $password = $_POST['password'];
      if($username == "admin" && $password == "123456") {
      	   //lưu session
		  	$_SESSION['username'] = $_POST['username'];
		  	$_SESSION['password'] = $_POST['password'];   
            header('Location:home.php');

		  	
     } else {
           $info = "Đăng nhập thất bại";
     }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | PHP</title>
</head>
<body>
	<h1>Login</h1>
	<form action="#" method="post">
		<label>Username</label><br>
		<input type="text" name="username"><br>
		<span class="error"></span>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<span class="error"></span>
		<input type="submit" name="submit" value="Login"><br>
		<span class="success"><?php echo $info;?></span>
	</form>
	
</body>
</html>