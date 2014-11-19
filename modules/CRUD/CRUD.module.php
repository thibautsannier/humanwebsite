<?php
class CRUD extends Module{

	public function action_index(){

		$this->set_title("Liste");

		//création de variables PHP
		//on récupère de la base de données des éléments
		$data = MembreManager::liste();
					
		//passe les variables au template		
		$this->tpl->assign('data',$data);

	}
	
	public function action_modifier(){
		$this->set_title("Modifier");
	
		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
	
		
	}
	public function action_supprimer(){
		$this->set_title("Supprimer");

		//recupère l'id et la référence 
		$id = $this->req->user_id;
		$first_name = $this->req->first_name;
		MembreManager::supprimer($id);		

		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("first_name",$first_name);		
		
	}
	

	public function action_ajouter(){
		$this->set_title("Ajouter");	
	//..préparer un formulaire	
		
	}

	public function action_detail(){
		$this->set_title("Détail");	
		
		//recupère l'id et la référence 
		$id = $this->req->id;
		$ref= $this->req->ref;
		
		//passe ces informations dans le template
		
		$this->tpl->assign("id",$id);
		$this->tpl->assign("reference",$ref);		
		
		
	}

	
	
}	
?>