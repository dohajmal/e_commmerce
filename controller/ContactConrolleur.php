<?php 
include ('../include/connexion.php');
include '../Manager/ContactManager.php';
if(isset($_POST['btn_ajout']))
{
    $Name=$_POST['Name'];
	$First_name=$_POST['FName'];
	 $Phone=$_POST['phone'];
	$Address=$_POST['adress'];
	 $Message=$_POST['message'];
	$contManger = new ContactManager();
	$contManger->add($Name,$First_name,$Phone,$Address,$Message);
	
	
	 header("location:../view/contact.php");

}
	?>