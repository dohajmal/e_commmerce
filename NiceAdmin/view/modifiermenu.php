<?php  include_once('../include/chargerClasse.php'); ?>
<?php include_once ('../view/hedearcss.php'); ?>
<?php include_once ('../view/header.php') ;  ?>
 <?php include_once ('../view/sidebar.php'); ?> 
	  <?php $id=$_GET['id']; ?>
	    <section id="main-content">
          <section class="wrapper">  
<div class="CSSTableGenerator" >
			
            <form method="GET" action="ListeMenu.php">			
			<?php   $Menu= $addMenuMan->getMenu($id)->fetch(PDO::FETCH_OBJ)  ?>
                <table >
                    <tr>
					   <td>
                            ID
                        </td>
                        <td>
                            Name
                        </td>
                        <td >
                            URL
                        </td>
						<td >
                            Actions
                        </td>
                    </tr>
                    <tr>
	
                          <td>
                          <div class='menu_id'> <input value="<?= $Menu->id; ?>" name="id"></div>
                        </td>
                        <td>
                          <div class="menu_name"><input value="<?= $Menu->nom; ?>" name="nom"  required ></div>
                        </td>
                        <td>
                           <div class="menu_url"><input value="<?= $Menu->URL; ?>" name="URL" ></div>
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
	$URL=$_GET["URL"];
	$res = $addMenuMan->update($id,$nom,$URL);

 }
 ?>