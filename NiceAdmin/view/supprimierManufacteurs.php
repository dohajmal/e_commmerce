<?php
include('../include/chargerClasse.php'); 
$id=$_GET['id'];
$addMeanifMan->deletManufacturers($id);
header('location:ListeManufacturers.php');
 
?>