<?php 
class Connexion {
public $cnx=null;
	public function __construct()
	{
		try{
			$this->cnx=new PDO('mysql:host=localhost;dbname=dadou','root','');
			$this->cnx->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		}
		catch(PDOException $e)
		{
			echo "Connection à MYSQL impossible :" ,$e->getMessage();
			exit();

		}
	}
	public function MAJQuery($sql)
	{
      $nb=$this->cnx->exec($sql);
    }
    public function reqObj($sql , $data = array()){
		 $req=$this->cnx->prepare($sql);
		 $req->execute($data);
		
		return $req->fetchAll(PDO::FETCH_OBJ);
	}
	

}
$db =new Connexion();
 
 
?>