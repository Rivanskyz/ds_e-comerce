<center>
<?php
session_start();
if(empty($_SESSION['username'])){
header('location:login.php');
}else{
include "header.php";
$user=$_SESSION['username'];

$q=mysql_query("select * from admin where Username='$user'") or die ('select eroor');
?>
<div class="main">
	<div class="tumbbar">
      <div class="header_tumbbar">
      	Dashboard
      </div>
    	<div class="tumbnail">
        	<a href="profile.php">
			<img src="img/icon/profile.png" />
			Howdy, <?php echo $user; ?>
      	    </a>
        </div>
        <div class="tumbnail">
          <a href="alluser.php">
      <img src="img/icon/profile.png" />
        All Users
            </a>
        </div>
        <div class="tumbnail">
        	<a href="register.php">
			<img src="img/icon/profile.png" />
			add user
      	    </a>
        </div>
        <div class="tumbnail">
        	<a href="order.php">
			<img src="img/icon/profile.png" />
			order
      	    </a>
        </div>
        <div class="tumbnail">
        	<a href="testimony.php">
			<img src="img/icon/profile.png" />
			Testimony
      	    </a>
        </div>
      
    </div>
</div>
<?php
include "footer.php";
}
?>