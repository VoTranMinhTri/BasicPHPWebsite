 <!-- Main Sidebar Container -->
 <?php
if(count($_COOKIE)== 2)
{
include($level."DB.php");
$username=$_COOKIE["username"];
$result=$db->prepare('SELECT CONCAT(HO," ",TENLOT," ",TEN) AS HOTEN,MACD FROM NHANVIEN,TAIKHOAN WHERE NHANVIEN.MATK=TAIKHOAN.MATK AND USERNAME=:username');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$hoten=$rowdata[0][0];
$chucdanh=$rowdata[0][1];
}
 else
 $hoten="NULL";
 ?>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $level."index.php"?>" class="brand-link">
      <img src="<?php echo $level.DIST_Path."img/AdminLTELogo.png"?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADITII</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $level.DIST_Path."img/user2-160x160.jpg"?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $hoten ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?php echo $level.PAGES.PRODUCT."Product.php"?>" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Products
                <!--<i class="fas fa-angle-left right"></i>-->
              </p>
            </a>
			</li>
			<li class="nav-item">
            <a href="<?php echo $level.PAGES.PRODUCTTYPE."ProductType.php"?>" class="nav-link">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Product type
              </p>
            </a>
          </li>
		  <?php
		  if($chucdanh == 2)
		  {
		  ?>
			<li class="nav-item">
            <a href="<?php echo $level.PAGES.STAFF."Staff.php"?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Staff
              </p>
            </a>
          </li>
		   <?php
		  }
		  ?>
		  <?php
		  if($chucdanh == 2)
		  {
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.POSITION."Position.php"?>" class="nav-link">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Position
              </p>
            </a>
          </li>
		   <?php
		  }
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.BRAND."Brand.php"?>" class="nav-link">
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Brand
              </p>
            </a>
          </li>
		  <?php
		  if($chucdanh == 2)
		  {
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.SALE."Sale.php"?>" class="nav-link">
              <i class="nav-icon fas fa-percent"></i>
              <p>
                Sale
              </p>
            </a>
          </li>
		   <?php
		  }
		  ?>
		  <?php
		  if($chucdanh == 2)
		  {
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.BILL."Bill.php"?>" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Bill
              </p>
            </a>
          </li>
		   <?php
		  }
		  ?>
			<li class="nav-item">
            <a href="<?php echo $level.PAGES.CUSTOMER."Customer.php"?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
		  	<li class="nav-item">
            <a href="<?php echo $level.PAGES.COMMENT."Comment.php"?>" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Comment
              </p>
            </a>
          </li>
		  <?php
		  if($chucdanh == 2)
		  {
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.ACCOUNT."Account.php"?>" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Account
              </p>
            </a>
          </li>
		  <?php
		  }
		  ?>
		   <?php
		  if($chucdanh == 2)
		  {
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.ACCOUNTTYPE."AccountType.php"?>" class="nav-link">
              <i class="nav-icon fas fa-file-text"></i>
              <p>
                Account type
              </p>
            </a>
          </li>
		   <?php
		  }
		  ?>
		  <?php
		  if($chucdanh == 1)
		  {
		  ?>
		   <li class="nav-item">
            <a href="<?php echo $level.PAGES.ORDER."TheOrder.php"?>" class="nav-link">
              <i class="nav-icon fas fa-dollar"></i>
              <p>
                The order
              </p>
            </a>
          </li>
		  <?php
		  }
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.PAGEOTHER."Statistical.php"?>" class="nav-link">
              <i class="nav-icon fas fa-bar-chart"></i>
              <p>
                Statistical
              </p>
            </a>
          </li>
		  <?php
		  if($chucdanh == 2)
		  {
		  ?>
		   <li class="nav-item">
            <a href="<?php echo $level.PAGES.SLIDE."Slide.php"?>" class="nav-link">
              <i class="nav-icon fas fa-dollar"></i>
              <p>
                Slide Home
              </p>
            </a>
          </li>
		  <?php
		  }
		  ?>
		  <li class="nav-item">
            <a href="<?php echo $level.PAGES.PAGEOTHER."ChangePassword.php"?>" class="nav-link">
              <i class="nav-icon fas fa-key"></i>
              <p>
                Change password
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="<?php echo $level.OTHER."logout.php"?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
			<script>
				const currentLocation=location.href;
				const menuItem=document.querySelectorAll('a.nav-link');
				const menuLength=menuItem.length;
				for(let i=0;i<menuLength;i++){
					if(menuItem[i].href==currentLocation){
						c = menuItem[i].childNodes;
						console.log(c.length);
						c[1].className="far fa-check-circle nav-icon";
					}
						
				}
			</script>
          </li>
        </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>