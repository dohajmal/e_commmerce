 <?php
class CategoriesManager
{ 
public function getList()
  {
	
		$db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM categorie");
	
       return $req;
    
  }
  /*public function getlistmani($id_mani){
	  $db =new Connexion();
	  
	    $req=$db->cnx->query("SELECT * FROM categorie");
	
       return $req;
  }*/
}
 $ctgorie = new CategoriesManager();
   
    
    
    
  
   ?>