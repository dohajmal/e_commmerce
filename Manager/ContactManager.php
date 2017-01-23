 <?php
class ContactManager
{
 public function add($Name,$First_name,$Phone,$Address,$Message){
	
		$db =new Connexion();
		
	$req=$db->cnx->prepare("INSERT INTO contact(Name,First_name,Phone,Address,Message) VALUES('".$Name."','".$First_name."','".$Phone."','".$Address."','".$Message."')");
	
    $req->execute();
    return $req;
 }
}
 ?>
 
	