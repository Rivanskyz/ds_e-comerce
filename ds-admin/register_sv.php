<?php
include 'connect.php';

$u=$_POST['username'];
$p=$_POST['password'];
$e=$_POST['email'];
$n=$_POST['nama'];

mysql_query("insert into admin value (NULL, '$u', '$n', '$e', '$p')");
header('location:index.php');
?>