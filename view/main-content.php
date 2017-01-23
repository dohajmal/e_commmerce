<?php  
include_once("../include/chargerClasse.php");
?>

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
        
        <div class="prod_details_tab addPanier"><a href="../Manager/addpanierManager.php?id=<?= $res1['id'] ?>" class="prod_buy">Add to Cart</a> <a href="Details.php" class="prod_details">Details</a> </div></div>
<?php } 
	?>
  </div></section></section>
  
    <section class="container sbr clearfix">


			<section id="content" class="twelve columns">
				
				<div class="main">
   <div class="center_title_bar">Recomended Products</div>
     <?php  
		   foreach($Recomm = $Recom->getRecom()->fetchall(PDO::FETCH_ASSOC) as $res){
			   ?>
        <div class="center_prod_box">
		
            <div class='product_title'><?= $res['nom'] ?></a></div>
	   <div class='product_img'><a href='#'><img src="images/<?= $res['image'] ?>.jpg" alt='' border='0' style="width: 94px;height: 71px;"/></a></div>
      <div class='prod_price'><span class='reduce'><?= $res['new_prix'] ?> DT </span><span class='price'><?= number_format($res['prix'],3,',',' '); ?> DT </span></div>
        <div class="prod_details_tab addPanier"> <a href="../Manager/addpanierManager.php?id=<?= $res['id'] ?>" class="prod_buy">Add to Cart</a><a href="Details.php?id=<?= $res['id'] ?>" class="prod_details">Details</a> </div> </div>
      <?php } ?> 
	</div></section></section>
		
	  