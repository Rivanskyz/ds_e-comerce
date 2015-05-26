<?php
	include 'header.php';
?>
    <div class="main">  

<?php
if(!empty($_GET)){
$no=$_GET['no'];
$q=mysql_query("select * from Products where No_Prod='$no'");
$row=mysql_fetch_array($q);
	echo '
        <div class="content">
        	<div class="subtitle1">
            '.$row["Name"].'
            </div>
       	<div class="content">
			<img src="'.$row["Picture"].'" width="400px"/>
            <div class="desc_right">
			
					<form name="form" method="post" action="ord_sv.php">
						<table>
							<tr>
								<td><b>No Product </b></td>
								<td> : </td>
								<td><input type="text" name="no_prod" value="'.$row['No_Prod'].'" size="10px" readonly/></td>
							</tr>
							<tr>
								<td><b>Nama Product </b></td>
								<td> : </td>
								<td><input type="text" name="nama_prod" value="'.$row['Name'].'" size="40px" readonly/></td>
							</tr>
							<tr>
								<td><b>Price </b></td>
								<td> : </td>
								<td>Rp. <input type="hiden" name="price" value="'.$row['Price'].'" readonly/></td>
							</tr>
							<tr>
								<td><b>Color* </b></td>
								<td> : </td>
								<td><input type="text" name="color" required/> '.$row['Color'].'</td>
							</tr>
							<tr>
								<td><b>Size* </b></td>
								<td> : </td>
								<td><input type="text" name="size" required/> '.$row['Size'].'</td>
							</tr>
							<tr>
								<td><b>Nama* </b></td>
								<td> : </td>
								<td><input type="text" name="nama" required/></td>
							</tr>
							<tr>
								<td><b>Email*</b></td>
								<td> : </td>
								<td><input type="text" name="email" required/></td>
							</tr>
							<tr>
								<td><b>Tlp/HP*</b></td>
								<td> : </td>
								<td><input type="text" name="tlp" required/></td>
							</tr>
							<tr>
								<td><b>Alamat*</b></td>
								<td> : </td>
								<td><input type="text" name="alamat" size="40px" required/></td>
							</tr>
						</table>
							<input type="checkbox" required> Saya menyetujui semua syarat dan ketentuan yang berlaku.</input><br>
							<input class="button_input" type="submit" name="submit" value="Simpan"/>
					
					</form>
			</div>
		</div>
       </div>
	';
	
	
}else{
echo '<div class="tumbbar">';
$q=mysql_query('select * from Products');
while($row=mysql_fetch_array($q)){
	echo '
        
        	<div class="tumbnail">
            	<div class="subtitle2_1">
                '.$row["Name"].'
                </div>
                <a href="products.php?no='.$row["No_Prod"].'"><img src="'.$row["Picture"].'" /></a>
				<div class="subtitle2_1">
                Rp. '.number_format($row['Price'],2,',','.').'
                </div>
                
            </div>
       
	';
	}
echo '</div>';
}
?>
    </div>
<?php
	include 'footer.php';
?>