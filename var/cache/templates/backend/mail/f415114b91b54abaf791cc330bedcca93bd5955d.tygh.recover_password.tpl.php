<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:14:16
         compiled from "/home/adreytitov/html/design/backend/mail/templates/profiles/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1127129160589b0b98a9d555-25652887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f415114b91b54abaf791cc330bedcca93bd5955d' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/profiles/recover_password.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1127129160589b0b98a9d555-25652887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ekey' => 0,
    'zone' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0b98aa9488_81725054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0b98aa9488_81725054')) {function content_589b0b98aa9488_81725054($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_confirm_passwd_recovery'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/letter_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo $_smarty_tpl->__("text_confirm_passwd_recovery");?>
:<br /><br />

<a href="<?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_url("auth.recover_password?ekey=".((string)$_smarty_tpl->tpl_vars['ekey']->value),$_smarty_tpl->tpl_vars['zone']->value,'http'), ENT_QUOTES, 'UTF-8');?>
</a>

<?php echo $_smarty_tpl->getSubTemplate ("common/letter_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
