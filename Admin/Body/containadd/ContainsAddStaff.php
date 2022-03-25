<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Staff</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Add Staff</li>
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
                <h3 class="card-title">ADD Staff</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.ADD.STAFF."index_insertnhanvien.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >STAFF ID</label>
                    <input type="text" class="form-control" name="MANV" placeholder="Enter" value="<?php echo $manvnew ?>" required readonly>
                  </div>
                  <div class="form-group">
                    <label >SURNAME</label>
                    <input type="text" class="form-control" name="HO" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >MIDDLE NAME</label>
                    <input type="text" class="form-control" name="TENLOT" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >NAME</label>
                    <input type="text" class="form-control" name="TEN" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >BIRTHDAY</label>
                    <input type="date" class="form-control" name="NGAYSINH" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >GENDER</label>
                    <select name="PHAI"class="form-control"  required>
					<option value="NAM">MALE</option>
					<option value="NU">FEMALE</option>
					</select>
                  </div>
				   <div class="form-group">
                    <label >CITIZEN IDENTITY</label>
                    <input type="text" class="form-control" name="CCCD" placeholder="Enter" required>
                  </div>
				   <div class="form-group">
                    <label >PHONE NUMBER</label>
                    <input type="text" class="form-control" name="SDT" placeholder="Enter" required>
                  </div>
				   <div class="form-group">
                    <label >ADDRESS</label>
                    <input type="text" class="form-control" name="DIACHI" placeholder="Enter" required>
                  </div>
				   <div class="form-group">
                    <label >START DAY</label>
                    <input type="date" class="form-control" name="NGAYBDLAM" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >END DAY</label>
                    <input type="date" class="form-control" name="NGAYKETTHUC" placeholder="Enter">
                  </div>
				  <div class="form-group">
                    <label >POSITION NAME</label>
                    <select name="TENCD"class="form-control"  required>
					<?php
					foreach($tenchucdanh as $tp)
					{
					?>
					<option value="<?php echo $tp["tencd"]?>"><?php echo $tp["tencd"]?></option>
					<?php
					}
					?>
					</select>
                  </div>
				  <div class="form-group">
                    <label >MANAGEMENT STAFF ID</label>
                    <input type="text" class="form-control" name="MANV_QL" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >ACCOUNT ID</label>
                    <input type="text" class="form-control" name="MATK" placeholder="Enter" required>
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