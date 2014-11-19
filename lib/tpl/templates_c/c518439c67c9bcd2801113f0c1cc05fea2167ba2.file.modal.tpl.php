<?php /* Smarty version Smarty-3.1.1, created on 2014-10-14 09:46:52
         compiled from "templates/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629751643543cd4ec225595-11116942%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c518439c67c9bcd2801113f0c1cc05fea2167ba2' => 
    array (
      0 => 'templates/modal.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629751643543cd4ec225595-11116942',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'titre' => 0,
    'bloc_contenu' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cd4ec232e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd4ec232e7')) {function content_543cd4ec232e7($_smarty_tpl) {?><!-- boite de dialogue -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</h4>
      </div>
      <div class="modal-body">
        <?php echo $_smarty_tpl->tpl_vars['bloc_contenu']->value;?>

      </div>
<?php }} ?>