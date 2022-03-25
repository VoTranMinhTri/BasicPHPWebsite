<?php
include($level."DB.php");
$result=$db->prepare('select MAX(MASLIDE)+1 from slide');
$result->execute();
$rowdata=$result->fetchALL();
if($rowdata[0][0]==null)
$maslidenew=1;
else
$maslidenew=$rowdata[0]['MAX(MASLIDE)+1'];
// var_dump($result);
// var_dump($rowdata);
?>