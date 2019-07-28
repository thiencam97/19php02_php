<?php
   $servername = 'localhost';
   $username   = 'root';
   $password   = '';
   $database   ='19php02';
   //Check connect to database
   $connect = mysqli_connect($servername,$username,$password,$database);
   if($connect) {
   	 echo 'Connected successfully!';
   } else {
   	 echo 'Connecting failed'.mysqli_connect_error();
   }
?>