<?php 
  session_start();
  $username = $password = "";
  $errUsername = $errPass = $info = "";
  if(isset($_POST['submit'])) {
  	 $username = $_POST['username'];
  	 $password = $_POST['password'];
     if($username == "" || $username != "admin") {
     	$errUsername = "Bạn chưa nhập hoặc nhập sai tên đăng nhập";
     }
     if($password == "" || $password != "123456") {
        $errPass = "Bạn chưa nhập hoặc nhập sai mật khẩu";
     }
     if ($username == "admin" && $password =="123456") {
     	$_SESSION['username'] = $username;
     	$_SESSION['pasword'] = $password;
     	header("Location:home.php");
     }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | PHP</title>
	<style>
		.error{
			color: red;
		}
	</style>
</head>
<body>
	<h1>Login</h1>
	<form action="#" method="post">
		<label>Username</label><br>
		<input type="text" name="username" value="<?php echo $username?>"><br>
		<span class="error"><?php echo $errUsername?></span><br>
		<label>Password</label><br>
		<input type="password" name="password"><br>
		<span class="error"><?php echo $errPass?></span><br>
		<input type="submit" name="submit" value="Login"><br>
		<span class="success"><?php echo $info;?></span>
	</form>
	
</body>
</html>