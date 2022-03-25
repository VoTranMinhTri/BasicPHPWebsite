<?php
$conn=('mysql:host=localhost;dbname=qlbh');//port=3307 may truong
$username="root";
$password="";
$option=array(
PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8",
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
);
try
{
	$db=new PDO($conn,$username,$password,$option);
}
catch(PDOException $e)
{
	echo $e ->getMessage();
	exit();
}
?>