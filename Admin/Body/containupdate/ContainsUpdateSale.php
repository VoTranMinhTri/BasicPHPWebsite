<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Bill</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Bill</li>
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
                <h3 class="card-title">UPDATE Sale</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.SALE."index_updatesale.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >SALE ID</label>
                    <input type="text" class="form-control" name="MASALE" placeholder="Enter" value="<?php echo $rowdata[0]['MASALE']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >START DAY</label>
                    <input type="date" class="form-control" name="NGAYBATDAU" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYBATDAU']?>">
                  </div>
				   <div class="form-group">
                    <label >END DAY</label>
                    <input type="date" class="form-control" name="NGAYKETTHUC" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYKETTHUC']?>">
                  </div>
				   <div class="form-group">
                    <label >STATUS</label>
                    <select name="TINHTRANG"class="form-control"required> 
					<?php 
					if($rowdata[0]['TINHTRANG'] == 1)
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