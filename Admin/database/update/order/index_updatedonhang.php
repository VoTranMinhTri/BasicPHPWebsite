<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$username=$_COOKIE["username"];
$result=$db->prepare("SELECT MANV FROM NHANVIEN,TAIKHOAN WHERE NHANVIEN.MATK=TAIKHOAN.MATK AND USERNAME=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$manv=$rowdata[0][0];
$madh=$_GET["MADON"];
$sdt=$_GET["SDT"];
$ngaydat=$_GET["NGAYDAT"];
$ngaygiao=$_GET["NGAYGIAO"];
if(levenshtein($_GET["TRANGTHAI"],"DANGXULY")==0)
$trangthai=1;
else if(levenshtein($_GET["TRANGTHAI"],"DANGVANCHUYEN")==0)
$trangthai=2;
else if(levenshtein($_GET["TRANGTHAI"],"DAGIAO")==0)
$trangthai=3;
else
$trangthai=4;
if($trangthai == 4)
{
$result=$db->prepare("SELECT MASP,SIZE,SOLUONG FROM CT_DONHANG WHERE MADON = :madh");
$result->bindValue(':madh',$madh,PDO::PARAM_INT);
$result->execute();
$ct_don=$result->fetchALL();
foreach($ct_don as $tp)
{
	$masp=$tp["MASP"];
	$size=$tp["SIZE"];
	$result=$db->prepare("select soluong from sanpham where masp=:masp and size=:size");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->execute();
	$rowdata=$result->fetchALL();
	$soluongkho=$rowdata[0][0];
	$soluongcapnhat=$soluongkho + $tp["SOLUONG"];
	$result=$db->prepare("update sanpham set soluong=:soluongcapnhat where masp=:masp and size=:size");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->bindValue(':soluongcapnhat',$soluongcapnhat,PDO::PARAM_INT);
	$result->execute();
}
}
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE DONHANG SET MADON=:madh, sdt=:sdt, NGAYDAT=:ngaydat,NGAYGIAO=:ngaygiao,TRANGTHAI=:trangthai WHERE MADON=:madh");
$result->bindValue(':madh',$madh,PDO::PARAM_INT);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':ngaydat',$ngaydat,PDO::PARAM_STR);
$result->bindValue(':ngaygiao',$ngaygiao,PDO::PARAM_STR);
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
if($trangthai == 3)
{
$result=$db->prepare('select MAX(MAHD)+1 from HOADON');
$result->execute();
$rowdata=$result->fetchALL();
$mahd=$rowdata[0]['MAX(MAHD)+1'];
$ngaylaphd= date('Y-m-j');
$result=$db->prepare("INSERT INTO HOADON VALUES( :mahd,:ngaylaphd,:manv,:sdt,1)");
$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
$result->bindValue(':ngaylaphd',$ngaylaphd,PDO::PARAM_STR);
$result->bindValue(':manv',$manv,PDO::PARAM_INT);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->execute();
$result=$db->prepare("SELECT * FROM ct_donhang WHERE MADON=:madh");
$result->bindValue(':madh',$madh,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
foreach($rowdata as $tp)
{
	$masp=$tp["MASP"];
	$soluong=$tp["SOLUONG"];
	$gia=$tp["GIA"];
	$size=$tp["SIZE"];
	$result=$db->prepare("SELECT CHIETKHAU FROM CT_SALE WHERE MASP=:masp");
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->execute();
	$datack=$result->fetchALL();
	if(count($datack)==0)
	{
	$chietkhau=0;
	}
	else
	{
	$chietkhau=$datack[0][0];
	}
	$result=$db->prepare("INSERT INTO CT_HOADON VALUES( :mahd,:masp,:size,:soluong,:gia,:chietkhau)");
	$result->bindValue(':mahd',$mahd,PDO::PARAM_INT);
	$result->bindValue(':masp',$masp,PDO::PARAM_INT);
	$result->bindValue(':size',$size,PDO::PARAM_INT);
	$result->bindValue(':soluong',$soluong,PDO::PARAM_INT);
	$result->bindValue(':gia',$gia,PDO::PARAM_STR);
	$result->bindValue(':chietkhau',$chietkhau,PDO::PARAM_STR);
	$result->execute();
}
}
?>
	<script>alert("UPDATE ORDER SUCCESS !");
	location.href = '../../../Pages/order/TheOrder.php';</script>
<?php
}
else
{
?>
	<script>alert("UPDATE ORDER UNSUCCESS !");
	location.href = '../../../Pages/order/TheOrder.php';</script>
<?php
}
}
?>
</html>