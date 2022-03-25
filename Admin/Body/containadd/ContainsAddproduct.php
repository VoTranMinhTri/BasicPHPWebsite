<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Add Product</li>
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
                <h3 class="card-title">ADD Product</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.ADD.PRODUCT."index_insertsanpham.php"?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >PRODUCT ID</label>
                    <input type="text" class="form-control" name="MASP" placeholder="Enter"  required>
                  </div>
                  <div class="form-group">
                    <label >PRODUCT NAME</label>
                    <input type="text" class="form-control" name="TENSP" placeholder="Enter"  required>
                  </div>
				   <div class="form-group">
                    <label >BRAND</label>
                     <select name="THUONGHIEU"class="form-control"  required>
					<?php
					foreach($tenthuonghieu as $tp)
					{
					?>
					<option value="<?php echo $tp["tenthuonghieu"]?>"><?php echo $tp["tenthuonghieu"]?></option>
					<?php
					}
					?>
					</select>
                  </div>
				   <div class="form-group">
                    <label >TYPE</label>
                    <select name="TENLOAI"class="form-control"  required>
					<?php
					foreach($tenloaisp as $tp)
					{
					?>
					<option value="<?php echo $tp["tenloai"]?>"><?php echo $tp["tenloai"]?></option>
					<?php
					}
					?>
					</select>
                  </div>
					<div class="form-group">
                    <label >GENDER</label>
                    <select name="PHAI"class="form-control"  required>
					<option value="NAM">MALE</option>
					<option value="NU">FEMALE</option>
					</select>
                  </div>
				   <div class="form-group">
                    <label >AMOUNT</label>
                    <input type="text" class="form-control" name="SOLUONG" placeholder="Enter"  required>
                  </div>
				   <div class="form-group">
                    <label >MATERIAL</label>
                    <input type="text" class="form-control" name="CHATLIEU" placeholder="Enter"  required>
                  </div>
				   <div class="form-group">
                    <label >PRICE</label>
                    <input type="text" class="form-control" name="GIA" placeholder="Enter"  required>
                  </div>
				   <div class="form-group">
                    <label >SIZE</label>
                    <input type="text" class="form-control" name="SIZE" placeholder="Enter"  required>
                  </div>
				   <div class="form-group">
                    <label >PICTURE</label>
                    <input type="file" class="form-control" name="IMAGE"  required>
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