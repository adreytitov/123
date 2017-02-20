<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 14:04:12
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/blocks/html_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1500426362589d9e2c906454-35563997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e0fa7157e6be31962ed9760066ba07a7ddbc9a3' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/blocks/html_block.tpl',
      1 => 1486555461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1500426362589d9e2c906454-35563997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589d9e2c92dc52_76060014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d9e2c92dc52_76060014')) {function content_589d9e2c92dc52_76060014($_smarty_tpl) {?><?php if (!is_callable('smarty_function_live_edit')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.live_edit.php';
if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'input_type'=>"wysiwyg"),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/html_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/html_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else { ?><div class="ty-wysiwyg-content" <?php echo smarty_function_live_edit(array('name'=>"block:content:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id']),'input_type'=>"wysiwyg"),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php }?><?php }} ?>
