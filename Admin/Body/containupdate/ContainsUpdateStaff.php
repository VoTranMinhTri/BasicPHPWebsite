<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Staff</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Staff</li>
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
                <h3 class="card-title">UPDATE STAFF</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.STAFF."index_updatenhanvien.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >STAFF ID</label>
                    <input type="text" class="form-control" name="MANV" placeholder="Enter" value="<?php echo $rowdata[0]['MANV']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >SURNAME</label>
                    <input type="text" class="form-control" name="HO" placeholder="Enter"value="<?php echo $rowdata[0]['HO']?>">
                  </div>
				  <div class="form-group">
                    <label >MIDDLE NAME</label>
                    <input type="text" class="form-control" name="TENLOT" placeholder="Enter"value="<?php echo $rowdata[0]['TENLOT']?>">
                  </div>
				    <div class="form-group">
                    <label >NAME</label>
                    <input type="text" class="form-control" name="TEN" placeholder="Enter"value="<?php echo $rowdata[0]['TEN']?>">
                  </div>
				  <div class="form-group">
                    <label >BIRTHDAY</label>
                    <input type="date" class="form-control" name="NGAYSINH" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYSINH']?>">
                  </div>
				  <div class="form-group">
                    <label >GENDER</label>
                    <input type="text" class="form-control" name="PHAI" placeholder="Enter"value="<?php echo $rowdata[0]['PHAI']?>">
                  </div>
				   <div class="form-group">
                    <label >CITIZEN IDENTITY</label>
                    <input type="text" class="form-control" name="CCCD" placeholder="Enter" value="<?php echo $rowdata[0]['CCCD']?>">
                  </div>
				   <div class="form-group">
                    <label >PHONE NUMBER</label>
                    <input type="text" class="form-control" name="SDT" placeholder="Enter" value="<?php echo $rowdata[0]['SDT']?>">
                  </div>
				   <div class="form-group">
                    <label >ADDRESS</label>
                    <input type="text" class="form-control" name="DIACHI" placeholder="Enter"value="<?php echo $rowdata[0]['DIACHI']?>">
                  </div>
				  <div class="form-group">
                    <label >START DAY</label>
                    <input type="date" class="form-control" name="NGAYBDLAM" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYBDLAM']?>">
                  </div>
				  <div class="form-group">
                    <label >END DAY</label>
                    <input type="date" class="form-control" name="NGAYKETTHUC" placeholder="Enter"value="<?php echo $rowdata[0]['NGAYKETTHUC']?>">
                  </div>
				  <div class="form-group">
                    <label >POSITION NAME</label>
                    <select name="TENCD"class="form-control"  required>
					<?php
					foreach($tenchucdanh as $tp)
					{
						if(levenshtein($rowdata[0]["TENCD"],$tp["tencd"])==0)
						{
					?>
					<option value="<?php echo $tp["tencd"]?>" selected><?php echo $tp["tencd"]?></option>
					<?php
						}
						else
						{
					?>
					<option value="<?php echo $tp["tencd"]?>" ><?php echo $tp["tencd"]?></option>
					<?php
						}
					}
					?>
					</select>
                  </div>
				  <div class="form-group">
                    <label >MANAGEMENT STAFF ID</label>
                    <input type="text" class="form-control" name="MANV_QL" placeholder="Enter"value="<?php echo $rowdata[0]['MANV_QL']?>">
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