<center>
<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}else{

include 'connect.php';
include "header.php";

$q1=mysql_query("select * from contact") or die ('select eroor');
$row1=mysql_fetch_array($q1);

echo"
	<div class='content'>
	 <div class='tumbbar'>
	  <div class='header_tumbbar'>
      	Sunting Profile
      </div>
	  <div class='desc'>
		<form method='POST' action='profile_sv.php'>
		<table align='center'>
			<tr>
				<th colspan='3'>Edit Profile</th>
			</tr>
			<tr>
				<td>No</td>
				<td><input type='text' placeholder='id..' name='no_user' value='".$row1['No_Admin']."'/></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type='text' placeholder='Nama Lengkap..' name='nama' value='".$row1['Nama']."'/></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type='text' placeholder='username..' name='username' value='".$row1['Username']."'/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type='text' placeholder='password..' name='password' value='".$row1['Pass']."'/></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type='text' placeholder='email..' name='email' value='".$row1['Email']."'/></td>
			</tr>
			<tr>
				<td colspan='2' align='center'><input type='submit' name='simpan' value='simpan'/></td>
			</tr>
			<tr>
				<td colspan='3' align='center'><a href='del.php?no_user=".$row1['No_Admin']."'>Delete</a></td>
			</tr>
		</table>
		</form>
	  </div>
	 </div>
	</div>


";
include "footer.php";
}?>