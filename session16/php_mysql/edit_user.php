<?php
  require_once 'connect.php';
  //Lấy thông tin user
      $id = $_GET['id'];
      $sql = "SELECT * FROM users WHERE id = $id";
      $editUser = mysqli_query($connect, $sql);
      $editUserDetail = $editUser->fetch_assoc();
  // $errName = $errGender = $errAddress = $errCustomerType = $errStartDate = $errEndDate = $errStartNumber = $errEndNumber = '';
     $name = $gender = $address = $customer_type = $start_date = $end_date = $start_number = $end_number = '';
  if (isset($_POST['edit'])) {
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$customer_type = $_POST['customer_type'];
		$start_date = $_POST['start_date'];
		$end_date = $_POST['end_date'];
		$start_number = $_POST['start_number'];
		$end_number = $_POST['end_number'];
        $sql = "UPDATE users SET name = '$name', address = '$addresss', gender = '$gender', 
        customer_type = '$customer_type', start_number = '$start_number', end_number = '$end_number', start_date = '$start_date', end_date = '$end_date' WHERE id = $id";
    
        if (mysqli_query($connect, $sql)) {
    		// chuyen trang trong PHP
    		header("Location: list_user.php");
    	} else {
    		echo "Error!";
    	}
}
?>