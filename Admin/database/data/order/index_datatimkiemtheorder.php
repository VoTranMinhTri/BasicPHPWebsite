<?php
include($level."DB.php");
$loaitimkiem=$_GET["LOAITIMKIEM"];
$status=$_GET["STATUS"];
if(levenshtein($status,"DANGXULY")==0)
$status=1;
else if(levenshtein($status,"DANGVANCHUYEN")==0)
$status=2;
else if(levenshtein($status,"DAGIAO")==0)
$status=3;
else if(levenshtein($status,"HUY")==0)
$status=4;
else
$status="";
$date=$_GET["DATE"];
if(levenshtein($loaitimkiem,"ID")==0)
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0 && levenshtein($status,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt');
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and donhang.TRANGTHAI= :status');
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and NGAYDAT= :date');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and MADON= :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and MADON= :search and NGAYDAT= :date');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and MADON= :search and donhang.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and NGAYDAT= :date and donhang.TRANGTHAI= :status');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and MADON= :search and NGAYDAT= :date and donhang.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
}
else
{
$search="%".$_GET["SEARCH"]."%";
if(levenshtein($search,"")==0 && levenshtein($status,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt');
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and donhang.TRANGTHAI= :status');
$result->bindValue(':status',$status,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and NGAYDAT= :date');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and donhang.sdt like :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and donhang.sdt like :search and NGAYDAT= :date');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and donhang.sdt like :search and donhang.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0)
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and NGAYDAT= :date and donhang.TRANGTHAI= :status');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MADON,donhang.SDT,TENKH,NGAYDAT,NGAYGIAO,donhang.TRANGTHAI from donhang,khachhang where donhang.sdt=khachhang.sdt and donhang.sdt like :search and NGAYDAT= :date and donhang.TRANGTHAI= :status');
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