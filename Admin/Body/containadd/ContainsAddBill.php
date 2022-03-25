<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Bill</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Add Bill</li>
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
                <h3 class="card-title">ADD Bill</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.ADD.BILL."index_inserthoadon.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >BILL ID</label>
                    <input type="text" class="form-control" name="MAHD" placeholder="Enter" ">
                  </div>
                  <div class="form-group">
                    <label >BILL DATE</label>
                    <input type="date" class="form-control" name="NGAYLAPHD" placeholder="Enter"">
                  </div>
				   <div class="form-group">
                    <label >STAFF ID</label>
                    <input type="text" class="form-control" name="MANV" placeholder="Enter"">
                  </div>
				   <div class="form-group">
                    <label >MAKH</label>
                    <input type="text" class="form-control" name="MAKH" placeholder="Enter"">
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