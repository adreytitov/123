<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 19:03:00
         compiled from "/home/adreytitov/html/design/backend/templates/buttons/create.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280671496589de434219bf6-88888549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd959b1adc844303729d6089c31a8de4751c9860' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/buttons/create.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '280671496589de434219bf6-88888549',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_text' => 0,
    '_but_text' => 0,
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de434223260_28996944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de434223260_28996944')) {function content_589de434223260_28996944($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('create'));
?>
<?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->tpl_vars['but_text']->value, null, 0);?>
<?php } else { ?>
	<?php $_smarty_tpl->tpl_vars["_but_text"] = new Smarty_variable($_smarty_tpl->__("create"), null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>$_smarty_tpl->tpl_vars['_but_text']->value,'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0);?>
<?php }} ?>
