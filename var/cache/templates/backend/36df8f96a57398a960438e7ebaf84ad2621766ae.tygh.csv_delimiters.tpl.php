<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:52:07
         compiled from "/home/adreytitov/html/design/backend/templates/views/exim/components/csv_delimiters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:634032537589de1a77e8964-41070382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36df8f96a57398a960438e7ebaf84ad2621766ae' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/exim/components/csv_delimiters.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '634032537589de1a77e8964-41070382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'id' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de1a77f4e39_00946785',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de1a77f4e39_00946785')) {function content_589de1a77f4e39_00946785($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('semicolon','comma','tab'));
?>
<select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("semicolon");?>
</option>
<option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("comma");?>
</option>
<option value="T" <?php if ($_smarty_tpl->tpl_vars['value']->value=="T") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("tab");?>
</option>
</select><?php }} ?>
