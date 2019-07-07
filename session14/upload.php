<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Uploads</title>
</head>
<body>
	<?php
	//Tạo folder chứa file upload
	$target_dir = "uploads/";
	//Tạo đường dẫn của file sau khi uploads lên server
	$target_file = $target_dir.basename($_FILES['image']['name']);
	if ($_FILES['image']['error'] == 0) {
          move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
	}
	?>
	<h1>File Uploads</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="image"><br>
		<br>
		<input type="submit" name="submit" value="Upload"><br>
		
	</form>
	
</body>
</html>