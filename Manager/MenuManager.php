 <?php
class MenuManager
{ 
public function getMenu()
  {
	
		$db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM menu");
		
	
       return $req;
 
  }
  
  
}
 $MenuMan = new MenuManager();
   
    
    
    
  
   ?>