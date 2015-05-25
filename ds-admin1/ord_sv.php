<?php
session_start();

include 'connect.php';
$no_prod=$_POST['no_prod'];
$prod=$_POST['nama_prod'];
$color=$_POST['color'];
$size=$_POST['size'];
$price=$_POST['price'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$tlp=$_POST['tlp'];
$alamat = $_POST['alamat'];

//$ins = "INSERT INTO order VALUES('', '$no_prod','$prod', '$color','$size','$price','$nama', '$email', '$tlp','$alamat')";

$ins="INSERT INTO `darmawanstore`.`order` (`No_Order`, `No_Prod`, `Nama_Prod`, `Color`, `Size`, `Price`, `Nama`, `Email`, `Tlp`, `Alamat`) VALUES (NULL, '$no_prod', '$prod', '$color', '$size', '$price', '$nama', '$email', '$tlp', '$alamat')";
mysql_query($ins) or die("ins error");
header("location:ord_sc.php");
?>