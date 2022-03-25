<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.OTHER."index_doimatkhau.php"?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label >USERNAME</label>
                    <input type="text" class="form-control" name="USERNAME" placeholder="Enter" required value="<?php echo $_COOKIE["username"]?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >OLD PASSWORD</label>
                    <input type="password" class="form-control" name="OLD" placeholder="Enter"required>
                  </div>
				  <div class="form-group">
                    <label >NEW PASSWORD </label>
                    <input type="password" class="form-control" name="NEW" placeholder="Enter"required>
                  </div>
				  <div class="form-group">
                    <label >CONFIRM PASSWORD </label>
                    <input type="password" class="form-control" name="CONFIRM" placeholder="Enter"required>
                  </div>
				  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="btn_submit" value="Submit">
                </div>
				</div>
              </form>
 
            <!-- /.card -->
			</div>
			</div>

	
            <!-- /.card -->
			</div>
			</div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>