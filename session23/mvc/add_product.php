<?php include 'header.php';?>
<div class="content-wrapper" style="min-height: 298px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add Product</h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container">
    	<div class="row">
    		<div class="col-md-8 d-flex justify-content-center">
				<form role="form">
				  <div class="form-group">
				    <label>Product Name</label>
				    <input type="text" class="form-control" name="name" placeholder="Enter Product name">
				  </div>
				  <div class="form-group">
				    <label>Description</label>
				    <textarea class="form-control" name="description" rows="3" placeholder="Enter ..."></textarea>
				  </div>
				  <div class="form-group">
				    <label>Price</label>
				    <input type="text" class="form-control" name="price" placeholder="Enter Product price">
				   </div>
				  <div class="form-group">
				    <label>Image</label>
				    <input type="file" name="image">
				   </div>
				  <button type="submit" name="add_product" class="btn btn-success">Add</button>
				</form>
    		</div>
    	</div>

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php';?>