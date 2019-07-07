<?php
  $servername = 'localhost';
  $username   = 'root';
  $password   = '';
  $database   = '19php02';

  $connect = mysqli_connect($servername,$username,$password,$database);
  if ($connect) {
  	echo '<h2 style="color:green">Connected successfully</h2>';
  } else {
  	echo '<h2 style="color:red">Connecting failed</h2>'.mysql_connect_error();
  }
?>