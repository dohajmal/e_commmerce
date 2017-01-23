<?php 
include ('../include/connexion.php');
include '../Manager/UserManager.php';

if (isset($_POST['login']) && !empty($_POST['login']))
{
	$login=$_POST['login'];
	$password=$_POST['password'];
	/*$newpassword=$_POST['newpassword'];
	if($password==$newpassword){*/
	$useManger = new UserManager();
	$isLogged=$useManger->SignUp($login,$password);
	if($isLogged ==1)
		{
		//succressdukk redirection
			   $_SESSION['login']=$login;
			   $_SESSION['password']=$password;
			   header("location:../view/index.php");
			   
		}
	else
		{
				
		      header("location:../view/signup.php");
			
		}
	
}
?>