<?php 
	include 'config/database.php';
	class Model extends ConnectDB {

		function addUser($username, $password, $avatar) {
			$sql = "INSERT INTO users(username, password, avatar) VALUES('$username', '$password','$avatar')";
			return mysqli_query($this->connect(), $sql);
		}

		function getListUser() {
			$sql = "SELECT * FROM users";
			return mysqli_query($this->connect(), $sql);
		}

		function deleteUser($id) {
			$sql = "DELETE FROM users WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function getUserById($id) {
			$sql = "SELECT * FROM users WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function editUser($id, $username) {
			$sql = "UPDATE users SET username = '$username' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}
        //cac phuong thuc them, sua, hien thi san pham
		function addProduct($name, $description, $image, $price) {
			$sql = "INSERT INTO products(name,description,image,price) VALUES('$name','$description','$image','$price')";
			return mysqli_query($this->connect(), $sql);
		}

		function getListProducts() {
			$sql = "SELECT * FROM products";
			return mysqli_query($this->connect(), $sql);
		}

		function deleteProduct($id) {
			$sql = "DELETE FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function getProductById($id) {
			$sql = "SELECT * FROM products WHERE id = $id";
			return mysqli_query($this->connect(), $sql);
		}

		function editProduct($id, $name, $description, $price) {
			$sql = "UPDATE products SET name = '$name', description = '$description', price = '$price' WHERE id = $id";
			return mysqli_query($this->connect(), $sql);

		}
	}
?>