<?php
class Inscription extends Module 
{

	public function action_index()
	{

		$this->set_title("TP Modules 1");

		$f=new Form("?module=Inscription&action=valide","form1");
			$f->add_text("login","login","Login")->set_validation("required|min-length:3|max-length:30");		
			$f->login->set_required();	
			$f->add_text("mail","mail","M@il")->set_validation("required|mail|max-length:40");		
			$f->mail->set_required();	
			$f->add_password("pass1","pass1","Password")->set_validation("min-length:8|required|max-length:32");	
			$f->pass1->set_required();	
			$f->add_password("pass2","pass2","retapez...")->set_validation("equals-field:pass1");
			$f->add_text("nom","nom","Nom")->set_validation("max-length:30");
			$f->add_text("prenom","prenom","Prenom")->set_validation("max-length:30");		
			$f->add_submit("Valider","bntval")->set_value('Valider');		

	
		$this->tpl->assign('form' ,$f);

		$this->session->form = $f;				

	}
	public function action_valide()
	{

		$this->set_title("Inscription");
		$err=false;
		//on récupère la structure du formulaire précédemment stocké dans la session
		$f=$this->session->form;
		$err = $f->valid();
		
		//si un des tests a échoué
		if($err)
		{	
		
			$this->site->ajouter_message('Veuillez remplir correctement les champs suivant.',ALERTE);			

		
			//on pré-remplit avec les valeurs déjà saisies
			$f->populate();		
			//passe le formulaire dans le template sous le nom "form"
			$this->tpl->assign("form",$f);
		}
		//tous les tests ont été validés
		else
		{

			//création d'une instance de Membre
			// $m=new Membre($this->requete->login,$this->requete->nom,$this->requete->pnom,
			// 			$this->requete->mail,
			// 			$this->requete->pass1
			// 			);

			// //enregistrement (insertion) dans la base
			// MembreManager::creer($m);

			//passe un message pour la page suivante
			$this->site->ajouter_message('L\'utilisateur est enregistré');			

			//redirige vers le module par défaut
			$this->site->redirect('index');
		}
	}
}
?>