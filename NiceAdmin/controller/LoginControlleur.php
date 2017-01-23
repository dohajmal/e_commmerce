<?php 
include ('../include/connexion.php');
include '../Manager/UserManager.php';
session_start();
if (isset($_POST['login']) && !empty($_POST['login']))
{
	$login=$_POST['login'];
	$password=$_POST['password'];
	$useManger = new UserManager();
	$isLogged=$useManger->login($login,$password);
	
	
	if($isLogged ==1)
		{
		//succressdukk redirection
			   $_SESSION['login']=$login;
			  
			   header("location:../view/index.php?authentification=1");
		}
	else
		{
				header("location:../view/login.php?error=1");
		
			
		}
}
?>