 <?php
class addmanufacturersManager
{ 
public function getlistManufacturers()
  {
	
		$db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM manufacturers");
		
	
       return $req;
 
  }
  public function getManufacturers($id){
	  $db =new Connexion();
	 
	    $req=$db->cnx->query("SELECT * FROM manufacturers where id='".$id."' ");
		
	
       return $req;
 
  }
   public function ajouterManufacturers($id,$nom){
	$db =new Connexion();
	$req=$db->cnx->prepare("INSERT INTO `manufacturers`(`id`, `nom`) VALUES (?,?)");
	$req->bindParam(1,$id);
	$req->bindParam(2,$nom);
	//$req->bindParam(3,$url);
	$req->execute();

    }
	 public function updateManufacturers($id,$nom){
		$db =new Connexion();
		$req=$db->cnx->prepare("update manufacturers set nom=? where id=?");
		$req->bindParam(1,$nom);
		$req->bindParam(3,$id);
		
		$req->execute();
		return 1;
		
	}
	public function deletManufacturers($id){
	$db =new Connexion();
    $req=$db->cnx->exec("delete from manufacturers where id='".$id."' ");
	}
}
 $addMeanifMan = new addmanufacturersManager();

   ?>