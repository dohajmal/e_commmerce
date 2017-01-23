<?php  
include_once ('../include/chargerClasse.php');
  
?>
   <div class="left_content">
      <div class="title_box">Categories</div>
      <ul class="left_menu">

<?php  
		   foreach($Categoo = $ctgorie->getList()->fetchall(PDO::FETCH_ASSOC) as $res){
			   
			   ?>
           <li class="odd"><a href="Categorie.php?id_mani=<?=  $id_mani ?>&&id_categ=<?= $res['id'] ?>" ><?= $res['nom'] ?></a></li>
		   <?php } ?>
      </ul>
		   
      <div class="title_box">Special Products</div>

      <div class="border_box">

        	<?php  
		   foreach($Spttt = $spt->getpromo()->fetchall(PDO::FETCH_ASSOC) as $res1){
			   ?>
	    <div class="border_box">
     <div class='product_title'><a href='#'> <?= $res1['nom'] ?></a></div>
	   <div class='product_img' ><a href='#'><img src='images/<?= $res1['image'] ?>.jpg' alt='' border='0' style="width: 94px;height: 71px;" /></a></div>
        <div class='prod_price'><span class='reduce'><?= $res1['new_prix'] ?> DT </span> <span class='price'><?= $res1['prix'] ?> Dt </span></div>
      </div>
      
	

<?php 
		   } ?>
      </div>
      <div class="title_box">Newsletter</div>
      <div class="border_box">
        <input type="text" name="newsletter" class="newsletter_input" value="" PLACEHOLDER="Your email"/>
        <a href="http://all-free-download.com/free-website-templates/" class="join">subscribe</a> </div>
     
    </div>
