<center>
<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}else{

include "header.php";
$s=$_SESSION['username'];

$q=mysql_query("select * from `order`") or die ('select eroor');
$i=1;
?>
<div class='main'>
  
  <div class='desc'>
 
	<table align='center'>
	<tr align='center'>
		<td>No</td>
		<td>Pemesan</td>
		<td>Contact</td>
		<td>No<br>Prod</td>
		<td>Detail Pesanan</td>
		<td>Harga</td>
	</tr> 
<?php
while($row=mysql_fetch_array($q)){
echo "
	<tr>
		<td align='center'>".$row['No_Order']."</td>
		<td>".$row['Nama']."</td>
		<td>".$row['Email']."<br>
		".$row['Tlp']."</br>
		".$row['Alamat']."</td>
		<td align='center'>".$row['No_Prod']."</td>
		<td>".$row['Nama_Prod']."<br> 
		".$row['Color']." <br>
		".$row['Size']." </td>
		<td>".$row['Price']."</td>
	</tr>";
}
	
echo "</table>
	</div>
</div>";

include "footer.php";
}?>