<?php
class addCommandeManager
{    
	public function __construct(){
		//n'est pas defini
		if(!isset($_SESSION)){
			session_start();
		}
	}
 
/*if(isset($_POST['vali'])
		{
			$this->add($_POST['vali']);
			
		}*/
/*$dateenvoi = date("d-m-Y");
$a=$_SESSION['panier']['id'] ; 
$b=$_SESSION['panier']['nom'] ; 
$c=$_SESSION['panier']['prix'] ; 
$d=$_SESSION['panier']['image'] ; 
$E=$_SESSION['panier']['qte'] ; 
 public function ajouter($id,$date_comm,$qte,$prix,$nom,$image){
	$db =new Connexion();
	/*$sql="insert into commande(id,date_comm,qte,prix,nom,image) values ($_SESSION['panier']['id'], date('d-m-Y'),$_SESSION['panier']['image'],$_SESSION['panier']['prix'],$_SESSION['panier']['nom'],$_SESSION['panier']['qte'])";
//$sql="insert into commande SET id=nom = '.$_POST['nom']).',"
	$req=$db->cnx->prepare($sql);
	var_dump($req);*/
	/*$req=$db->cnx->prepare("insert into commande(id,date_comm,qte,prix,nom,image) values($id,$date_comm,$qte,$prix,$nom,$image)");
   /* $req->bindParam(1,$id);
	$req->bindParam(2,$date_comm);
	$req->bindParam(3,$qte);
	$req->bindParam(1,$prix);
	$req->bindParam(2,$nom);
	$req->bindParam(3,$image);*/
	/*$req->execute();


    }*/
	
	
}
		
		
$comMang= new addCommandeManager();
		?>