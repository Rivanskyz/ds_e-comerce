<?php
include 'header.php';
include 'connect.php';
?>
<div class="main">
	<div class="content">
    	<div class="subtitle1">
        Testimony
        </div>
    </div>
<?php
$q=mysql_query("select * from testimony limit 5");
while($row=mysql_fetch_array($q)){

echo '    <div class="content">
        <div class="desc">
        	<div class="subtitle1_1">
            	'.$row['Nama'].'
            </div>
			'.$row['Testimony'].'
        </div>
    </div>
	';
}
?>
	<div class="content">
    	        <div class="content">
        	<div class="subtitle1">
				Your Testimony?
            </div>
       	
			<div class="desc">
			
					<form name="form" method="post" action="tst_sv.php">
						<table>
							<tr>
								<td><b>Nama </b></td>
								<td> : </td>
								<td><input type="text" name="nama" value="<?php $row['Nama']; ?>" required/></td>
							</tr>
							<tr>
								<td><b>Email </b></td>
								<td> : </td>
								<td><input type="text" name="email" value="<?php $row['Email'];?>" required/></td>
							</tr>
							<tr>
								<td><b>Testimony </b></td>
								<td> : </td>
								<td><input type="textarea" name="testimony" value="<?php $row['Testimony'];?>" required/></td>
							</tr>
							
						</table>
							<input type="checkbox" required> Saya menyetujui semua syarat dan ketentuan yang berlaku.</input><br>
							<input class="button_input" type="submit" name="submit" value="Simpan"/>
							
				
					
					</form>

    </div>
</div>

<?php
include 'footer.php';
?>