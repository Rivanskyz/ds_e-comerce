<center>
<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}else{

include "header.php";
$s=$_SESSION['username'];

$q=mysql_query("select * from admin") or die ('select eroor');
$i=1;
echo "
<div class='main'>
 <div class='tumbbar'>
  <div class='header_tumbbar'>
    All Users
  </div>
  
  <div class='desc'>
	<table align='center'>
	<tr>
		<th>Nama</th>
		<th>Username</th>
		<th>Email</th>
	</tr>
  ";

while($row=mysql_fetch_array($q)){
echo "
	<tr>
		<td>".$row['Nama']." </td>
		<td>".$row['Username']."</td>
		<td>".$row['Email']."</td>
	</tr>
";
}
	
echo "</table>
	</div>
  </div>
</div>";

include "footer.php";
}?>