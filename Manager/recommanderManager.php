 <?php
class recommanderManager
{ 
public function getRecom()
  {
	
		$db =new Connexion();
	 //SELECT * FROM promotion p,produit pr where recommander=1 AND p.id_produit=pr.id
	    $req=$db->cnx->query("SELECT * FROM promotion p,produit pr where recommander=1 AND p.id_produit=pr.id");
		
	
       return $req;
 
  }
}
 $Recom = new recommanderManager();
   
    
    
    
  
   ?>