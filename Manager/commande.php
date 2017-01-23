<?php

include_once("../include/chargerClasse.php");
include_once ('../model/PanierModel.php');
$panier = new panier();		
	$date_comm = date("d-m-Y");
	$id=$_POST['id'];
	$image=$_POST['image'];
	$qte=$_POST['qte'];
	$nom=$_POST['nom'];
	$prix=$_POST['prix'];
    $res = $panier->ajoutercomm($id,$date_comm,$qte,$prix,$nom,$image); 
				
			echo $id.'<br/>';
				echo $image.'<br/>';
				echo $qte.'<br/>';
				echo $nom.'<br/>';
				echo $prix.'<br/>';



header("location:../view/panier.php");



	//recuperer les clé du tableau
			/*		$ids =array_keys($_SESSION['panier']);
					
					//si j'envoi le panier est vide 
					if(empty($ids)){
						$Prod=array();
					}else{
					//implode recuperer les valeur du tableau
					$Prod=$db->reqObj('SELECT * FROM produit where id IN ('.implode(',',$ids).')');
					//var_dump($Prod);
					}
					for ($i = 0; $i <  count($Prod); $i++) {
							$key=key($Prod);
							//$id[]=$Prod[0];
							
							   //print_r ($id[0]);
							/*   $id=$Prod[0]->id;
							   $nom=$Prod[0]->nom;
							   $prix=$Prod[0]->prix;
							   $image=$Prod[0]->image;
							   $qte=$Prod[0]->qte;
							   $dateenvoi = date("d-m-Y");
							   //print_r($Prod[0]->id);
							    //print_r($Prod[0]->nom);
							/*   for($j = 0; $j <  count($id[0]); $j++)
								    $key=key($id[0]);
									$id1[]=$id[0];
									
									print_r ($id1[0][0]);
							  /* $nom = $val[];
							   echo $nom;
							   */
							 
							// print_r($Prod[0]->id);
							  //print_r($Prod[0]->image);
							   //print_r($Prod[0]->prix);
							    //print_r($Prod[0]->nom);
								 //print_r($Prod[0]->qte);
								/*    $id=$Prod[0]->id;
							   $nom=$Prod[0]->nom;
							   $prix=$Prod[0]->prix;
							   $image=$Prod[0]->image;
							   $qte=$Prod[0]->qte;
							   $date_comm = date("d-m-Y");
							   $res = $panier->ajoutercomm($id,$date_comm,$image,$prix,$nom,$qte);*/

 //$res = $panier->ajoutercomm($Prod[0]->id,date("d-m-Y"),$Prod[0]->image,$Prod[0]->prix,$Prod[0]->nom,$Prod[0]->qte);
								
							// next($Prod);	
							// print_r($Prod[0]->image);
							// print_r($Prod[0]->prix);
							// print_r($Prod[0]->nom);
							// print_r($Prod[0]->qte);
				

