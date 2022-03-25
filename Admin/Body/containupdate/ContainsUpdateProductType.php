<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Product Type</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Product Type</li>
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
                <h3 class="card-title">UPDATE Product Type</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.PRODUCTTYPE."index_updateloaisanpham.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >TYPE ID</label>
                    <input type="text" class="form-control" name="MALOAI" placeholder="Enter" value="<?php echo $rowdata[0]['MALOAI']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >TYPE NAME</label>
                    <input type="text" class="form-control" name="TENLOAI" placeholder="Enter"value="<?php echo $rowdata[0]['TENLOAI']?>">
                  </div>
				   <div class="form-group">
                    <label >GENDER</label>
                     <select name="PHAI"class="form-control" required>
					<?php
					if(levenshtein($rowdata[0]["PHAI"],"NAM")==0)
					{
					?>
					<option value="NAM" selected>MALE</option>
					<option value="NU">FEMALE</option>
					<?php
					}
					else
					{
					?>
					<option value="NAM" >MALE</option>
					<option value="NU" selected>FEMALE</option>
					<?php
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
					<option value="CON" selected>STILL ACTIVE</option>
					<option value="KHONGCON">NO LONGER ACTIVE</option>
					<?php
					}
					else
					{
					?>
					<option value="CON" selected>STILL ACTIVE</option>
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