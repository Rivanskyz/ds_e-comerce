<?php
	include 'header.php';
?>    
    <div class="main">
    	<div class="sidebar">
        	<div class="subtitle1_2">
            our products
            </div>

<?php
$q=mysql_query('select * from products order by rand() limit 5');
while($row=mysql_fetch_array($q)){
	echo '
        	<div class="tumbnail">
            	<div class="subtitle2_1">
                '.$row["Nama"].'
                </div>
                <a href="#"><img src="'.$row["Img"].'" /></a>
            </div>
			';
}
?>
        </div>

<?php
$q=mysql_query('select * from Profile');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="content">
        	<div class="subtitle1">
            '.$row["Title"].'
            </div>
            
            <div class="desc">
            <p>'.$row["Desc"].'</p>
            </div>
       </div>
	';
}
?>
    </div>
<?php
	include 'footer.php';
?>