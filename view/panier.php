<?php  
include_once("../include/chargerClasse.php");
$panier = new panier();	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link href="stylepan.css" rel='stylesheet' type='text/css'>

<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="iecss.css" />
<![endif]-->
<script type="text/javascript" src="js/boxOver.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/main.js"></script>
<![endif]-->
</head>
<body>

<div id="main_container">

<?php include 'header.php'; ?>
<?php include 'MenuG.php'; ?>

  <div id="main_content">
 
<div class="CSSTableGenerator" >
 
		<?php 
					//recuperer les clé du tableau
					$ids =array_keys($_SESSION['panier']);
					
					//si j'envoi le panier est vide 
					if(empty($ids)){
						$Prod=array();
					}else{
					//implode recuperer les valeur du tableau
					$Prod=$db->reqObj('SELECT * FROM produit where id IN ('.implode(',',$ids).')');
					//var_dump($Prod,$id);
						//var_dump($Prod[1]) ;
						
					}
					foreach($Prod as $produit){
					?>
				<form method="POST" action="../Manager/commande.php">
                <table >
				
                    <tr>
                        <td>
                            Photo
                        </td>
                        <td >
                           Name
                        </td>
                        <td>
                            Price
                        </td>
					
						 <td>
                            Quantity
                        </td>
						 <td>
                            Actions
                        </td>
                    </tr>
					
			
                    <tr>
					
					
                        <td >
                          <div class='product_img'><a href='#'><img src="images/<?= $produit->image; ?>.jpg" alt='' border='0'style="width: 94px;height: 71px;" /></a></div>
						    <?php $image=$produit->image;?>
						  <input type = "hidden" name = "image" value = "<?=$produit->image;?>" />
						  <input type = "hidden" name = "id" value = "<?=$produit->id;?>" />
                        </td>
                        <td>
                          <div class="product_title" name="nom"><?= $produit->nom; ?> </a></div>
						  <?php $nom=$produit->nom;?>
						  <input type = "hidden" name = "nom" value = "<?=$produit->nom;?>" />
                        </td>
                        <td>
                           <div class="prod_price" name="prix"><span class="price"><?= number_format($produit->prix,3,',',' '); ?> DT</span></div>
						    <?php $prix=$produit->prix;?>
						  <input type = "hidden" name = "prix" value = "<?=$produit->prix;?>" />
                        </td>
<?php                       
					/*   <td >
                             <div class='prod_price'><span class='reduce'>new_prix TTC </span></div>
                        </td> */?>
                        <td>
             <?php /*name='panier[quantity][<?= $produit->id ?>]' */?>          
			 <div class='product_qte' ><input    name="qte" type="number" value="<?= $_SESSION['panier'][$produit->id]; ?>"></div>
						       <?php $qte=$_SESSION['panier'][$produit->id];
						 ?>
		
                        </td>
                        <td>
                     <a href="panier.php?delPanier=<?= $produit->id;?>" class="del"><img src="images/del.jpg" alt='' border='0' /></a>
					<input type="submit" value="Commande">
					</form>
                        </td>
                    </tr>
			
                </table>
				</br>
				<?php } ?>
				<div class="tot" style="float: right;margin-top: 4%;padding: 12px;">
			
				<div class="rowtotal"style="padding:13px;">	
                    Quantity Total:<span class="total_qte" style="margin-top: 4%;padding: 12px;"><?= $panier->count(); ?>  </span></br></br>
					Total:<span class="total" ><?= number_format($panier->total(),3,',',' '); ?> DT</span>
					</div>
			
					<input type="submit" class="myButtonn" value="update">
				</div>
            
			
			
			
</div>
 
</div>

<?php include 'footer.php';?>
</div>
</body>
</html>
