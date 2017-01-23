<?php
class UserManager
{
   //methode login
    public function login($login,$password){
	
	$db =new Connexion();
	return $db->cnx->query('SELECT COUNT(*) FROM admin WHERE login='.$db->cnx->quote($login).' and password = '.$db->cnx->quote($password))->fetchColumn();
	}
	
	
 public function SignUp($nom,$prenom,$login,$password){
	
		$db =new Connexion();
		$sql="INSERT INTO admin(nom,prenom,login,password) VALUES('".$nom."','".$prenom."','".$login."','".$password."')";
		//$sql='INSERT INTO admin(nom,prenom,login,password) VALUES('.$db->cnx->quote($nom).','.$db->cnx->quote($prenom).','.$db->cnx->quote($login).','.$db->cnx->quote($password).') ';
	$req=$db->cnx->prepare($sql);
	
    $req->execute();
    return $req;
 }
 

}