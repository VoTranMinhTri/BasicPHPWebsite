<?php
include($level."DB.php");
$result=$db->prepare('select * from slide');
$result->execute();
$rowdata=$result->fetchALL();
?>