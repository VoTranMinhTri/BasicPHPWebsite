<html>
<?php
include("../../../"."DB.php");
if (isset($_GET["btn_submit"]))
{
$manv=$_GET["MANV"];
$ho=$_GET["HO"];
$tenlot=$_GET["TENLOT"];
$ten=$_GET["TEN"];
$ngaysinh=$_GET["NGAYSINH"];
$phai=$_GET["PHAI"];
$cccd=$_GET["CCCD"];
$sdt=$_GET["SDT"];
$diachi=$_GET["DIACHI"];
$ngaybdlam=$_GET["NGAYBDLAM"];
$ngayketthuc=$_GET["NGAYKETTHUC"];
$tencd=$_GET["TENCD"];
$result0=$db->prepare('select MACD from CHUCDANH where TENCD=:tencd');
$result0->bindValue(':tencd',$tencd,PDO::PARAM_STR);
$result0->execute();
$rowdata0=$result0->fetchALL();
$macd=$rowdata0[0][0];
$manvql=$_GET["MANV_QL"];
$matk=$_GET["MATK"];
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("INSERT INTO NhanVien VALUES(:manv, :ho, :tenlot,:ten, :ngaysinh, :phai,:cccd,:sdt, :diachi,:ngaybdlam,:ngayketthuc,:macd, :manvql,:matk, 1)");
$result->bindValue(':manv',$manv,PDO::PARAM_INT);
$result->bindValue(':ho',$ho,PDO::PARAM_STR);
$result->bindValue(':tenlot',$tenlot,PDO::PARAM_STR);
$result->bindValue(':ten',$ten,PDO::PARAM_STR);
$result->bindValue(':ngaysinh',$ngaysinh,PDO::PARAM_STR);
$result->bindValue(':phai',$phai,PDO::PARAM_STR);
$result->bindValue(':cccd',$cccd,PDO::PARAM_STR);
$result->bindValue(':sdt',$sdt,PDO::PARAM_STR);
$result->bindValue(':diachi',$diachi,PDO::PARAM_STR);
$result->bindValue(':ngaybdlam',$ngaybdlam,PDO::PARAM_STR);
$result->bindValue(':ngayketthuc',$ngayketthuc,PDO::PARAM_STR);
$result->bindValue(':macd',$macd,PDO::PARAM_INT);
$result->bindValue(':manvql',$manvql,PDO::PARAM_INT);
$result->bindValue(':matk',$matk,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("INSERT STAFF SUCCESS !");
	location.href = '../../../Pages/staff/AddStaff.php';</script>
<?php
}
else
{
?>
	<script>alert("INSERT STAFF UNSUCCESS !");
	location.href = '../../../Pages/staff/AddStaff.php'; </script>
<?php
}
}
?>
</html>