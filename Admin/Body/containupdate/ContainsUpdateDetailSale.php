<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Detail Sale</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Detail Sale</li>
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
                <h3 class="card-title">UPDATE Detail Sale</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.SALE."index_updatectsale.php"?>" method="get">
                <div class="card-body">
                  <div class="form-group">
                    <label >MASALE</label>
                    <input type="text" class="form-control" name="MASALE" placeholder="Enter" value="<?php echo $rowdata[0]['MASALE']?>" readonly="False">
                  </div>
                  <div class="form-group">
                    <label >MASP</label>
                    <input type="text" class="form-control" name="MASP" placeholder="Enter"value="<?php echo $rowdata[0]['MASP']?>" readonly="False">
                  </div>
				   <div class="form-group">
                    <label >CHIETKHAU</label>
                    <input type="text" class="form-control" name="CHIETKHAU" placeholder="Enter"value="<?php echo $rowdata[0]['CHIETKHAU']?>">
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