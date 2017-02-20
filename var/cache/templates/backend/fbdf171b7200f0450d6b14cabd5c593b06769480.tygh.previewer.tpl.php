<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:16:51
         compiled from "/home/adreytitov/html/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403334883589b0c33b426d6-53410505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbdf171b7200f0450d6b14cabd5c593b06769480' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/previewer.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1403334883589b0c33b426d6-53410505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0c33b45189_74760851',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0c33b45189_74760851')) {function content_589b0c33b45189_74760851($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
