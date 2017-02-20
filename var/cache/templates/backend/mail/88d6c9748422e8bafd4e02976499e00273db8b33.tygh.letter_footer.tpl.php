<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:14:16
         compiled from "/home/adreytitov/html/design/backend/mail/templates/common/letter_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1083933351589b0b98ab3209-98647118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88d6c9748422e8bafd4e02976499e00273db8b33' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/common/letter_footer.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1083933351589b0b98ab3209-98647118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0b98ab6c33_72064819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0b98ab6c33_72064819')) {function content_589b0b98ab6c33_72064819($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('admin_text_letter_footer'));
?>
<p>
    <?php echo $_smarty_tpl->__("admin_text_letter_footer",array("[company_name]"=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_name']));?>

</p>
</body>
</html><?php }} ?>
