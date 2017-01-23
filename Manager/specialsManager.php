 <?php
class specialsManager
{ 
public function getpromo()
  {
	
		$db =new Connexion();
	
	    $req=$db->cnx->query("SELECT * FROM promotion p,produit pr where p.id_produit=pr.id limit 1");
	
       return $req;
  
 
  }
  public function getListpromo()
  {
	
		$db =new Connexion();
	   
	    $req=$db->cnx->query("SELECT * FROM promotion p,produit pr where p.id_produit=pr.id");
	
       return $req;
  
 
  }
  public function getcategorie_manifpromo($id_mani,$id_categ){
	  
	
		$db =new Connexion();
		$req=$db->cnx->query("select * from produit p,promotion pr   where p.id_mani='".$id_mani."' AND  p.id_categ='".$id_categ."' AND promo=1 AND  pr.id_produit = p.id  ");
        return $req;
	
  }
  
    public function getProdManipromo($id)
	{
			$db =new Connexion();
		//$req=$db->cnx->query("select * from produit p where  p.id_mani='".$id."' AND  NOT EXISTS(select * from  promotion pr where pr.id_produit = p.id) ");
	    $req=$db->cnx->query("select * from produit p,promotion pr where p.id_mani='".$id."' AND p.promo=1 limit 12 ");
		return $req;
	}
    public function getPromoMani($id)
	{
		$db =new Connexion();
		$req=$db->cnx->query("select * from produit p,promotion pr where  p.id_mani='".$id."' AND  pr.id_produit = p.id ");
		return $req;
	}
  
}
 $spt = new specialsManager();
   
    
    
    
  
   ?>