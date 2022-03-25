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
$date=$_GET["DATE"];
if(levenshtein($loaitimkiem,"ID")==0)
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0 && levenshtein($status,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV');
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and HoaDon.TRANGTHAI= :status');
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and NGAYLAPHD= :date');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and MAHD= :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and MAHD= :search and NGAYLAPHD= :date');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and MAHD= :search and HoaDon.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and NGAYLAPHD= :date and HoaDon.TRANGTHAI= :status');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and MAHD= :search and NGAYLAPHD= :date and HoaDon.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
}
else
{
$search=$_GET["SEARCH"];
if(levenshtein($search,"")==0 && levenshtein($status,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV');
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($date,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and HoaDon.TRANGTHAI= :status');
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and NGAYLAPHD= :date');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0 && levenshtein($status,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and HoaDon.MANV= :search');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($status,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and HoaDon.MANV= :search and NGAYLAPHD= :date');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($date,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and HoaDon.MANV= :search and HoaDon.TRANGTHAI= :status');
$result->bindValue(':search',$search,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else if (levenshtein($search,"")==0)
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and NGAYLAPHD= :date and HoaDon.TRANGTHAI= :status');
$result->bindValue(':date',$date,PDO::PARAM_STR);
$result->bindValue(':status',$status,PDO::PARAM_INT);
$result->execute();
$rowdata=$result->fetchALL();
}
else
{
$result=$db->prepare('select MAHD,NGAYLAPHD,HoaDon.MANV,CONCAT(`HO`," ",`TENLOT`," ",`TEN`) AS `HOTEN`,HoaDon.SDT,HoaDon.TRANGTHAI from HoaDon,NhanVien WHERE HoaDon.MANV=NhanVien.MANV and HoaDon.MANV= :search and NGAYLAPHD= :date and HoaDon.TRANGTHAI= :status');
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