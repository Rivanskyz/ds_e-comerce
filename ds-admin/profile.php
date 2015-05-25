<center>
<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}else{

include "header.php";
$s=$_SESSION['username'];

$q=mysql_query("select * from admin where Username='$s'") or die ('select eroor');
$i=1;
$row=mysql_fetch_array($q);
echo "
<div class='main'>
 <div class='tumbbar'>
  <div class='header_tumbbar'>
      	Profile
  </div>
  
  <div class='desc'>
	<table align='center'>
	<tr>
		<th colspan='3'>Your Profile</th>
	</tr> 
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td>".$row['Nama']." </td>
	</tr>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>".$row['Username']."</td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td>".$row['Pass']."</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>:</td>
		<td>".$row['Email']."</td>
	</tr>
	<tr>
		<td></td>
	</tr>
	<tr>
		<td colspan='3' align='center'><a href='edit_profile.php'>Sunting Profile</a></td>
	</tr>";
$id=$row['No_Admin'];

	$i++;

	
echo "</table>
	</div>
  </div>
</div>";

include "footer.php";
}?>