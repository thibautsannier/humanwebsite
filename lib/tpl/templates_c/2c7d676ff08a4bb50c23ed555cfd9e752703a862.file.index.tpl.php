<?php /* Smarty version Smarty-3.1.1, created on 2014-10-21 15:30:16
         compiled from "modules/TPModules/tpl/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:190270165454465b0e6a6fc8-26042675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7d676ff08a4bb50c23ed555cfd9e752703a862' => 
    array (
      0 => 'modules/TPModules/tpl/index.tpl',
      1 => 1413898214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190270165454465b0e6a6fc8-26042675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_54465b0e705ca',
  'variables' => 
  array (
    'var' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54465b0e705ca')) {function content_54465b0e705ca($_smarty_tpl) {?><dl>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['var']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
<dt><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</dt><dd><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</dd>

<?php } ?>
</dl><?php }} ?>