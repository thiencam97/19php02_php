<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
	<style>
		input, textarea{
			width: 200px;
		}
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php
	    include_once 'connect.php';
	    //Khởi tạo và gán giá trị mặc định cho các trường
	    $title = $description = $created = '';
	    //Khởi tạo biến thông báo lỗi cho các trường
	    $errTitle = $errDesc = $errCre = '';
	    if (isset($_POST['submit'])) {
	    	$title      = $_POST['title'];
	    	$description = $_POST['description'];
	    	$created    = $_POST['created'];
	    	$image = "noimage.png";
	    	if ($title == '') {
	    		$errTitle = 'Please input title';
	    	}
	    	if ($description == '') {
	    		$errDesc = 'Please input description';
	    	}
	    	if ($created == '') {
	    		$errCre = 'Please choose created date';
	    	}
	    	if ($title != '' && $description != '' && $created != '') {
		        //Tạo folder chứa file upload
				$target_dir = "uploads/";
				//Tạo đường dẫn của file sau khi uploads lên server
				// $target_file = $target_dir.basename($_FILES['image']['name']);
				if ($_FILES['image']['error'] == 0) {
					  $image = $_FILES['image']['name'];
			          move_uploaded_file($_FILES['image']['tmp_name'], $target_dir.$image);
				}
		    	 $sql = "INSERT INTO news(title,description,image,created) VALUES('$title','$description','$image','$created')";
		    	       $insert_data = mysqli_query($connect,$sql);
					  if ($insert_data) {
					  	 header('Location:list_news.php');
					  } else {
					  	 echo "Failed";
					  }
		    	}
	       
	    }
	?>
	<h1>Form chèn dữ liệu</h1>
	<form action="#" method="post" enctype="multipart/form-data">
		<label>Tiêu đề</label><br>
		<input type="text" name="title" value="<?php echo $title ?>"><br>
		<span class="error"><?php echo $errTitle ?></span><br>
		<label>Mô tả</label><br>
		<input cols="8" name="description" value="<?php echo $description ?>"></input><br>
		<span class="error"><?php echo $errDesc ?></span><br>
		<label>Hình ảnh</label><br>
		<input type="file" name="image"><br>
		<label>Ngày tạo</label><br>
		<input type="date" name="created" value="<?php echo $created ?>"><br>
		<span class="error"><?php echo $errCre ?></span><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>