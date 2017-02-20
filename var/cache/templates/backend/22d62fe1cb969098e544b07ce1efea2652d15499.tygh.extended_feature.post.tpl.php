<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:52:36
         compiled from "/home/adreytitov/html/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1946643852589de1c4751502-14822571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22d62fe1cb969098e544b07ce1efea2652d15499' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/seo/hooks/product_features/extended_feature.post.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1946643852589de1c4751502-14822571',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'feature_type' => 0,
    'runtime' => 0,
    'var' => 0,
    'num' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de1c475b579_76293028',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de1c475b579_76293028')) {function content_589de1c475b579_76293028($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_enum')) include '/home/adreytitov/html/app/functions/smarty_plugins/modifier.enum.php';
?><?php if ($_smarty_tpl->tpl_vars['feature_type']->value==smarty_modifier_enum("ProductFeatures::EXTENDED")&&($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR"))) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['var']->value,'object_name'=>"feature_data[variants][".((string)$_smarty_tpl->tpl_vars['num']->value)."]",'hide_title'=>true,'object_id'=>$_smarty_tpl->tpl_vars['var']->value['variant_id'],'object_type'=>"e"), 0);?>

<?php }?><?php }} ?>
