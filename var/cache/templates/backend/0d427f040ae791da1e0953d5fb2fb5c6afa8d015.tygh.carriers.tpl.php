<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:45:48
         compiled from "/home/adreytitov/html/design/backend/templates/common/carriers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137181360589de02c519a83-60598785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d427f040ae791da1e0953d5fb2fb5c6afa8d015' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/carriers.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '137181360589de02c519a83-60598785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'capture' => 0,
    'id' => 0,
    'name' => 0,
    'meta' => 0,
    'carriers' => 0,
    'code' => 0,
    'carrier' => 0,
    'carrier_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de02c52f324_52369678',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de02c52f324_52369678')) {function content_589de02c52f324_52369678($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/home/adreytitov/html/app/functions/smarty_plugins/block.hook.php';
?><?php
fn_preload_lang_vars(array('carrier_','carrier_'));
?>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array("carrier_field", null, null); ob_start(); ?>
<?php }?>

<select <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['meta']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');
}?> form-control">
    <option value="">--</option>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"carriers:list")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"carriers:list"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

    <?php  $_smarty_tpl->tpl_vars["code"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["code"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carriers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["code"]->key => $_smarty_tpl->tpl_vars["code"]->value) {
$_smarty_tpl->tpl_vars["code"]->_loop = true;
?>
    	<option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['carrier']->value==((string)$_smarty_tpl->tpl_vars['code']->value)) {
$_smarty_tpl->tpl_vars['carrier_name'] = new Smarty_variable($_smarty_tpl->__("carrier_".((string)$_smarty_tpl->tpl_vars['code']->value)), null, 0);?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("carrier_".((string)$_smarty_tpl->tpl_vars['code']->value));?>
</option>
    <?php } ?>
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"carriers:list"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

</select>
<?php if ($_smarty_tpl->tpl_vars['capture']->value) {?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("carrier_name", null, null); ob_start(); ?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrier_name']->value, ENT_QUOTES, 'UTF-8');?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?><?php }} ?>
