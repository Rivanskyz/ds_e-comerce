<?php
$h="localhost";
$u="root";
$p="";
$db="darmawanstore";

$con=mysql_connect($h,$u,$p) or die("con error");
mysql_select_db($db,$con) or die("db error");
?>