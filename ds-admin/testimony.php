<center>
<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}else{

include "header.php";
$s=$_SESSION['username'];

$q=mysql_query("select * from `testimony`") or die ('select eroor');
$i=1;
?>
<div class='main'>
 <div class='tumbbar'>
  <div class='header_tumbbar'>
      	All Testimony
  </div>
  
  <div class='desc'>
	<table align='center'>
	<tr align='center'>
		<td>No</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Testimony</td>
	</tr> 
<?php
while($row=mysql_fetch_array($q)){
echo "
	<tr>
		<td align='center'>".$row['No_Testi']."</td>
		<td>".$row['Nama']."</td>
		<td>".$row['Email']."</td>
		<td>".$row['Testimony']."</td>
	</tr>";
}
	
echo "</table>
	</div>
  </div>
</div>";

include "footer.php";
}?>