<?php
  include_once 'conn.php';
  //Tao cau truy van
  $sql = "INSERT INTO news (title,description,image,created) VALUES ('Brazil muon lam vua bong da nam my','Bong da', 'brazil.jpg','2019-07-26')";
  //Yeu cau thuc thi cau truy van
  $inser_data = mysqli_query($conn,$sql);
  if ($inser_data) {
  	  echo "Success";
  } else {
  	 echo "Failed";
  }
?>