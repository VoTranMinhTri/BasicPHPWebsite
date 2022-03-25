<?php
include($level."DB.php");
$status=$_GET["STATUS"];
if(levenshtein($status,"DANGXULY")==0)
$status=1;
else if(levenshtein($status,"DANGVANCHUYEN")==0)
$status=2;
else if(levenshtein($status,"DAGIAO")==0)
$status=3;
else
$status="";
$ngaygiao=$_GET["NGAYGIAO"];
$ngaydat=$_GET["NGAYDAT"];
$username=$_COOKIE["username"];
if(levenshtein($status,"")==0 && levenshtein($ngaygiao,"")==0 && levenshtein($ngaydat,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($ngaygiao,"")==0 && levenshtein($ngaydat,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and donhang.TRANGTHAI= :status');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0 && levenshtein($ngaygiao,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and NGAYDAT= :ngaydat');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':ngaydat',$ngaydat,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0 && levenshtein($ngaydat,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and NGAYGIAO= :ngaygiao');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':ngaygiao',$ngaygiao,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and NGAYGIAO= :ngaygiao and NGAYDAT= :ngaydat');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':ngaygiao',$ngaygiao,PDO::PARAM_STR);
$result->bindValue(':ngaydat',$ngaydat,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($ngaydat,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and NGAYGIAO= :ngaygiao and donhang.TRANGTHAI= :status');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':ngaygiao',$ngaygiao,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($ngaygiao,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and NGAYDAT= :ngaydat and donhang.TRANGTHAI= :status');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':ngaydat',$ngaydat,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang,taikhoan where donhang.sdt=khachhang.sdt and khachhang.matk=taikhoan.matk and username=:username and NGAYDAT= :ngaydat and donhang.TRANGTHAI= :status and NGAYGIAO= :ngaygiao');
$result->bindValue(':username',$username,PDO::PARAM_STR);
$result->bindValue(':ngaydat',$ngaydat,PDO::PARAM_STR);
$result->bindValue(':ngaygiao',$ngaygiao,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
?>