<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 16:07:24
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/addons/social_buttons/providers/gplus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1047409129589dbb0c9d6669-55834015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bbf378c5e9584e97901ff049f2574ead4f4d049' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/addons/social_buttons/providers/gplus.tpl',
      1 => 1486555463,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1047409129589dbb0c9d6669-55834015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'provider_settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589dbb0c9ed549_41275203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589dbb0c9ed549_41275203')) {function content_589dbb0c9ed549_41275203($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['gplus_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['gplus']['data']) {?>
<div class="g-plusone" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['gplus']['data'];?>
></div>
<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/social_buttons/providers/gplus.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/social_buttons/providers/gplus.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['gplus_enable']=="Y"&&$_smarty_tpl->tpl_vars['provider_settings']->value['gplus']['data']) {?>
<div class="g-plusone" <?php echo $_smarty_tpl->tpl_vars['provider_settings']->value['gplus']['data'];?>
></div>
<?php echo '<script'; ?>
 type="text/javascript" class="cm-ajax-force">
    (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
    })();
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
