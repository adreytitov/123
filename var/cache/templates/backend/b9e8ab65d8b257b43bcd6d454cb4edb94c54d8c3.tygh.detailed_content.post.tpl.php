<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 13:12:09
         compiled from "/home/adreytitov/html/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2067340872589d91f9433395-17745116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9e8ab65d8b257b43bcd6d454cb4edb94c54d8c3' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/seo/hooks/companies/detailed_content.post.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2067340872589d91f9433395-17745116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'company_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589d91f9438691_84761775',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d91f9438691_84761775')) {function content_589d91f9438691_84761775($_smarty_tpl) {?><?php if (!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['company_data']->value,'object_name'=>"company_data",'object_id'=>$_smarty_tpl->tpl_vars['company_data']->value['company_id'],'object_type'=>"m"), 0);?>

<?php }?><?php }} ?>
