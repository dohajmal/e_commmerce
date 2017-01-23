<?php 
include_once "../include/connexion.php";
class panier{

	public function __construct(){
		//n'est pas defini
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier']))	{
			//creation d'un panier vide
			$_SESSION['panier']=array();
			
		}
		if(isset($_GET['delPanier']))
		{
			$this->del(($_GET['delPanier']));
			
		}
	/*  if(isset($_POST["update"])){
    	$ids = $_POST["update"];
  		foreach ($ids as $key => $value) {
  				
  				$this->update($key, $value);
  		}
  }*/
if(isset($_POST['panier']['quantity']))
		{
			$this->update();
			
		}
		
	}

	public function count()
	{	
					
return array_sum($_SESSION['panier']);
//var_dump($_SESSION['panier']);
	}
	public function total()
	{
		$total = 0;
		//test session
		if (isset($_SESSION['panier'])) {
  			$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$Prod = array();
		}else{
			$db = new Connexion();
			$Prod = $db->reqObj('SELECT id,prix from produit
			WHERE id IN ('. implode(',', $ids).')');
			//$Prodpromo = $db->reqObj('SELECT id,new_prix from promotion
			//WHERE id IN ('. implode(',', $ids).')');
			//$proddd=$db->reqObj('SELECT * from promotion pr,produit p
			//WHERE id IN ('. implode(',', $ids).') AND pr.id_produit=p.id');
			
		}
		//if($proddd){
			//foreach ($Prodpromo as $produit) {
			//$total += $produit->new_prix * $_SESSION['panier'][$produit->id];
		}
		//else{
		foreach ($Prod as $produit) {
			$total += $produit->prix * $_SESSION['panier'][$produit->id];
		}
		return $total;
	}
					
		

	
	public function add($produit_id)
	{
	
// $qte = recuperation qte from product table

		$db = new Connexion();

		$qte = $db->reqObj('select qte from produit where id=:id', array('id'=>$produit_id));

		//test $_SESSION["panier"][$produit_id]++ <= qte

		if($qte[0]->qte >= $_SESSION['panier'][$produit_id]+1){

			if(isset($_SESSION['panier'][$produit_id])){
				$_SESSION['panier'][$produit_id]++;
			}else{
				$_SESSION['panier'][$produit_id] = 1;
			}

		}else{

			//repture de stock error
			header("location: ../view/panier.php?qteError=1");
		}


	}

    public function del($produit_id)
	{
		
		if($_SESSION['panier'][$produit_id]>1){
			$_SESSION['panier'][$produit_id] --;
		}elseif ($_SESSION['panier'][$produit_id] == 1) {
			//suprimier
			unset($_SESSION['panier'][$produit_id]);
		}
	}
/*public function update($produit_id, $value){

		$c = 0;
		$db = new Connexion();

		$qte = $db->reqObj('select qte from produit where id=:id', array('id'=>$produit_id));

		if($qte[0]->qte >= $_SESSION['panier'][$produit_id]){
			$_SESSION['panier'][$produit_id] = $value;
		}else{
			//repture de stock error
			
			header("location: ../view/panier.php?qteError=1");
		}

	}*/
	
public function update(){
		foreach($_SESSION['panier'] as $produit_id =>$quantity)
		{
			$_SESSION['panier'][$produit_id]=$_POST['panier']['quantity'][$produit_id];
		}
		
	}


 public function ajoutercomm($id,$date_comm,$qte,$prix,$nom,$image){
	 $db = new Connexion();
$req=$db->executer("insert into commande(id,date_comm,qte,prix,nom,image) values('".$id."','".$date_comm."','".$qte."','".$prix."','".$nom."','".$image."')");
header("location: ../Manager/commande.php");

 }
}
//$panier = new panier();

?>