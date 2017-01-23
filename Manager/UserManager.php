<?php
class UserManager
{
   //methode login
    public function login($login,$password){
	
	$db =new Connexion();
	return $db->cnx->query('SELECT COUNT(*) FROM user WHERE login='.$db->cnx->quote($login).' and password = '.$db->cnx->quote($password))->fetchColumn();
	}
	
	
 public function SignUp($login,$password){
	
		$db =new Connexion();
		
	$req=$db->cnx->prepare("INSERT INTO user(login,password) VALUES('".$login."','".$password."')");
	
    $req->execute();
    return $req;
 }
 

}