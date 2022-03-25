<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Account</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Account</li>
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
                <h3 class="card-title">UPDATE ACCOUNT</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.ACCOUNT."index_updatetaikhoan.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >ACCOUNT ID</label>
                    <input type="text" class="form-control" name="MATK" placeholder="Enter" value="<?php echo $rowdata[0]['MATK']?>" readonly>
                  </div>
				   <div class="form-group">
                    <label >ACCOUNT TYPE</label>
                    <select name="TENLOAI"class="form-control" required>
					<option value="">--Select--</option>
					<?php
					foreach($tenloai as $tp)
					{
						if(levenshtein($tp["tenloai"],$rowdata[0]['TENLOAI'])==0)
						{
					?>
					<option value="<?php echo $tp["tenloai"]?>" selected><?php echo $tp["tenloai"]?></option>
					<?php
						}
						else
						{
					?>
					<option value="<?php echo $tp["tenloai"]?>"><?php echo $tp["tenloai"]?></option>
					<?php
						}
					}
					?>
					</select>
                  </div>
				  <div class="form-group">
                    <label >STATUS</label>
                    <select name="TRANGTHAI"class="form-control"required> 
					<?php 
					if($rowdata[0]['TRANGTHAI'] == 1)
					{
					?>
					<option value="CON" selected>ACTIVE</option>
					<option value="KHONGCON">DEACTIVE</option>
					<option value="KHOA">LOCK</option>
					<?php
					}
					else if($rowdata[0]['TRANGTHAI'] == 0)
					{
					?>
					<option value="CON" >ACTIVE</option>
					<option value="KHONGCON" selected>DEACTIVE</option>
					<option value="KHOA">LOCK</option>
					<?php
					}
					else
					{
					?>
					<option value="CON" >ACTIVE</option>
					<option value="KHONGCON" >DEACTIVE</option>
					<option value="KHOA" selected>LOCK</option>
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