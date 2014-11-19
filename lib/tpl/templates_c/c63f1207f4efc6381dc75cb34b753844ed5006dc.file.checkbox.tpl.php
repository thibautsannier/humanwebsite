<?php /* Smarty version Smarty-3.1.1, created on 2014-10-14 09:46:06
         compiled from "templates/champs/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1057659260543cd4bed60532-45683061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c63f1207f4efc6381dc75cb34b753844ed5006dc' => 
    array (
      0 => 'templates/champs/checkbox.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1057659260543cd4bed60532-45683061',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'f_error' => 0,
    'f_required' => 0,
    'f_id' => 0,
    'f_label' => 0,
    'f_name' => 0,
    'f_checked' => 0,
    'f_value' => 0,
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cd4bed8a3f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd4bed8a3f')) {function content_543cd4bed8a3f($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-6'>
<input type='checkbox' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='' <?php echo $_smarty_tpl->tpl_vars['f_checked']->value;?>
 value='<?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
'>
</div>
<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>