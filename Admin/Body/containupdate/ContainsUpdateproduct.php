<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Product</li>
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
                <h3 class="card-title">UPDATE Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.PRODUCT."index_updatesanpham.php"?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >PRODUCT ID</label>
                    <input type="text" class="form-control" name="MASP" placeholder="Enter" value="<?php echo $rowdata[0]['MASP']?>" required readonly>
                  </div>
                  <div class="form-group">
                    <label >PRODUCT NAME</label>
                    <input type="text" class="form-control" name="TENSP" placeholder="Enter"value="<?php echo $rowdata[0]['TENSP']?>" required>
                  </div>
				   <div class="form-group">
                    <label >BRAND</label>
                    <select name="THUONGHIEU"class="form-control" required>
					<?php
					foreach($tenthuonghieu as $tp)
					{
						if(levenshtein($tp["tenthuonghieu"],$rowdata[0]['TENTHUONGHIEU'])==0)
						{
					?>
					<option value="<?php echo $tp["tenthuonghieu"]?>" selected><?php echo $tp["tenthuonghieu"]?></option>
					<?php
						}
						else
						{
					?>
					<option value="<?php echo $tp["tenthuonghieu"]?>"><?php echo $tp["tenthuonghieu"]?></option>
					<?php
						}
					}
					?>
					</select>
                  </div>
				    <div class="form-group">
                    <label >TYPE</label>
                    <select name="TENLOAI"class="form-control" required >
					<?php
					foreach($tenloaisp as $tp)
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
                    <label >AMOUNT</label>
                    <input type="text" class="form-control" name="SOLUONG" placeholder="Enter"value="<?php echo $rowdata[0]['SOLUONG']?>" required>
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
					<option value="CON" selected>STILL ACTIVE</option>
					<option value="KHONGCON" selected>NO LONGER ACTIVE</option>
					<?php
					}
					?>
					</select>
                  </div>
				   <div class="form-group">
                    <label >MATERIAL</label>
                    <input type="text" class="form-control" name="CHATLIEU" placeholder="Enter"value="<?php echo $rowdata[0]['CHATLIEU']?>" required>
                  </div>
				   <div class="form-group">
                    <label >PRICE</label>
                    <input type="text" class="form-control" name="GIA" placeholder="Enter"value="<?php echo $rowdata[0]['GIA']?>" required>
                  </div>
				   <div class="form-group">
                    <label >SIZE</label>
                    <input type="text" class="form-control" name="SIZE" placeholder="Enter"value="<?php echo $rowdata[0]['SIZE']?>" required readonly>
                  </div>
				   <div class="form-group">
                    <label >PICTURE</label>
                    <input type="file" id="file" class="form-control" name="IMAGE">
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