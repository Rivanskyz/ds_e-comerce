<?php
	include 'header.php';
?>
    
    <div class="main">
    	<div class="tumbbar">

<?php
$q=mysql_query('select * from products order by rand() limit 4');
while($row=mysql_fetch_array($q)){
	echo '
        	<a href="products.php?no='.$row["No_Prod"].'" class="tumbnail">
            	<div class="subtitle2_1">
                '.$row["Name"].'
                </div>
                <img src="'.$row["Picture"].'" /><br>
				<div class="price2">
				Rp. '.number_format($row['Price'],2,',','.').'
				</div>
            </a>
			';
}
?>
        </div>

    </div>
<?php
	include 'footer.php';
?>