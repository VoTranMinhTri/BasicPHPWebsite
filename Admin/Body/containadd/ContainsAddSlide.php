<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Slide</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo $level."index.php"?>">Home</a></li>
              <li class="breadcrumb-item active">Add Slide</li>
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
                <h3 class="card-title">ADD Slide</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo $level.DATABASE.ADD.SLIDE."index_insertslide.php"?>" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >SLIDE ID</label>
                    <input type="text" class="form-control" name="MASLIDE" placeholder="Enter" required value="<?php echo $maslidenew ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label >TITLE</label>
                    <input type="text" class="form-control" name="TITLE" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >CONTENT</label>
                    <input type="text" class="form-control" name="CONTENT" placeholder="Enter" required>
                  </div>
				  <div class="form-group">
                    <label >LINK</label>
                    <input type="text" class="form-control" name="LINK" placeholder="Enter" required>
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