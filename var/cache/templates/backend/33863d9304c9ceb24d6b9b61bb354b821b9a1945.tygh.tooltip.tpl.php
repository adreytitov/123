<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:20:48
         compiled from "/home/adreytitov/html/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1019548202589b0d20ed33b7-25891683%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33863d9304c9ceb24d6b9b61bb354b821b9a1945' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/tooltip.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1019548202589b0d20ed33b7-25891683',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0d20ed81c9_47293417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0d20ed81c9_47293417')) {function content_589b0d20ed81c9_47293417($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');
}?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
