<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:10:03
         compiled from "/home/adreytitov/html/design/backend/mail/templates/profiles/profiles_extra_fields.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1930966690589ed4eb768b25-57557449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2372243e4ddb2d8c460bba2ab0650fa037f48db' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/profiles/profiles_extra_fields.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1930966690589ed4eb768b25-57557449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fields' => 0,
    'field' => 0,
    'order_info' => 0,
    'title' => 0,
    'user_data' => 0,
    'value' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed4eb787021_81091655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed4eb787021_81091655')) {function content_589ed4eb787021_81091655($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/adreytitov/html/app/functions/smarty_plugins/modifier.date_format.php';
?><?php
fn_preload_lang_vars(array('yes','no'));
?>
<?php  $_smarty_tpl->tpl_vars["field"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["field"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["field"]->key => $_smarty_tpl->tpl_vars["field"]->value) {
$_smarty_tpl->tpl_vars["field"]->_loop = true;
?>
<?php if (!$_smarty_tpl->tpl_vars['field']->value['field_name']) {?>
<?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable($_smarty_tpl->tpl_vars['order_info']->value['fields'][$_smarty_tpl->tpl_vars['field']->value['field_id']], null, 0);?>
<p>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['description'], ENT_QUOTES, 'UTF-8');?>
:
    <?php if (strpos("AOL",$_smarty_tpl->tpl_vars['field']->value['field_type'])!==false) {?> 
        <?php $_smarty_tpl->tpl_vars["title"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['field']->value['field_id'])."_descr", null, 0);?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value[$_smarty_tpl->tpl_vars['title']->value], ENT_QUOTES, 'UTF-8');?>

    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="C") {?>  
        <?php if ($_smarty_tpl->tpl_vars['value']->value=="Y") {
echo $_smarty_tpl->__("yes");
} else {
echo $_smarty_tpl->__("no");
}?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['field_type']=="D") {?>  
        <?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>

    <?php } elseif (strpos("RS",$_smarty_tpl->tpl_vars['field']->value['field_type'])!==false) {?>  
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['values'][$_smarty_tpl->tpl_vars['value']->value], ENT_QUOTES, 'UTF-8');?>

    <?php } else { ?>  
        <?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? "-" : $tmp), ENT_QUOTES, 'UTF-8');?>

    <?php }?>
</p>
<?php }?>
<?php } ?><?php }} ?>
