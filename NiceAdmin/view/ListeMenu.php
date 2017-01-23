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
                            URL
                        </td>
						<td >
                            Actions
                        </td>
                    </tr>	
					<?php  
		   foreach($Menu= $addMenuMan->getlistMenu()->fetchall(PDO::FETCH_ASSOC) as $res){
			   ?>
                  
                    <tr>
			         <td>
                          <div class="menu_id"><?= $res['id']; ?></div>
                        </td>
                        <td>
                          <div class="menu_name"><?= $res['nom']; ?></div>
                        </td>
                        <td>
                         <?= $res['URL']; ?> </div>
                        </td>
                   
                        <td>
                      <a href="modifiermenu.php?id=<?= $res['id'];?>" value="update" class="myButton">update</a> <a href="supprimiermenu.php?id=<?= $res['id'];?>" value="delete" class="myButton">delete</a>
					
                        </td>
                    </tr>
				 
		   <?php } ?> 
		
		   
		   </form>
                </table>
				
				 <a href="addmenu.php" value="Add" name="Add" class="myButton">Add</a>  
			        </div>
           </section>
		    </section>
