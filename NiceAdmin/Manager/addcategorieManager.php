 <?php
class addcategorieManager
{ 
public function getlistcategorie()
  {
	
		$db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM categorie");
		
	
       return $req;
 
  }
  public function getcategorie($id){
	  $db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM categorie where id='".$id."' ");
		
	
       return $req;
 
  }
   public function ajoutercategorie($id,$nom){
	$db =new Connexion();
	$req=$db->cnx->prepare("insert into categorie(id,nom) values(?,?)");
	$req->bindParam(1,$id);
	$req->bindParam(2,$nom);
	$req->execute();

    }
	 public function updatecategorie($id,$nom){
		$db =new Connexion();
		$req=$db->cnx->prepare("update categorie set nom=? where id=?");
		$req->bindParam(1,$nom);
		$req->bindParam(3,$id);
		
		$req->execute();
		return 1;
		
	}
	public function deletcategorie($id){
	$db =new Connexion();
    $req=$db->cnx->exec("delete from categorie where id='".$id."' ");
	}
}
 $addCattMan = new addcategorieManager();

   ?>