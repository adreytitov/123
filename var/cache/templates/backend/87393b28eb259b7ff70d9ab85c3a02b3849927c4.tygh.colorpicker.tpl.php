<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 13:43:22
         compiled from "/home/adreytitov/html/design/backend/templates/common/colorpicker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1393034822589d994ad7a681-06178292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87393b28eb259b7ff70d9ab85c3a02b3849927c4' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/colorpicker.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1393034822589d994ad7a681-06178292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cp_name' => 0,
    'cp_id' => 0,
    'cp_value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589d994ad7d6c5_92762505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d994ad7d6c5_92762505')) {function content_589d994ad7d6c5_92762505($_smarty_tpl) {?><div class="colorpicker">
    <input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_name']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cp_value']->value, ENT_QUOTES, 'UTF-8');?>
" data-ca-view="palette" class="cm-colorpicker">
</div><?php }} ?>
