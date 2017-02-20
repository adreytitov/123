<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 20:25:10
         compiled from "/home/adreytitov/html/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:955090591589b5476147ec7-50262610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b280dffa0bb7154991ed4ca79818ec12ad8d094' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '955090591589b5476147ec7-50262610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b547614e441_00735593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b547614e441_00735593')) {function content_589b547614e441_00735593($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

<?php }?>
<?php }} ?>
