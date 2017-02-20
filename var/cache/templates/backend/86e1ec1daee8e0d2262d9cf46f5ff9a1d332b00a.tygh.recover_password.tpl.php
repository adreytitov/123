<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:13:22
         compiled from "/home/adreytitov/html/design/backend/templates/views/auth/recover_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:538449054589b0b62517f01-15538531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86e1ec1daee8e0d2262d9cf46f5ff9a1d332b00a' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/auth/recover_password.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '538449054589b0b62517f01-15538531',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0b625361d6_95127482',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0b625361d6_95127482')) {function content_589b0b625361d6_95127482($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('recover_password','text_recover_password_notice','email','reset_password'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="recover_form" class=" cm-skip-check-items cm-check-changes">
        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->__("recover_password");?>
</h4>
        </div>
        <div class="modal-body">
            <p><?php echo $_smarty_tpl->__("text_recover_password_notice");?>
</p>
            <label for="user_login"><?php echo $_smarty_tpl->__("email");?>
:</label>
            <input type="text" name="user_email" id="user_login" size="20" value="">
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("reset_password"),'but_name'=>"dispatch[auth.recover_password]",'but_role'=>"button_main"), 0);?>

        </div>
    </form>
</div><?php }} ?>
