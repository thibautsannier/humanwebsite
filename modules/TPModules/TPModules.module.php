<?php
class TPModules extends Module 
{

	public function action_index()
	{

		$this->set_title("TP Modules 1");

		//création de variables PHP
		//passe les variables au template		
		$this->tpl->assign('var' ,$_GET);
	}

	public function action_index()
	{

		$this->set_title("TP Modules 1");

		//création de variables PHP
		//passe les variables au template		
		$this->tpl->assign('var' ,$_GET);
	}

}	
?>