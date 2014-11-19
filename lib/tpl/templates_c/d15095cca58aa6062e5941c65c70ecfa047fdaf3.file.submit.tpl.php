<?php /* Smarty version Smarty-3.1.1, created on 2014-10-14 09:46:06
         compiled from "templates/champs/submit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:787102650543cd4beeb7ba7-62381153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd15095cca58aa6062e5941c65c70ecfa047fdaf3' => 
    array (
      0 => 'templates/champs/submit.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '787102650543cd4beeb7ba7-62381153',
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
    'f_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cd4beedae5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd4beedae5')) {function content_543cd4beedae5($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-6 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-2'>
<input type='submit' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='form-control' value='<?php echo $_smarty_tpl->tpl_vars['f_value']->value;?>
'>
</div>
<div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'><?php }} ?>