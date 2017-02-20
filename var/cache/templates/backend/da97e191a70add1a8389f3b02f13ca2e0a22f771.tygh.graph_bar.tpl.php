<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 13:18:32
         compiled from "/home/adreytitov/html/design/backend/templates/views/sales_reports/components/graph_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1082593115589ee4f80c8754-91142504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da97e191a70add1a8389f3b02f13ca2e0a22f771' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/sales_reports/components/graph_bar.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1082593115589ee4f80c8754-91142504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value_width' => 0,
    'color' => 0,
    'bar_width' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ee4f80e7547_63415191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ee4f80e7547_63415191')) {function content_589ee4f80e7547_63415191($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/home/adreytitov/html/app/lib/vendor/smarty/smarty/libs/plugins/function.math.php';
?><?php echo smarty_function_math(array('equation'=>"floor(width / 20) + 1",'assign'=>"color",'width'=>$_smarty_tpl->tpl_vars['value_width']->value),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['color']->value>5) {?>
    <?php $_smarty_tpl->tpl_vars["color"] = new Smarty_variable("5", null, 0);?>
<?php }?>
<div class="progress" <?php if ($_smarty_tpl->tpl_vars['bar_width']->value) {?> style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bar_width']->value, ENT_QUOTES, 'UTF-8');?>
;"<?php }?> align="left"><div class="bar" <?php if ($_smarty_tpl->tpl_vars['value_width']->value>0) {?>class="graph-bar-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>
" style="width: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value_width']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div><?php }} ?>
