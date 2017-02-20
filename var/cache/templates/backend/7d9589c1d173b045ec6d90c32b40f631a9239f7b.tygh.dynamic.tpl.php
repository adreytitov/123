<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:02:50
         compiled from "/home/adreytitov/html/design/backend/templates/views/promotions/dynamic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:647343507589ed33a74aae2-58215785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d9589c1d173b045ec6d90c32b40f631a9239f7b' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/promotions/dynamic.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '647343507589ed33a74aae2-58215785',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'elm_id' => 0,
    'picker_selected_companies' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed33a7674e1_22938647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed33a7674e1_22938647')) {function content_589ed33a7674e1_22938647($_smarty_tpl) {?><div id="container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php if ($_REQUEST['condition']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/condition.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('picker_selected_companies'=>$_smarty_tpl->tpl_vars['picker_selected_companies']->value), 0);?>


<?php } elseif ($_REQUEST['group']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php } elseif ($_REQUEST['bonus']) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/promotions/components/bonus.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<!--container_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['elm_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }} ?>
