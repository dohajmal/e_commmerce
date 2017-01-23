<?php
include_once ('../include/chargerClasse.php'); 
 $id_mani=$_GET['id_mani'];  
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Nouveau Mini Projet</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="js/boxOver.js"></script>

</head>
<body>

<div id="main_container">

<?php include 'header.php'; ?>
<?php include 'MenuG.php'; ?>
  <div id="main_content">
   <?php include 'sidebarGpromo.php'; ?>
>
    <div class="center_content">
	<section id="content" class="twelve columns">
				
				<div class="recent-list-cars">
			<?php		$Manprod = $ptMa->getNom($id_mani)->fetch(PDO::FETCH_OBJ)
			   ?>
					   <div class="center_title_bar">Products <?php echo $Manprod->nom ; ?></div>
   
	<?php
	foreach($Manprod = $spt->getProdManipromo($id_mani)->fetchall(PDO::FETCH_ASSOC) as $res){
			   ?>
               
        <div class="center_prod_box">
          <div class="product_title"><?= $res['nom'] ?> </a></div>
          <div class="product_img"><img src="images/<?= $res['image'] ?>.jpg" alt="" border="0" style="width: 94px;height: 71px;" /></a></div>		  
            <div class='prod_price'><span class='reduce'><?= number_format($res['prix'],3,',',' '); ?> DT </span> <span class='price'><?= number_format($res['new_prix'],3,',',' '); ?>  DT</span></div>
        
        <div class="prod_details_tab addPanier"><a href="../Manager/addpanierManager.php?id=<?= $res['id'] ?>" class="prod_buy">Add to Cart</a> <a href="DetailPromo.php?id=<?php echo $res1['id'] ; ?>" class="prod_details">Details</a> </div></div>
<?php } ?>
  </div></section>
    
    </div>
 <?php include 'sidebarDpromo.php'; ?>
    <!-- end of right content -->
  </div>
  <!-- end of main content -->
<?php include 'footer.php';?>
</div>
</body>
</html>
