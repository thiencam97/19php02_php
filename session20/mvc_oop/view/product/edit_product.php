<h2>Edit Product Page</h2>
<form action="index.php?action=edit_product&id=<?php echo $id?>" method="POST">
	<p>
		Name
		<input type="text" name="name" value="<?php echo $editDetailProduct['name']?>">
	</p>
	<p>
		Decription
		<input type="text" name="description" value="<?php echo $editDetailProduct['description']?>">
	</p>
	<p>
		Price
		<input type="text" name="price" value="<?php echo $editDetailProduct['price']?>">
	</p>
	<input type="submit" name="edit_product" value="Save">
</form>