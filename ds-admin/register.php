<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');

}else{
include 'header.php';

echo "
<div class='main'>
  <div class='tumbbar' style='margin-left:200px'>
	  <div class='header_tumbbar'>
      	Register
      </div>
	<div class='desc'>
		<form method='POST' action='register_sv.php'>
		<table align='center'>
			<tr>
				<td>Nama Lengkap </td>
				<td><input type='text' placeholder='nama lengkap..' name='nama'></td>
			</tr>
			<tr>
				<td>Username </td>
				<td><input type='text' placeholder='username..' name='username'/></td>
			</tr>
			<tr>
				<td>Password </td>
				<td><input type='text' placeholder='password..' name='password'/></td>
			</tr>
			<tr>
				<td>Email </td>
				<td><input type='text' placeholder='email..' name='email'/></td>
			</tr>
			<tr>
				<td colspan='2' align='center'><input type='submit' name='simpan' value='simpan'/></td>
			</tr>
		</table>
		</form>
        </div>
  </div>
</div>
";
include 'footer.php';
}
?>