<center>
<?php
include 'connect.php';

$id=$_GET['no_user'];
mysql_query("delete from admin where No_Admin=$id") or die("delete error");
header("location:index.php");
?>
