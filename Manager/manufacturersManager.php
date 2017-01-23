 <?php
class manufacturersManager
{ 
public function getListMani()
  {
	
		$db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM manufacturers");
	
       return $req;
 
  }
  public function getProdMani($id)
	{
		$db =new Connexion();
		//$req=$db->cnx->query("select * from produit p where  p.id_mani='".$id."' AND  NOT EXISTS(select * from  promotion pr where pr.id_produit = p.id) ");
	    $req=$db->cnx->query("select * from produit p,promotion pr where p.id_mani='".$id."' AND p.promo=0 limit 9 ");
		return $req;
	}
  
  
 /* public function getListma()
  {
	
		$db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT Ma.id_mani,Ma.nom,Ma.url FROM produit p ,manufacturers Ma where p.id=Ma.id_mani");
	
       return $req;
 
  }*/
  
  public function getListMani_catg()
  {
	
		$db =new Connexion();
	 
	    $req1=$db->cnx->query("SELECT M.nom FROM manufacturers M , categorie C,cat_mani CM where C.id=CM.id_catgorie AND M.id=CM.id_manifacteurs ");
	
       return $req1;
 
  }
 public function getcategorie_manif($id_mani,$id_categ){
	  
	
		$db =new Connexion();
		$req=$db->cnx->query("select * from produit p   where p.id_mani='".$id_mani."' AND  p.id_categ='".$id_categ."' AND promo=0 ");
        return $req;
	
  }
  
  
  
}
 $Mani = new manufacturersManager();
   
    
    
    
  
   ?>