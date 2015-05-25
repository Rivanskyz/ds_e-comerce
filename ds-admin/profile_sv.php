<?php
include 'connect.php';

$id=$_POST['no_user'];
$u=$_POST['username'];
$p=$_POST['password'];
$e=$_POST['email'];
$n=$_POST['nama'];
mysql_query("UPDATE `darmawanstore`.`admin` SET `Username` = '$u',
`Nama` = '$n',
`Email` = '$e',
`Pass` = '$p' WHERE `admin`.`No_Admin` =1;") or die('update error');
header('location:profile.php');
?>