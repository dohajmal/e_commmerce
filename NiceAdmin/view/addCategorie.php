
<?php  
include_once('../include/chargerClasse.php'); ?>
<?php include_once ('../view/hedearcss.php'); ?>
<?php include_once ('../view/header.php') ;  
 include_once ('../view/sidebar.php');  ?>
	  
	    <section id="main-content">
          <section class="wrapper"> 
 	  
<div class="CSSTableGenerator" >
<form method="GET" action="ListeCategorie.php" >	
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
                          <div class="menu_id"><input value="" name="id" placeholder="Saisir le id"  ></div>
                        </td>
                        <td>
                          <div class="menu_name"><input value="" name="nom" placeholder="Saisir le nom" required ></div>
                        </td>
                        <td>
                           <div class="menu_url"><input value="" name="url" required ></div>
                        </td>
                   
					
                        <td>
                       <input type="submit" class="myButton" value="Add" name="Add">
					
                        </td>
                    </tr>
				 
                </table>
				</form>
					
            </div>
           </section>
		    </section>
			<?php
 if (isset($_GET["Add"]))
 {
	$id=$_GET["id"];
	$nom=$_GET["nom"];
	$url=$_GET["url"];
	$res = $addCattMan->ajoutercategorie($id,$nom,$url);

 }	
 ?>