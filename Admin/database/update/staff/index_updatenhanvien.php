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
$username=$_COOKIE["username"];
$result=$db->prepare("SELECT MANV FROM NHANVIEN,TAIKHOAN WHERE NHANVIEN.MATK=TAIKHOAN.MATK AND USERNAME=:username");
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
$manvht=$rowdata[0][0];
$manvql=$_GET["MANV_QL"];
if(levenshtein($_GET["TRANGTHAI"],"CON")==0)
$trangthai=1;
else
$trangthai=0;
if($manvht != $manv ||($manvht == $manv && $trangthai == 1))
{
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT );
$result=$db->prepare("UPDATE NhanVien SET HO=:ho, TENLOT=:tenlot, TEN=:ten, NGAYSINH=:ngaysinh, PHAI=:phai, CCCD=:cccd, SDT=:sdt, DIACHI=:diachi, NGAYBDLAM=:ngaybdlam, NGAYKETTHUC=:ngayketthuc, MACD=:macd, MANV_QL=:manvql,TRANGTHAI=:trangthai  WHERE MANV=:manv");
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
$result->bindValue(':trangthai',$trangthai,PDO::PARAM_INT);
$result->execute();
if($result->rowCount()> 0)
{
?>
	<script>alert("UPDATE STAFF SUCCESS !");
	location.href = '../../../Pages/staff/Staff.php'</script>
<?php
}
else
{
?>
	<script>alert("UPDATE STAFF UNSUCCESS !");
	location.href = '../../../Pages/staff/Staff.php';</script>
<?php
}
}
else
{
?>
	<script>alert("UPDATE STAFF UNSUCCESS ! ACCOUNT IS IN USE, YOU CANNOT SET STATUS TO DEACTIVE!");
	location.href = '../../../Pages/staff/Staff.php';</script>
<?php
}
}
?>
</html>