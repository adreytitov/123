<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 15:39:56
         compiled from "/home/adreytitov/html/design/backend/templates/buttons/add_empty_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1544508838589db49cef3ab2-91916181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d9ebef72700629d89eb3533e0a3a08a502457dd' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/buttons/add_empty_item.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1544508838589db49cef3ab2-91916181',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item_id' => 0,
    'but_onclick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589db49cef6eb5_69272698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589db49cef6eb5_69272698')) {function content_589db49cef6eb5_69272698($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add'));
?>
<a class="icon-plus cm-tooltip" name="add" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("add");?>
" onclick="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"></a>&nbsp;<?php }} ?>
