<?php 
	include 'model/model.php';
	class Controller {

		function handleRequest() {
			$action = isset($_GET['action'])?$_GET['action']:'home';
			switch ($action) {
				case 'home':
					echo "<p>Ban dang o trang home</p>";
					break;
				case 'news':
					echo "<p>Ban dang o trang news</p>";
					break;
				case 'product':
					$model = new Model();
					$listProduct = $model->getListProducts();
					include 'view/product/list_product.php';
					break;
				case 'add_product':
                    if (isset($_POST['add_product'])) {
                    	$name        = $_POST['name'];
                    	$description = $_POST['description'];
                    	$price = $_POST['price'];
                    	$created = $_POST['created'];
                    	$image = "default.jpg";
                    	if($_FILES['image']['error'] == 0) {
                    		$image = $_FILES['image']['name'];
                    		move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
                    	}
                    	$model = new Model();
                    	if($model->addProduct($name, $description, $image, $price) === TRUE) {
                             header("Location: index.php?action=product");
                        }
                    }
                    include 'view/product/add_product.php';
					break;
                case 'delete_product':
                	$id = $_GET['id'];
                	$model = new Model();
                	if ($model->deleteProduct($id) === TRUE) {
                		header("Location: index.php?action=product");
                	}
                	break;
                case 'edit_product':
                	$id = $_GET['id'];
                	$model = new Model();
                	$editProduct = $model->getProductById($id);
                	$editDetailProduct = $editProduct->fetch_assoc();
                	if(isset($_POST['edit_product'])) {
                		$name        = $_POST['name'];
                		$description = $_POST['description'];
                		$price       = $_POST['price'];
                		$model       = new Model();
                		if($model->editProduct($id, $name, $description, $price) === TRUE) {
                             header("Location: index.php?action=product");
                		}
                	}
                	include 'view/product/edit_product.php';
                	break;
				case 'user':
					$model = new Model();
					$listUser = $model->getListUser();

					include 'view/user/list_user.php';
					break;
				case 'add_user':
					if (isset($_POST['add_user'])) {
						$username = $_POST['username'];
						$password = $_POST['password'];
						$avatar   = "default.jpg";
						if($_FILES['avatar']['error'] == 0) {
							$avatar = $_FILES['avatar']['name'];
							move_uploaded_file($_FILES['avatar']['tmp_name'], 'uploads/'.$avatar);
						}

						$model = new Model();
						if ($model->addUser($username, $password, $avatar) === TRUE) {
							header("Location: index.php?action=user");
						}	
					}
					include 'view/user/add_user.php';
					break;
				case 'delete_user':
						$id = $_GET['id'];
						$model = new Model();
					  if ($model->deleteUser($id) === TRUE) {
							header("Location: index.php?action=user");
						}	
						break;
				case 'edit_user':
						$id = $_GET['id'];
						$model = new Model();
						$editUser = $model->getUserById($id);
						$editUser = $editUser->fetch_assoc();
						if (isset($_POST['edit_user'])) {
							$username = $_POST['username'];
							$model = new Model();
							if ($model->editUser($id, $username) === TRUE) {
								header("Location: index.php?action=user");
							}	
						}
						include 'view/user/edit_user.php';
						break;
				default:
					break;
			}
		}
	}
?>