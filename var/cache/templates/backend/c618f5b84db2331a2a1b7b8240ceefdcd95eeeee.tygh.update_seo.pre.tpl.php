<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:29:16
         compiled from "/home/adreytitov/html/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297451669589ddc4c912cb6-57889244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c618f5b84db2331a2a1b7b8240ceefdcd95eeeee' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1297451669589ddc4c912cb6-57889244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_uri' => 0,
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ddc4c91a9e4_74787760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ddc4c91a9e4_74787760')) {function content_589ddc4c91a9e4_74787760($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['view_uri']->value&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0);?>

<?php }?>
<?php }} ?>
