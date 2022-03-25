<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update The Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update The Order</li>
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
                <h3 class="card-title">UPDATE The Order</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.ORDER."index_updatedonhang.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >ORDER ID</label>
                    <input type="text" class="form-control" name="MADON" placeholder="Enter" value="<?php echo $rowdata[0]['MADON']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >CUSTOMER PHONE NUMBER</label>
                    <input type="text" class="form-control" name="SDT" placeholder="Enter"value="<?php echo $rowdata[0]['SDT']?>" readonly>
                  </div>
				   <div class="form-group">
                    <label >ORDER DATE</label>
                    <input type="date" class="form-control" name="NGAYDAT" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYDAT']?>" readonly>
                  </div>
				  <?php
				  if($rowdata[0]['TRANGTHAI'] == 1)
				  {
				  ?>
				   <div class="form-group">
                    <label >DELIVERY DATE</label>
                    <input type="date" class="form-control" name="NGAYGIAO" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYGIAO']?>">
                  </div>
				  <?php
				  }
				  else
				  {
				  ?>
				   <div class="form-group">
                    <label >DELIVERY DATE</label>
                    <input type="date" class="form-control" name="NGAYGIAO" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYGIAO']?>" readonly>
                  </div>
				  <?php
				  }
				  ?>
					<div class="form-group">
                    <label >STATUS</label>
                     <select name="TRANGTHAI"class="form-control"required> 
					<?php 
					if($rowdata[0]['TRANGTHAI'] == 1)
					{
					?>
					<option value="DANGXULY" selected>Processing</option>
					<option value="DANGVANCHUYEN">In Transit</option>
					<option value="DAGIAO">Delivered</option>
					<option value="HUY">Cancel Order</option>
					<?php
					}
					else if($rowdata[0]['TRANGTHAI'] == 2)
					{
					?>
					<option value="DANGXULY" >Processing</option>
					<option value="DANGVANCHUYEN"selected>In Transit</option>
					<option value="DAGIAO">Delivered</option>
					<option value="HUY">Cancel Order</option>
					<?php
					}
					else if($rowdata[0]['TRANGTHAI'] == 3)
					{
					?>
					<option value="DANGXULY" >Processing</option>
					<option value="DANGVANCHUYEN">In Transit</option>
					<option value="DAGIAO"selected>Delivered</option>
					<option value="HUY">Cancel Order</option>
					<?php
					}
					else
					{
					?>
					<option value="DANGXULY" >Processing</option>
					<option value="DANGVANCHUYEN">In Transit</option>
					<option value="DAGIAO">Delivered</option>
					<option value="HUY"selected>Cancel Order</option>
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