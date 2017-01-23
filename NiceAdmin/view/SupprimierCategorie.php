<?php
include('../include/chargerClasse.php'); 
$id=$_GET['id'];
$addCattMan->deletcategorie($id);
header('location:ListeCategorie.php');
 
?>