<?php
include($level."DB.php");
$loaitimkiem=$_GET["LOAITIMKIEM"];
$status=$_GET["STATUS"];
if(levenshtein($status,"CON")==0)
$status=1;
else if(levenshtein($status,"KHONGCON")==0)
$status=2;
else
$status="";
$date="%".$_GET["DATE"]."%";
if(levenshtein($loaitimkiem,"ID")==0)
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0 && levenshtein($status,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK');
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and THOIGIAN like :date');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and MASP= :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and MASP= :search and THOIGIAN like :date');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and MASP= :search and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and THOIGIAN like :date and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and MASP= :search and THOIGIAN like :date and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
else
{
$search="%".$_GET["SEARCH"]."%";
if(levenshtein($search,"")==0 && levenshtein($status,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK');
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and THOIGIAN like :date');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and USERNAME= :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and USERNAME= :search and THOIGIAN like :date');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and USERNAME= :search and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0)
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and THOIGIAN like :date and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MABL,MASP,BINHLUAN.MATK,NOIDUNG,THOIGIAN,SIZE,BINHLUAN.TRANGTHAI,USERNAME from BINHLUAN,TAIKHOAN where BINHLUAN.MATK=TAIKHOAN.MATK and USERNAME= :search and THOIGIAN like :date and BINHLUAN.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
// var_dump($result);
// var_dump($rowdata);
?>