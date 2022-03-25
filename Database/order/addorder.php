<?php
include("../../DB.php");
if (isset($_GET["submit"]))
{
if(count($_COOKIE)==2)
{
session_start();
$cart=$_SESSION['cart'];
$j=0;
foreach($_SESSION['cart'] as $cartitem)
{
	$masp=$cartitem['masp'];
	$soluong=$cartitem['soluong'];
	$size=$cartitem['size'];
	$result=$db->prepare("select soluong from sanpham where masp=:masp and size=:size");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->execute();
	$rowdata=$result->fetchALL();
	$soluongkho=$rowdata[0][0];
	if($soluongkho < $soluong)
	{
	?>
	<script>alert("ORDER UNSUCCESS ! NOT ENOUGH PRODUCT");
	location.href = '../../Pages/cart.php';</script>
	<?php
	$j=1;
	}
	else
	{
	$soluongconlai=$soluongkho-$soluong;
	$result=$db->prepare("update sanpham set soluong=:soluongconlai where masp=:masp and size=:size");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->bindValue(':soluongconlai',$soluongconlai,PDO::PARAM_INT);
	$result->execute();
	}
}
if($j==0)
{
//$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare('select MAX(MADON)+1 from DONHANG');
$result->execute();
$rowdata=$result->fetchALL();
if(levenshtein($rowdata[0][0],"")==0)
$madon=1;
else
$madon=$rowdata[0]['MAX(MADON)+1'];
$ngaydat= date('Y-m-j');
$ngaygiao=strtotime ( '+5 day' , strtotime ( $ngaydat ) ) ;
$ngaygiao=date('Y-m-j',$ngaygiao);
$username=$_COOKIE['username'];
$result=$db->prepare("select SDT FROM khachhang,taikhoan WHERE khachhang.matk=taikhoan.matk and username=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$sdt=$rowdata[0][0];
$result=$db->prepare("INSERT INTO DONHANG VALUES( :madon,:sdt,:ngaydat,:ngaygiao,1)");
$result->bindValue(':madon',$madon,PDO::PARAM_INT);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':ngaydat',$ngaydat,PDO::PARAM_STR);
$result->bindValue(':ngaygiao',$ngaygiao,PDO::PARAM_STR);
$result->execute();
foreach($_SESSION['cart'] as $cartitem)
{
	$i=0;
	$masp=$cartitem['masp'];
	$gia=$cartitem['gia'];
	$soluong=$cartitem['soluong'];
	$size=$cartitem['size'];
	$result=$db->prepare("INSERT INTO CT_DONHANG VALUES( :madon,:masp,:size,:gia,:soluong)");
	$result->bindValue(':madon',$madon,PDO::PARAM_INT);
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->bindValue(':gia',$gia,PDO::PARAM_INT);
	$result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
	$result->execute();
	if($result->rowCount()> 0)
	$i++;
}
if($i> 0)
{
?>
	<script>alert("ORDER SUCCESS !");
	location.href = '../cart/delcart.php';</script>
<?php
}
else
{
?>
	<script>alert("ORDER UNSUCCESS !");
	location.href = '../../Pages/cart.php';</script>
<?php
}
}
}
else
{
?>
	<script>alert("YOU ARE NOT LOGGED IN !");
	location.href = '../../Pages/signin.php';</script>
<?php
}
}
?>