<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Add Account</li>
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
                <h3 class="card-title">ADD Account</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.ADD.ACCOUNT."index_inserttaikhoan.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >ACCOUNT ID</label>
                    <input type="text" class="form-control" name="MATK" placeholder="Enter" required value="<?php echo $matknew ?>" readonly>
                  </div>
				    <div class="form-group">
                    <label >ACCOUNT TYPE</label>
                    <select name="TENLOAI"class="form-control"  required>
					<?php
					foreach($tenloai as $tp)
					{
					?>
					<option value="<?php echo $tp["tenloai"]?>"><?php echo $tp["tenloai"]?></option>
					<?php
					}
					?>
					</select>
                  </div>
                  <div class="form-group">
                    <label >USERNAME</label>
                    <input type="text" class="form-control" name="USERNAME" placeholder="Enter"required>
                  </div>
				  <div class="form-group">
                    <label >PASS</label>
                    <input type="password" class="form-control" name="PASS" placeholder="Enter"required>
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