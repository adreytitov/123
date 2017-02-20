<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 20:25:10
         compiled from "/home/adreytitov/html/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1665639319589b54761bd2a9-94252824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e347a0fc579a2ce8fa8758052e2fc2eb22310f2' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1665639319589b54761bd2a9-94252824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b54761c50e5_00915571',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b54761c50e5_00915571')) {function content_589b54761c50e5_00915571($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['page_data']->value,'object_name'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>"a"), 0);?>

<?php }?><?php }} ?>
