<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:13:02
         compiled from "/home/adreytitov/html/design/backend/templates/views/auth/login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:964414729589b0b4e659989-77715045%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ab35a38ae24ab04617692ca00b3f3f1fa67b51f' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/auth/login_form.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '964414729589b0b4e659989-77715045',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stored_user_login' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0b4e66b1d2_93359918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0b4e66b1d2_93359918')) {function content_589b0b4e66b1d2_93359918($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('administration_panel','email','password','forgot_password_question'));
?>
<div class="modal signin-modal">
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="main_login_form" class=" cm-skip-check-items cm-check-changes">
        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars(fn_query_remove(fn_url($_REQUEST['return_url'],"A","rel"),"return_url"), ENT_QUOTES, 'UTF-8');?>
">
        <div class="modal-header">
            <h4><?php echo $_smarty_tpl->__("administration_panel");?>
</h4>
        </div>
        <div class="modal-body">
            <div class="control-group">
                <label for="username" class="cm-trim cm-required cm-email"><?php echo $_smarty_tpl->__("email");?>
:</label>
                <input id="username" type="text" name="user_login" size="20" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" class="cm-focus" tabindex="1">
            </div>
            <div class="control-group">
                <label for="password" class="cm-required"><?php echo $_smarty_tpl->__("password");?>
:</label>
                <input type="password" id="password" name="password" size="20" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" tabindex="2" maxlength="32">
            </div>
        </div>
        <div class="modal-footer">
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/sign_in.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[auth.login]",'but_role'=>"button_main",'tabindex'=>"3"), 0);?>

            <a href="<?php echo htmlspecialchars(fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="pull-right"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
        </div>
    </form>
</div><?php }} ?>
