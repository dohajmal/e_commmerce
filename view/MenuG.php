<?php  

include('../include/chargerClasse.php'); ?>
<div id="menu_tab">
      <ul class="menu" style="align:center">
	    	<?php  
		   foreach($Menu= $MenuMan->getMenu()->fetchall(PDO::FETCH_ASSOC) as $res){
			   ?>
	    <li class="divider"></li>
        <li><a href=" <?= $res['URL'] ?>" class="nav"> <?= $res['nom'] ?></a></li>
		   <?php } ?>
      </ul>
    </div>

