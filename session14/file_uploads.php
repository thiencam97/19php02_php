<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File_Uploads | PHP</title>
</head>
<body>
	<?php
	  //Kiểm tra người dùng đã submit hay không
	  if($_SERVER['REQUEST_METHOD'] == 'POST'){
	  	echo "<pre>";
	  	//Kiểm tra trong mảng file có những thông tin gì.
	  	print_r($_FILES);
	  	echo "</pre>";
	  	$error = array();
	  	//Tạo folder uploads để chứa files
	  	$target_dir = "uploads/";
	  	//Tạo đường dẫn của file sau khi uploads lên server
	  	$target_file = $target_dir.basename($_FILES['fileUploads']['name']);
        // echo $target_file;
        //Bước 2: Kiểm tra điều kiện uploads
        //+ Kiểm tra kích thước (< 5Mb)
        if($_FILES['fileUploads']['size'] > 52428800){
             $error['fileUpload'] = "File uploads không vượt quá 5Mb";
        }
        //+ Kiểm tra loại file (png, jpeg, jpg, gif)
        $file_type = pathinfo($_FILES['fileUploads']['name'], PATHINFO_EXTENSION);
        $file_type_allow = array('png','jpg','jpeg','gif');
        if(!in_array(strtolower($file_type), $file_type_allow)){
        	$error['fileUpload'] = "Chỉ được phép uploads file ảnh";
        }
        //+ Kiểm tra file đã tồn tại trên hệ thống
        if(file_exists($target_file)){
        	$error['fileUpload'] = "File đã tồn tại trên hệ thống";
        }
        //Bước 3: Kiểm tra & chuyển file từ bộ nhớ tạm lên server
        if(empty($error)){
           if(move_uploaded_file($_FILES['fileUploads']['tmp_name'], $target_file)){
           	   echo "Bạn đã upload thành công!";
           	   $flag = true;
           }else{
           	   echo "Bạn đã upload thất bại";
           }
        }
             
	  }
	?>
	<h1>Upload ảnh lên server</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="fileUploads"><br>		
		<input type="submit" name="submit">
		<?php if(isset($error['fileUpload'])){
			?>
		<span style="color: red; font-style: italic;"><?php echo $error['fileUpload'];?></span>
	    <?php
	     }
	    ?>
	</form>
	<?php
		if(isset($flag)){
		   	?>
		   	<img src="<?php echo $target_file;?>">
		   <?php
		}
		?>
</body>
</html>