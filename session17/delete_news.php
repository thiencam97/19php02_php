<?php
  require_once 'connect.php';
  $id = $_GET['id'];
  $sql = "DELETE FROM news WHERE id = $id";
  mysqli_query($connect,$sql);
  //chuyen trang
  header("Location:list_news.php");
?>