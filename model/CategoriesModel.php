<?php
class CategorieModel
{
  private $_id,$_nom;
  
 /* public function __construct(array $donnees)
  {
    $this->hydrate($donnees);
  }
    
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
  }*/
  public function getId(){
	return $this->_id;
}
public function getNom(){
	return $this->_nom;
}

public function setId($id){
	$id=(int)$id;
	if($id > 0)
	{
      $this->_id=$id;
	}
}
public function setFName($nom){
	if(is_string($nom))
	{
      $this->_nom=$nom;
	}
}
}
$catmo=new CategorieModel();
?>