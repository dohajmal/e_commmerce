<?php 
include ('../include/connexion.php');
include '../Manager/UserManager.php';

if (isset($_POST['login']) && !empty($_POST['login']))
{
	$nom=$_POST['nom'];
	$prenom=$_POST['prenom'];
	$login=$_POST['login'];
	$password=$_POST['password'];
	/*$newpassword=$_POST['newpassword'];
	if($password==$newpassword){*/
	$useManger = new UserManager();
	$isLogged=$useManger->SignUp($nom,$prenom,$login,$password);
	if($isLogged ==1)
		{
		//succressdukk redirection
		
			   $_SESSION['nom']=$nom;
			   $_SESSION['prenom']=$prenom;
			   $_SESSION['login']=$login;
			   $_SESSION['password']=$password;
			   header("location:../view/login.php");
			   
		}
	else
		{
				
		      header("location:../view/signup.php");
			
		}
	
}
?>