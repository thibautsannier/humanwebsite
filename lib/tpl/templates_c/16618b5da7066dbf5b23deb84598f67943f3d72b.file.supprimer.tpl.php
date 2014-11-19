<?php /* Smarty version Smarty-3.1.1, created on 2014-11-18 18:55:49
         compiled from "modules/CRUD/tpl/supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1940151360546b7398bc6c96-21665212%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16618b5da7066dbf5b23deb84598f67943f3d72b' => 
    array (
      0 => 'modules/CRUD/tpl/supprimer.tpl',
      1 => 1416333348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1940151360546b7398bc6c96-21665212',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_546b7398c4f1f',
  'variables' => 
  array (
    'first_name' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_546b7398c4f1f')) {function content_546b7398c4f1f($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['first_name']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
)</h2></div>

<div class='jumbotron'>
	<p>Suppression à exécuter dans le module...</p>
	<p>Normalement on n'atterrit pas sur cette page, une redirection doit être faite</p>
	<p>Sauf si on désire proposer une confirmation à cet endroit (en plus ou en remplacement de la boite de dialogue)</p>
	
	<p class='text-right'>
		<a href="#" class='btn btn-danger'>Supprimer</a>
		<a href="#" class='btn btn-default'>Annuler</a>
	</p>	
</div><?php }} ?>