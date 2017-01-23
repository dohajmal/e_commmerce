 <?php
class ProductsManager
{ 
public function getListprotuct()
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM produit p where  promo=0 limit 6");
	
       return $req;
  
 
  }

    public function getNom($id)
	{
		$db =new Connexion();
		
	    $req=$db->cnx->query("select M.nom from produit p,manufacturers M where p.id_mani='".$id."' AND p.id_mani=M.id ");
		return $req;
	}
}

 $ptMa = new ProductsManager();