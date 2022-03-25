<?php
class DP{
private static function connect_DB()
{
	$host='localhost';
	$dbname='qlbh';
	$us='root';
	$pass='';
	try{
		$conn= new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4'",$us,$pass,
		array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_PERSISTENT=>FALSE,
			PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
		)
		);
		return $conn;
	}
	catch(PDOException $e)
	{
		echo'<script> alert("Error: '. $e->getMessage().'");</script>';
		return null;
	}
}
private static function get_type($var)
{
	switch (gettype($var))
	{
		case 'integer': return PDO::PARAM_INT;
		case 'boolean': return PDO::PARAM_BOOL;
		case 'NULL': return PDO::PARAM_STR;
		default: return PDO::PARAM_STR;
	}
}
public static function run_query($query,$paras,$type){
try
{
	$con=DP::connect_DB();
	$h=$con->prepare($query);
	foreach($paras as $key=>$para)
	{
		$h->bindValue($key+1,$para,DP::get_type($para));
	}
	$h->execute();
	$result;
	switch($type)
	{
		case 1: $result = true; break;
		case 2: $result = $h->fetchAll(); break;
		case 3: $result = $con->lastInsertId(); break;
	}
	$con=null;
	return $result;
}
catch(PDOException $e)
{
	echo'<script>alert("'. $e->getMessage().'");</script>';
}
}
}
?>