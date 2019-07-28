<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Products</title>
</head>
<body>
	<?php
	   require_once "connect.php"; 
	?>
	<h1>Add Product</h1>
	<form action="#" method="post" enctype="">
		<label>Product name</label><br>
		<input type="text" name="name"><br>
		<label>Description</label><br>
		<textarea cols="8" name="description"></textarea><br>
		<label>Product price</label><br>
		<input type="text" name="price"><br>
		<label>Products quanlity</label><br>
		<input type="text" name="quanlity"><br>
		<label>Sale</label><br>
		<input type="text" name="sale"><br>
		<label>Image</label><br>
		<input type="file" name="picture"><br>
		<input type="submit" name="add" value="Add product">		
	</form>
</body>
</html>