<?php  

include('../include/chargerClasse.php'); ?>
<?php include_once 'hedearcss.php'; ?>
<?php include 'header.php'    ?>
<?php include 'sidebar.php' ?>

	    <section id="main-content">
          <section class="wrapper">  
<div class="CSSTableGenerator" >

	<form method="GET" action="">
                <table >
                    <tr>
					    <td>
                            ID
                        </td>
                        <td>
                            Name
                        </td>
                        <td >
                           New Price
                        </td>
						 <td >
                           Id_produit
                        </td>
						 
						<td >
                            Actions
                        </td>
                    </tr>	
					<?php  
		 /*  foreach($Menu= $addMenuMan->getlistMenu()->fetchall(PDO::FETCH_ASSOC) as $res){*/
			   ?>
                  
                    <tr>
			         <td>
                          <div class="produit_id"><?= //$res['id']; ?></div>
                        </td>
                        <td>
                          <div class="produit_name"><?= //$res['nom']; ?></div>
                        </td>
                        <td>
                         <div class="produit_new_Price">  <?=  ?> </div>
                        </td>
                     <td>
                         <div class="produit_Id_produit">  <?=  ?> </div>
                        </td>
						  <td>
                         <div class="produit_Actions">  <?=  ?> </div>
                        </td>
                        <td>
                      <a href="ModifierPromotion.php?id=<?= $res['id'];?>" value="update" class="myButton">update</a> <a href="SupprimierPromotion.php?id=<?= $res['id'];?>" value="delete" class="myButton">delete</a>
					
                        </td>
                    </tr>
				 
		   <?php } ?> 
		
		   
		   </form>
                </table>
				
				 <a href="addPromotion.php" value="Add" name="Add"class="myButton">Add</a>  
			        </div>
           </section>
		    </section>
