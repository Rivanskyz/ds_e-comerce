<center><?php
session_start();
include 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];

$q=mysql_query("select * from admin where Username='$username' and Pass='$password'");
$row=mysql_fetch_array($q);
if($row['uname']==$username and $row['pass']==$password){
$_SESSION['username']=$username;
header('location:index.php');
}else{
echo "GAGAL OM!!";
header("location:login.php");
}

?>