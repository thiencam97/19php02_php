<h2>Add product page</h2>
<form action="index.php?action=add_product" method="POST" enctype="multipart/form-data">
	<p>
		Name
		<input type="text" name="name">
	</p>
	<p>
		Description
		<input type="text" name="description">
	</p>
	<p>
		Image
		<input type="file" name="image">
	</p>
	<p>
		Price
		<input type="text" name="price">
	</p>
	<p>
	    Created Date
	    <input type="date" name="created">
	</p>

	<input type="submit" name="add_product" value="Add product">
</form>