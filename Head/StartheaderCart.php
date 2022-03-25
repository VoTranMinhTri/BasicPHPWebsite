<?php
session_start();
//var_dump($_POST);
if(isset($_POST['submit']))
{
	foreach($_POST as $masp=>$soluong)
	{
		if(($soluong==0) and $soluong)
		{
			unset($_SESSION['cart'][$masp]);
		}
		elseif(($soluong>0)and $soluong)
		{
			$_SESSION['cart'][$masp]['soluong']=$soluong;
		}
	}
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
if(count($_COOKIE)== 2)
$session_name = $_COOKIE["username"];
else
{
$session_name=$ip;
}
if(isset($_SESSION[$session_name])==false)
{
	$_SESSION[$session_name] = 1;
	include($level."DB.php");
	$result=$db->prepare("update luottruycap set soluong=soluong+1");
	$result->execute();
}
?>
<div id='cart'>
<?php
$checkcart=false;
if(isset($_SESSION['cart']))
{
	foreach($_SESSION['cart'] as $k)
	{
		if(isset($k))
		{
			$checkcart=true;
		}
	}
}
?>
<?php
if(count($_COOKIE)== 2)
{
include($level."DB.php");
$username=$_COOKIE["username"];
$result=$db->prepare('SELECT TENKH AS HOTEN FROM KHACHHANG,TAIKHOAN WHERE KHACHHANG.MATK=TAIKHOAN.MATK AND USERNAME=:username');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$hoten=$rowdata[0][0];
}
 ?>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href=<?php echo $level."index.php"?>><img src=<?php echo $level.IMG_Path."logo.png"?> alt=""/> </a>
		</div>
		
		<div class="h_icon">
	<ul class="icon1 sub-icon1" >
		<?php
		if(count($_COOKIE)==2)
		{
		?>
		<li><a class="active-icon c2" href="<?php echo $level.PAGES."information.php"?>"><i><?php echo $hoten ?></i></a>
				<ul class="sub-icon1 list" style="width:150px; left:0; z-index: 1001;  text-align:center;">
				<li><a href="<?php echo $level.PAGES."information.php"?>"  style="font-size:25px;">Information</a><a href=""></a></li>
				<li><a href="<?php echo $level.PAGES."changepassword.php"?>" style="font-size:25px;" >Change password</a><a href=""></a></li>
				<li><a href="<?php echo $level.PAGES."order.php"?>" style="font-size:25px;">My order</a><a href=""></a></li>
				<li><a href="<?php echo $level.DATABASE.CUSTOMER."logout.php"?>" style="font-size:25px;">Logout</a><a href=""></a></li>
				</ul>
		</li>
		<?php
		}
		else
		{
		?>
			<li><a class="active-icon btnlogin" href=<?php echo $level.PAGES."signin.php"?> style="margin-top:5px;"><p> SIGN IN</p></a></li>
		<?php
		}
		?>
		</ul>
		</div>
		<div class="h_icon">
		<ul class="icon1 sub-icon1">
			<li><a class="active-icon c1" href="<?php echo $level.PAGES."cart.php"?>"><i>Cart</i></a>
				<ul class="sub-icon1 list">
				<?php
				if($checkcart == false)
				{
				?>
					<li><h3><a href="<?php echo $level.PAGES."cart.php"?>">Shopping cart empty</h3></a></li>
				<?php
				}
				else
				{
				$item=$_SESSION['cart'];
				?>
					<li><h3><?php echo '<p>You have <a href="cart.php">'.count($item).' Item in cart<a/></p>';?></h3><a href=""></a></li>
					
				<?php
				}
				?>	
				</ul>
			</li>
		</ul>
		</div>
		<div class="h_search">
			<form action="<?php echo $level.PAGES."ketqua.php"?>" method="get">
    			<input type="text" name="txtsearch" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>

</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="h_menu">
			<ul>
				<li class="active"><a href=<?php echo $level."index.php"?>>Home</a></li> |
				<li><a href=<?php echo $level.PAGES."sale.php"?>>sale</a></li> |
				<li><a href=<?php echo $level.PAGES."handbags.php"?>>handbags</a></li> |
				<li><a href=<?php echo $level.PAGES."t-shirts.php"?>>t-shirts</a></li> |
				<li><a href=<?php echo $level.PAGES."pants.php"?>>pants</a></li> |
				<li><a href=<?php echo $level.PAGES."shoes.php"?>>shoes</a></li> |
				<li><a href=<?php echo $level.PAGES."service.php"?>>services</a></li> |
				<li><a href=<?php echo $level.PAGES."contact.php"?>>Contact us</a></li>
			</ul>
		</div>
		<div class="top-nav">
	          <nav class="nav">	        	
	    	    <a href="#" id="w3-menu-trigger"> </a>
	                  <ul class="nav-list" style="">
	            	        <li class="nav-item"><a class="active" href=<?php echo $level."index.php"?>>Home</a></li>
							<li class="nav-item"><a href=<?php echo $level.PAGES."sale.php"?>>Sale</a></li>
							<li class="nav-item"><a href=<?php echo $level.PAGES."handbags.php"?>>Handbags</a></li>
							<li class="nav-item"><a href=<?php echo $level.PAGES."t-shirts.php"?>>T-shirts</a></li> |
							<li class="nav-item"><a href=<?php echo $level.PAGES."pants.php"?>>Pants</a></li> |
							<li class="nav-item"><a href=<?php echo $level.PAGES."shoes.php"?>>Shoes</a></li>
							<li class="nav-item"><a href=<?php echo $level.PAGES."service.php"?>>Services</a></li>
							<li class="nav-item"><a href=<?php echo $level.PAGES."contact.php"?>>Contact</a></li>
	                 </ul>
	           </nav>
	             <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="js/responsive.menu.js"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>