<?php
session_start();

include 'connect.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$tst = $_POST['testimony'];

$ins="INSERT INTO `darmawanstore`.`testimony` (`No_Testi`, `Nama`, `Email`, `Testimony`) VALUES (NULL,'$nama', '$email', '$tst')";
mysql_query($ins) or die("ins error");
header("location:testimony.php");
?>