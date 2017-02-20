<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:15:40
         compiled from "/home/adreytitov/html/design/backend/mail/templates/profiles/update_profile_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2111842532589b0bec557880-45443219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fde6b648feab0c3a89ad8b204d959fcb65d5036e' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/profiles/update_profile_subj.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2111842532589b0bec557880-45443219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0bec56b1c2_00143855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0bec56b1c2_00143855')) {function content_589b0bec56b1c2_00143855($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('update_profile_notification'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("update_profile_notification");?>
<?php }} ?>
