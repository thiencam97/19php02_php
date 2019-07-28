<?php
   require_once 'connect.php';
   //câu SQL lấy danh sách
   $sql = 'SELECT * FROM news';
   //Thực thi câu truy vấn và gán vào $listNews
   $listNews = mysqli_query($connect,$sql);
?>
<table>
	<tr>
		<td>Title</td>
	    <td>Decription</td>
	    <td>Image</td>
	    <td>Created Date</td>
	</tr>
<?php
   while ($news = $listNews->fetch_assoc()) {
   	$id = $news['id'];
?>
	<tr>
		<td><?php echo $news['title']?></td>
	    <td><?php echo $news['description']?></td>
	    <td>
	    	<img src="uploads/<?php echo $news['image'];?>" style="width: 70px;height: 70px" alt="image">
	    </td>
	    <td><?php echo $news['created']?></td>
	    <td>
	    	<a href="edit_news.php?id=<?php echo $id?>">Edit</a>|<a href="delete_news.php?id=<?php echo $id?>">Delete</a>
	    </td>
	</tr>
<?php
    }
?>
</table>
<a href="form.php">Add news</a>
