<?php
	include 'header.php';
?>
    <div class="main">
<?php
$q=mysql_query('select * from Contact');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="content">
        	<div class="subtitle_contact">
            '.$row["Title"].'
            </div>
            
            <div class="desc">
            	<div class="contact">
					<a href="'.$row["Link"].'"><img src="'.$row["Logo"].'"/></a>
					<div class="uname">
						'.$row["Desc"].'
					</div>
				</div>
            </div>
       </div>
	';
}
?>
    </div>
<?php
	include 'footer.php';
?>