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
                            Price
                        </td>
						 <td >
                            Picture
                        </td>
						 <td >
                            Recommend
                        </td>
						 <td >
                            Quantity
                        </td>
						 <td >
                            Promo
                        </td>
						 <td >
                            Id_categ
                        </td>
						 <td >
                            Id_mani
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
                          <div class="produit_id"></div>
                        </td>
                        <td>
                          <div class="produit_name"></div>
                        </td>
                        <td>
                         <div class="produit_Price">  </div>
                        </td>
                     <td>
                         <div class="produit_Picture"> </div>
                        </td>
						  <td>
                         <div class="produit_Recommend">  </div>
                        </td>
						  <td>
                         <div class="produit_ Quantity"> </div>
                        </td>
						  <td>
                         <div class="produit_Promo"> </div>
                        </td>
						  <td>
                         <div class="produit_Id_categ"> </div>
                        </td>
						  <td>
                         <div class="produit_Id_mani"> </div>
                        </td>
						  <td>
                         <div class="produit_Actions"> </div>
                        </td>
                        <td>
                      <a href="ModifierProducts.php?id=<?= $res['id'];?>" value="update" class="myButton">update</a> <a href="SupprimierProducts.php?id=<?= $res['id'];?>" value="delete" class="myButton">delete</a>
					
                        </td>
                    </tr>
				 
		   <?php //} ?> 
		
		   
		   </form>
                </table>
				
				 <a href="addProducts.php" value="Add" name="Add"class="myButton">Add</a>  
			        </div>
           </section>
		    </section>
