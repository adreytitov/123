<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 16:07:24
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/blocks/product_tabs/files.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297158948589dbb0cb9c4d9-13920403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62539ec7ed86fd7c302e15d811665041c1ceccd' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/blocks/product_tabs/files.tpl',
      1 => 1486555461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1297158948589dbb0cb9c4d9-13920403',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589dbb0cbab711_17470439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589dbb0cbab711_17470439')) {function content_589dbb0cbab711_17470439($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/files.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/files.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);
}?><?php }} ?>
