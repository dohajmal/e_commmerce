<?php
if(isset($_GET["logout"])|| empty($_GET["logout"])|| $_GET["logout"]==1){
	        session_start();
			session_destroy();
			  header("location:../view/index.php?logoutt=1");
}
?>