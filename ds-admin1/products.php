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
            
            <div class="desc">
 					<a href="products.php"><img src="'.$row["Picture"].'" width="500px"/></a>
					<div class="price1">
						'.$row['Gender'].' '.$row['Brand'].'<br>
						'.$row['Color'].'<br>
						'.$row['Size'].'<br>
						'.$row['Stock'].' Pair<br>
						Rp. '.number_format($row['Price'],2,',','.').'<br>
					<div class="button">
					<a href="order.php?no='.$row["No_Prod"].'">Order Now</a>
					</div>
					<div class="button">
					<a href="products.php">Other Products</a>
					</div>
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