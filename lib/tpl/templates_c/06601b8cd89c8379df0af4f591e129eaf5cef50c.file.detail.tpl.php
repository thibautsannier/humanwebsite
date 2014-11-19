<?php /* Smarty version Smarty-3.1.1, created on 2014-10-14 09:47:08
         compiled from "modules/CRUD/tpl/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1584212975543cd4fc553984-33228056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06601b8cd89c8379df0af4f591e129eaf5cef50c' => 
    array (
      0 => 'modules/CRUD/tpl/detail.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584212975543cd4fc553984-33228056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cd4fc5a4c4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd4fc5a4c4')) {function content_543cd4fc5a4c4($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Afficher les détails de l'enregistrement...</p>
	<a href="#" class='btn btn-danger'>Supprimer</a>
	<a href="#" class='btn btn-default'>Modifier</a>
</div><?php }} ?>