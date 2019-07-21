<link rel="stylesheet" href="webroot/css/style.css">
<h2>List Products Page</h2>
<a href="index.php?action=add_product">Add product</a>
<table>
	<tr>
		<td>Id</td>
		<td>Name</td>
		<td>Description</td>
		<td>Image</td>
		<td>Price</td>
		<td>Created Date</td>
		<td>Action</td>
	</tr>
	<?php
	   while ($product = $listProduct->fetch_assoc()) {
	   	      $id = $product['id'];
	?>
	<tr>
		<td><?php echo $product['id']?></td>
		<td><?php echo $product['name']?></td>
		<td><?php echo $product['description']?></td>
		<td>
			<img src="uploads/<?php echo $product['image']?>">
		</td>
		<td><?php echo $product['price']?></td>
		<td><?php echo $product['created']?></td>
        <td>
        	<a href="index.php?action=edit_product&id=<?php echo $id?>">Edit</a>|
        	<a href="index.php?action=delete_product&id=<?php echo $id?>">Delete</a>
        </td>
	</tr>
	<?php
       }
    ?>
</table>