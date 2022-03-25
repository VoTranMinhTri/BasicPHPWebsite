<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Slide</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Update Slide</li>
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
                <h3 class="card-title">Update Slide</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.UPDATE.SLIDE."index_updateslide.php"?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <input type="text" hidden="true" name="IDSLIDE" placeholder="Enter" value="<?php echo $rowdata[0]['MASLIDE']?>" >
					<input type="text" hidden="true" name="TXTHINHANH" placeholder="Enter" value="<?php echo $rowdata[0]['HINHANH']?>">
                  <div class="form-group">
                    <label >TITLE</label>
                    <input type="text" class="form-control" name="TITLE" placeholder="Enter" value="<?php echo $rowdata[0]['TIEUDE']?>" required>
                  </div>
				  <div class="form-group">
                    <label >CONTENT</label>
                    <input type="text" class="form-control" name="CONTENT" placeholder="Enter" value="<?php echo $rowdata[0]['NOIDUNG']?>" required>
                  </div>
				  <div class="form-group">
                    <label >LINK</label>
                    <input type="text" class="form-control" name="LINK" placeholder="Enter" value="<?php echo $rowdata[0]['LINK']?>" required>
                  </div>
				  <div class="form-group">
                    <label >PICTURE</label>
                    <input type="file" class="form-control" name="IMAGE"  >
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