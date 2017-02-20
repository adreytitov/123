<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:10:03
         compiled from "/home/adreytitov/html/design/backend/mail/templates/orders/order_notification.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2130437614589ed4eb4b21c4-59339038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91f0925981c3b8dae5288079e906ab7ee399bdf6' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/orders/order_notification.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2130437614589ed4eb4b21c4-59339038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_info' => 0,
    'order_status' => 0,
    'status_settings' => 0,
    'order_header' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed4eb4c59c7_90486328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed4eb4c59c7_90486328')) {function content_589ed4eb4c59c7_90486328($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('dear','invoice','credit_memo','order_details'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("dear");?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
,<br /><br />

<?php echo $_smarty_tpl->tpl_vars['order_status']->value['email_header'];?>
<br /><br />

<?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("invoice"), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="C"&&$_smarty_tpl->tpl_vars['order_info']->value['doc_ids'][$_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']]) {?>
    <?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("credit_memo"), null, 0);?>
<?php } elseif ($_smarty_tpl->tpl_vars['status_settings']->value['appearance_type']=="O") {?>
    <?php $_smarty_tpl->tpl_vars["order_header"] = new Smarty_variable($_smarty_tpl->__("order_details"), null, 0);?>
<?php }?>

<b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_header']->value, ENT_QUOTES, 'UTF-8');?>
:</b><br />

<?php echo $_smarty_tpl->getSubTemplate ("orders/invoice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
