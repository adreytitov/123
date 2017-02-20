<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 19:02:02
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/common/coming_soon_notice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2075600290589de3fa259840-71225778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be4fcac34d192c92e23f22b87d29c37601d925a' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/common/coming_soon_notice.tpl',
      1 => 1486555460,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2075600290589de3fa259840-71225778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'avail_date' => 0,
    'settings' => 0,
    'add_to_cart' => 0,
    'date' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de3fa28bd09_27096988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de3fa28bd09_27096988')) {function content_589de3fa28bd09_27096988($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/adreytitov/html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('product_coming_soon','product_coming_soon_add','product_coming_soon','product_coming_soon_add'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-product-coming-soon">
    <?php $_smarty_tpl->tpl_vars["date"] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['avail_date']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['add_to_cart']->value=="N") {
echo $_smarty_tpl->__("product_coming_soon",array("[avail_date]"=>$_smarty_tpl->tpl_vars['date']->value));
} else {
echo $_smarty_tpl->__("product_coming_soon_add",array("[avail_date]"=>$_smarty_tpl->tpl_vars['date']->value));
}?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/coming_soon_notice.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/coming_soon_notice.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-product-coming-soon">
    <?php $_smarty_tpl->tpl_vars["date"] = new Smarty_variable(smarty_modifier_date_format($_smarty_tpl->tpl_vars['avail_date']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['add_to_cart']->value=="N") {
echo $_smarty_tpl->__("product_coming_soon",array("[avail_date]"=>$_smarty_tpl->tpl_vars['date']->value));
} else {
echo $_smarty_tpl->__("product_coming_soon_add",array("[avail_date]"=>$_smarty_tpl->tpl_vars['date']->value));
}?>
</div><?php }?><?php }} ?>
