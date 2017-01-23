<?php 
class UserModel{
private $_id,$_login,$_password;


public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }

  //creation du set authomatique
public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }
//getters
public function getId(){
	return $_id;
}
public function getLogin(){
	return $_login;
}
public function getPassword(){
	return $_password;
}
public function setId($id){
	$id=(int)$id;
	if($id > 0)
	{
      $this->_id=$id;
	}
}
public function setLogin($login){
	if(is_string($login))
	{
      $this->_login=$login;
	}
}
public function setPassword($password){
	if(is_string($password))
	{
		$this->_password=$password;
	}
}
}

?>