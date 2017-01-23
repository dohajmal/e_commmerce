<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nouveau Mini Projet</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>

</head>
<body>
<?php session_start();?>
<div id="main_container">

<?php include 'header.php'; ?>
<?php include 'MenuG.php'; ?>
  <div id="main_content">
<?php include 'sidebarD.php'; ?>
    <!-- end of left content -->
    <div class="center_content">
     <?php include 'main-content.php'; ?>
    </div>
	
    <!-- end of center content -->
 <?php include 'sidebarG.php' ; ?>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include 'footer.php';?>
</div>
</body>
</html>
