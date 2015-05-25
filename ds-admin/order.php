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
 <div class='tumbbar'>
  <div class='header_tumbbar'>
      	All Order
  </div>
  
  <div class='desc'>
	<table align='center'>
	<tr align='center'>
		<td>No</td>
		<td>Pemesan</td>
		<td>Email</td>
		<td>Tlp</td>
		<td>Alamat</td>
		<td>Produk</td>
		<td>Nama Produk</td>
		<td>Color</td>
		<td>Size</td>
		<td>Harga</td>
	</tr> 
<?php
while($row=mysql_fetch_array($q)){
echo "
	<tr>
		<td align='center'>".$row['No_Order']."</td>
		<td>".$row['Nama']."</td>
		<td>".$row['Email']."</td>
		<td>".$row['Tlp']."</td>
		<td>".$row['Alamat']."</td>
		<td align='center'>".$row['No_Prod']."</td>
		<td>".$row['Nama_Prod']."</td>
		<td>".$row['Color']."</td>
		<td align='center'>".$row['Size']."</td>
		<td>".$row['Price']."</td>
	</tr>";
}
	
echo "</table>
	</div>
  </div>
</div>";

include "footer.php";
}?>