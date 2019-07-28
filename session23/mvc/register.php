<?php include 'header.php';?>
<div class="content-wrapper" style="min-height: 298px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Register</h1>
<!--       <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content container">
    	<div class="row">
    		<div class="col-md-4">
				<form class="form-horizontal" role="form">
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Username</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" name="username" placeholder="Username">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Password</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" name="password" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="col-sm-2 control-label">Avatar</label>
				    <div class="col-sm-10">
				      <input type="file" class="form-control" name = "avatar">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" name="register">Register</button>
				    </div>
				  </div>
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