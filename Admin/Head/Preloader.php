<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
<?php
if(count($_COOKIE) == 1)
{
	if(levenshtein($level,"")==0)
	header('Location: ../Pages/signin.php');
	else
	header('Location: ../../../Pages/signin.php');
}
?>
  <!-- Preloader -->
  <!--<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo $level.DIST_Path."img/AdminLTELogo.png"?>" alt="Admin" height="60" width="60">
  </div>-->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo $level."index.php"?>" class="nav-link">Home</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->