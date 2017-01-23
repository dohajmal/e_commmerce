<?php
include('../include/chargerClasse.php'); 
$id=$_GET['id'];
$addMenuMan->delet($id);
header('location:ListeMenu.php');
 
?>