<?php
	include 'header.php';

if(!empty($_GET)){
$no=$_GET['no'];
$q=mysql_query("select * from products where No_Prod='$no'");
$row=mysql_fetch_array($q);
	echo '
        <div class="galery1">
        	
			<div class="subtitle1">
            '.$row["Name"].'
            </div>
			<a href="galery.php">
			<img src="'.$row["Picture"].'" width="500px"/></a>
			</a>		
			</div>
			<center><h2><a href="galery.php">Back</a></h2></center>
       </div>
	';
	
	
}else{
$q=mysql_query('select * from Products');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="galery">
			<a href="galery.php?no='.$row["No_Prod"].'">
            <img src="'.$row["Picture"].'" width="290px"/></a>
			</a>
			<div class="subtitle_galery">
            '.$row["Name"].'
            </div>
            
        </div>
	';
	}
}
?>

<?php
	include 'footer.php';
?>