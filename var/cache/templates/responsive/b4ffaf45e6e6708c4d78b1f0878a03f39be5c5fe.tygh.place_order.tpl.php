<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:44:11
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/buttons/place_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724738088589ddfcb3c5c58-27797356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ffaf45e6e6708c4d78b1f0878a03f39be5c5fe' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/buttons/place_order.tpl',
      1 => 1486555460,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '724738088589ddfcb3c5c58-27797356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'but_text' => 0,
    'but_name' => 0,
    'but_href' => 0,
    'but_target' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ddfcb3d9da8_97083117',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ddfcb3d9da8_97083117')) {function content_589ddfcb3d9da8_97083117($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_meta'=>"ty-btn__big ty-btn__primary cm-checkout-place-order",'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value), 0);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/place_order.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/place_order.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['but_text']->value,'but_meta'=>"ty-btn__big ty-btn__primary cm-checkout-place-order",'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value), 0);
}?><?php }} ?>
