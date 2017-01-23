 <?php
include_once("../include/chargerClasse.php");
//$json=array('error' =>true);
 if(isset($_GET['id'])){
	 		 $Prod=$db->reqObj('SELECT id FROM produit where id=:id ' ,array('id' => $_GET['id']));
		if(empty($Prod)){
			$json['message']="ce produit n'existe pas";
		}
	
		//ajouter au panier
		$panier->add($Prod[0]->id);
		//n'est pas d'erreur
		//$json['error']= false;
		//$json['total']=number_format($panier->total(),2,',',' ');
		//$json['count']=$panier->count();
		//$json['message']='le produit a bien été ajouté à votre panier';
		//header("location:../view/panier.php");
		die('le produit a bien ajoute a votre panier  <a href="javascript:history.back();">retourner  sur le catalogue</a>');
	
 }
 /*else{
		  $json['message']="vous n'avez pas sélectionné de produit à ajouter au panier";
  */ 
 
 ?>