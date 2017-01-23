
<?php  
include_once('../include/chargerClasse.php'); ?>
<?php include_once ('../view/hedearcss.php'); ?>
<?php include_once ('../view/header.php') ;  
 include_once ('../view/sidebar.php');  ?>
	  
	    <section id="main-content">
          <section class="wrapper">  
<div class="CSSTableGenerator" >
			
            <form method="GET" action="ListeManufacturers.php">			<?php  
						 $id=$_GET['id'];
		 $Menu= $addMeanifMan->getManufacturers($id)->fetch(PDO::FETCH_OBJ)
			   ?>
                <table >
                    <tr>
					   <td>
                            ID
                        </td>
                        <td>
                            Name
                        </td>
                      
						<td >
                            Actions
                        </td>
                    </tr>
                    <tr>
		
                          <td>
                          <div class="menu_id"> <input value="<?= $Menu->id; ?>" name="id"></div>
                        </td>
                        <td>
                          <div class="menu_name"><input value="<?= $Menu->nom; ?>" name="nom"  required ></div>
                        </td>
                                       
					
                        <td>
                       <input type="submit" class="myButton" value="update" name="update"> 
									
                        </td>
		   
                    </tr>
				 
					
                    
                </table>
			</form>
            </div>
           </section>
		    </section>
			
				<?php
if (isset($_GET["update"]))
 {
	$id=$_GET["id"];
	$nom=$_GET["nom"];
	$res = $addMeanifMan->updateManufacturers($id,$nom);
	
 }
 ?>