 <?php
class addMenuManager
{ 
public function getlistMenu()
  {
	
		$db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM menu");
		
	
       return $req;
 
  }
  public function getMenu($id){
	  $db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM menu where id='".$id."' ");
		
	
       return $req;
 
  }
   public function ajoutermenu($id,$nom,$URL){
	$db =new Connexion();
	$req=$db->cnx->prepare("insert into menu(id,nom,URL) values(?,?,?)");
	$req->bindParam(1,$id);
	$req->bindParam(2,$nom);
	$req->bindParam(3,$URL);
 return $req;
    }
	 public function update($id,$nom,$URL){
		$db =new Connexion();
		$req=$db->cnx->prepare("update menu set nom=?, URL=? where id=?");
		$req->bindParam(1,$nom);
		$req->bindParam(2,$URL);
		$req->bindParam(3,$id);
	$req->execute();
		return 1;
		
	}
	public function delet($id){
	$db =new Connexion();
    $req=$db->cnx->exec("delete from menu where id='".$id."' ");
	}
}
 $addMenuMan = new addMenuManager();

   ?>