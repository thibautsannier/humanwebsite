<?php /* Smarty version Smarty-3.1.1, created on 2014-10-14 09:46:06
         compiled from "templates/champs/file.tpl" */ ?>
<?php /*%%SmartyHeaderCode:367564383543cd4bee8f6a5-30138559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f63d2e14a05e46a1c0fc7685d6ef65e8c67b60f' => 
    array (
      0 => 'templates/champs/file.tpl',
      1 => 1413158696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367564383543cd4bee8f6a5-30138559',
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
    'f_msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_543cd4beeb260',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543cd4beeb260')) {function content_543cd4beeb260($_smarty_tpl) {?><div class='form-group <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
'>
<label class='col-sm-2 control-label <?php echo $_smarty_tpl->tpl_vars['f_error']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['f_required']->value;?>
' for='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['f_label']->value;?>
</label>
<div class='col-sm-6'>
<input type='file' name='<?php echo $_smarty_tpl->tpl_vars['f_name']->value;?>
' id='<?php echo $_smarty_tpl->tpl_vars['f_id']->value;?>
' class='form-control'>
</div>
<?php if ($_smarty_tpl->tpl_vars['f_msg']->value){?><span class="help-block"><?php echo $_smarty_tpl->tpl_vars['f_msg']->value;?>
</span><?php }?>
</div><?php }} ?>