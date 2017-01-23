<?php 
class UserModel{
private $_id,$_Name,$_FName,$_phone,$_adress,$_Message;


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
public function getName(){
	return $_Name;
}
public function getFName(){
	return $_FName;
}
public function getPhone(){
	return $_phone;
}
public function getMessage(){
	return $_Message;
}
public function setId($id){
	$id=(int)$id;
	if($id > 0)
	{
      $this->_id=$id;
	}
}
public function setName($Name){
	if(is_string($Name))
	{
      $this->_FName=$FName;
	}
}
public function setFName($FName){
	if(is_string($FName))
	{
      $this->_FName=$FName;
	}
}
public function setPhone($Phone){
	if(is_int ($Phone))
	{
		$this->_Phone=$Phone;
	}
}
public function setMessage($Message){
	
	   $this->_Message=$Message;
	
}
}

?>