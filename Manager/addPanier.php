<?php
include_once ('../model/PanierModel.php');
class controller_panier{
private $model ;
public function __construct()
{
$this->model = new model_publication();
}
//verifer l'existance d'un login
public function verifier_login($login)
{
return $this->model->verifier_login($login);
}
//verifier l'existance d'un password
public function verifier_password($password)
{
return $this->model->verifier_password($password);

}
//lister les publication
public function lister_publication()
{
return $this->model->lister_publication() ;
}
//supprimer un publication par son ID
public function supprimer_publication($id_publication)
{
 $this->model->supprimer_publication($id_publication) ;
}

//modifier un publication par son ID
public function modifier_publication($id_publication,$titre,$date,$image,$contenu)
{
 $this->model->modifier_publication($id_publication,$titre,$date,$image,$contenu) ;
}

//enregistrer un nouvel publication
public function enregistrer_publication($id_publication,$titre,$date,$image,$contenu) 
{
$this->model->enregistrer_publication($id_publication,$titre,$date,$image,$contenu) ;

}
//recuperer les infos d'un publication
public function info_publication($id_publication)
{
return $this->model->info_publication($id_publication);
}
	
}

?>