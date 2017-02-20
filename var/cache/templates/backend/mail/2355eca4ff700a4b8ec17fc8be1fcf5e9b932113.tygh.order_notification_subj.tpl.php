<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:10:03
         compiled from "/home/adreytitov/html/design/backend/mail/templates/orders/order_notification_subj.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1563023192589ed4eb48a690-70661889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2355eca4ff700a4b8ec17fc8be1fcf5e9b932113' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/orders/order_notification_subj.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1563023192589ed4eb48a690-70661889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
    'order_info' => 0,
    'order_status' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed4eb4a11c8_68242347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed4eb4a11c8_68242347')) {function content_589ed4eb4a11c8_68242347($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('order'));
?>
<?php echo $_smarty_tpl->tpl_vars['company_data']->value['company_name'];?>
: <?php echo $_smarty_tpl->__("order");?>
 #<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_status']->value['email_subj'], ENT_QUOTES, 'UTF-8');?>
<?php }} ?>
