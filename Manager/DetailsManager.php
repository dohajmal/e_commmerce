 <?php
class DetailsManager
{ 
public function getprotuctdetail($id)
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM produit p where  id='".$id."' AND promo=0 ");
	
       return $req;
  
 
  }
  public function getprotuctdetailpromo($id)
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM produit p where  id='".$id."' AND promo=1 ");
	
       return $req;
  
 
  }
  }

 $DetMa = new DetailsManager();