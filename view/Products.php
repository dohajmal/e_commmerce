
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e_commerce - Contact</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
</head>
<body>
<div id="main_container">

<?php include 'header.php'; ?>
<?php include 'MenuG.php'; ?>
  <div id="main_content">

    <?php include 'sidebarD.php'; ?>
    <div class="center_content">
        <section class="container sbr clearfix">


			<section id="content" class="twelve columns">
				
				<div class="main">
					   <div class="center_title_bar">Products</div>
   
	<?php   foreach($prod = $ptMa->getListprotuct()->fetchall(PDO::FETCH_ASSOC) as $res1){
			   ?>
               
        <div class="center_prod_box">
          <div class="product_title"><?= $res1['nom'] ?> </a></div>
          <div class="product_img"><img src="images/<?= $res1['image'] ?>.jpg" alt="" border="0" style="width: 94px;height: 71px;" /></a></div>		  
          <div class="prod_price"><span class="price"><?= number_format($res1['prix'],3,',',' '); ?> DT</span></div>
        
        <div class="prod_details_tab addPanier"><a href="../Manager/addpanierManager.php?id=<?= $res1['id'] ?>" class="prod_buy">Add to Cart</a> <a href="Details.php?id=<?= $res1['id'] ?>" class="prod_details">Details</a> </div></div>
<?php } 
	?>
  </div></section></section>
	</div>
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

