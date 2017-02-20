<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:10:03
         compiled from "/home/adreytitov/html/design/backend/mail/templates/common/price.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2138611810589ed4eb8470c6-04391463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4f7e9803d93eba39b88fbef5ed9e83f0364c149' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/common/price.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2138611810589ed4eb8470c6-04391463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'value' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'span_id' => 0,
    'class' => 0,
    'secondary_currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed4eb858c97_52455448',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed4eb858c97_52455448')) {function content_589ed4eb858c97_52455448($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_format_price')) include '/home/adreytitov/html/app/functions/smarty_plugins/modifier.format_price.php';
?><?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['alternative_currency']=="use_selected_and_alternative") {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value);
if ($_smarty_tpl->tpl_vars['secondary_currency']->value!=$_smarty_tpl->tpl_vars['primary_currency']->value) {?>&nbsp;(<?php echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);?>
)<?php }
} else {
echo smarty_modifier_format_price($_smarty_tpl->tpl_vars['value']->value,$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value],$_smarty_tpl->tpl_vars['span_id']->value,$_smarty_tpl->tpl_vars['class']->value,true);
}?><?php }} ?>
