<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Comment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Comment</li>
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
                <h3 class="card-title">UPDATE Comment</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.COMMENT."index_updatebinhluan.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >COMMENT ID</label>
                    <input type="text" class="form-control" name="MABL" placeholder="Enter" value="<?php echo $rowdata[0]['MABL']?>" readonly>
                  </div>
					<div class="form-group">
                    <label >STATUS</label>
                     <select name="TRANGTHAI"class="form-control"required> 
					<?php 
					if($rowdata[0]['TRANGTHAI'] == 1)
					{
					?>
					<option value="CON" selected>STILL ACTIVE</option>
					<option value="KHONGCON">NO LONGER ACTIVE</option>
					<?php
					}
					else
					{
					?>
					<option value="CON" >STILL ACTIVE</option>
					<option value="KHONGCON" selected>NO LONGER ACTIVE</option>
					<?php
					}
					?>
					</select>
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