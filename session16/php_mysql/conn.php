<?php
   $servername = 'localhost';
   $username   = 'root';
   $password   = '';
   $database   = '19php02';

   $conn = mysqli_connect($servername,$username,$password,$database);
   if ($conn) {
   	 echo "Connected successfully";
   } else {
   	 echo "Connecting failed";
   }
//     echo "<br>";
//    //Create table
//    $sql = "CREATE TABLE news (
//    id INT(11) AUTO_INCREMENT PRIMARY KEY,
//    title VARCHAR(255),
//    description VARCHAR(255),
//    image VARCHAR(255),
//    created DATETIME
//    )";

//    if (mysqli_query($conn,$sql)) {
//       echo "Table news created successfully";
//    } else {
//       echo "Error creating table";
//    }
// ?>