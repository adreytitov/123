<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:14:16
         compiled from "/home/adreytitov/html/design/backend/mail/templates/profiles/recover_password_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1158439930589b0b98a74762-46251060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd7d26d3e03d70add94bc5cb97c08c4d2273abf8' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/profiles/recover_password_subj.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1158439930589b0b98a74762-46251060',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0b98a8c691_56932023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0b98a8c691_56932023')) {function content_589b0b98a8c691_56932023($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('recover_password_subj'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("recover_password_subj");?>
<?php }} ?>
