<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:15:40
         compiled from "/home/adreytitov/html/design/backend/mail/templates/profiles/profiles_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:382310583589b0bec5d8d83-95933178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af9e5aa127c95163fdbd38e3c4b48c01d00305ed' => 
    array (
      0 => '/home/adreytitov/html/design/backend/mail/templates/profiles/profiles_info.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '382310583589b0bec5d8d83-95933178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user_data' => 0,
    'password' => 0,
    'settings' => 0,
    'login_url' => 0,
    'user_usergroup' => 0,
    'profile_fields' => 0,
    'contact_fields' => 0,
    'created' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0bec61cef5_93761224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0bec61cef5_93761224')) {function content_589b0bec61cef5_93761224($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.split.php';
?><?php
fn_preload_lang_vars(array('user_account_info','email','password','login','url','usergroups','pending','active','profile_name','tax_exempt','yes','contact_information','billing_address','shipping_address'));
?>
<table cellpadding="0" cellspacing="0" border="0">
<tr>
    <td valign="top">
        <table cellpadding="1" cellspacing="1" border="0" width="100%">
        <tr>
            <td colspan="2" class="form-title"><?php echo $_smarty_tpl->__("user_account_info");?>
<hr size="1" noshade></td>
        </tr>
        <tr>
            <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("email");?>
:&nbsp;</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['password']->value) {?>
        <tr>
            <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("password");?>
:&nbsp;</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['password']->value, ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['quick_registration']=="Y") {?>
            <tr>
                <td class="form-field-caption" nowrap><?php echo $_smarty_tpl->__("login");?>
 <?php echo $_smarty_tpl->__("url");?>
:&nbsp;</td>
                <?php $_smarty_tpl->tpl_vars['login_url'] = new Smarty_variable('', null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['user_data']->value['user_type']=="C"&&$_smarty_tpl->tpl_vars['user_data']->value['company_id']) {?>
                    <?php $_smarty_tpl->tpl_vars['login_url'] = new Smarty_variable("?company_id=".((string)$_smarty_tpl->tpl_vars['user_data']->value['company_id']), null, 0);?>
                <?php }?>
                <td><?php echo htmlspecialchars(fn_url($_smarty_tpl->tpl_vars['login_url']->value,$_smarty_tpl->tpl_vars['user_data']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
        <?php }?>
        <?php if (!fn_allowed_for("ULTIMATE:FREE")) {?>
            <?php if ($_smarty_tpl->tpl_vars['user_data']->value['usergroups']) {?>
                <tr>
                    <td colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" class="form-title"><?php echo $_smarty_tpl->__("usergroups");?>
<hr size="1" noshade></td>
                </tr>
                <?php  $_smarty_tpl->tpl_vars["user_usergroup"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["user_usergroup"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['user_data']->value['usergroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["user_usergroup"]->key => $_smarty_tpl->tpl_vars["user_usergroup"]->value) {
$_smarty_tpl->tpl_vars["user_usergroup"]->_loop = true;
?>
                    <tr>
                        <td class="form-field-caption" nowrap><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_usergroup']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['user_usergroup']->value['status']=='P') {
echo $_smarty_tpl->__("pending");
} else {
echo $_smarty_tpl->__("active");
}?></td>
                    </tr>
                <?php } ?>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['user_multiple_profiles']=='Y') {?>
        <tr>
            <td class="form-title"><?php echo $_smarty_tpl->__("profile_name");?>
:&nbsp;</td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_data']->value['profile_name'], ENT_QUOTES, 'UTF-8');?>
</td>
        </tr>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user_data']->value['tax_exempt']=='Y') {?>
        <tr>
            <td class="form-title"><?php echo $_smarty_tpl->__("tax_exempt");?>
:&nbsp;</td>
            <td><?php echo $_smarty_tpl->__("yes");?>
</td>
        </tr>
        <?php }?>
        </table>
    </td>    
    <td colspan="2">&nbsp;</td>
</tr>
<tr>
    <td colspan="3">&nbsp;</td>
</tr>
</table>

<?php $_smarty_tpl->tpl_vars["profile_fields"] = new Smarty_variable(fn_get_profile_fields($_smarty_tpl->tpl_vars['user_data']->value['user_type']), null, 0);?>
<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['profile_fields']->value['C'],'size'=>2,'assign'=>"contact_fields",'simple'=>true,'size_is_horizontal'=>true),$_smarty_tpl);?>

<table cellpadding="4" cellspacing="0" border="0" width="100%">
<?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['C']) {?>
    <tr>
        <td valign="top" width="50%">
            <table>
                <?php echo $_smarty_tpl->getSubTemplate ("profiles/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['contact_fields']->value[0],'title'=>__("contact_information")), 0);?>

            </table>
        </td>
        <td width="1%">&nbsp;</td>
        <td valign="top" width="49%">
            <?php if ($_smarty_tpl->tpl_vars['contact_fields']->value[1]) {?>
            <table>
                <?php echo $_smarty_tpl->getSubTemplate ("profiles/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['contact_fields']->value[1]), 0);?>

            </table>
            <?php }?>
        </td>
    </tr>
<?php }?>
<?php if (($_smarty_tpl->tpl_vars['profile_fields']->value['B']||$_smarty_tpl->tpl_vars['profile_fields']->value['S'])&&$_smarty_tpl->tpl_vars['user_data']->value['register_at_checkout']!="Y"&&!($_smarty_tpl->tpl_vars['created']->value&&$_smarty_tpl->tpl_vars['settings']->value['General']['quick_registration']=="Y")) {?>
<tr>
    <td valign="top">
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['B']) {?>
        <p></p>
        <table>
            <?php echo $_smarty_tpl->getSubTemplate ("profiles/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['B'],'title'=>__("billing_address")), 0);?>

        </table>
    <?php } else { ?>
        &nbsp;
    <?php }?>
    </td>
    <td>&nbsp;</td>
    <td valign="top">
    <?php if ($_smarty_tpl->tpl_vars['profile_fields']->value['S']) {?>
        <p></p>
        <table>
            <?php echo $_smarty_tpl->getSubTemplate ("profiles/profile_fields_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('fields'=>$_smarty_tpl->tpl_vars['profile_fields']->value['S'],'title'=>__("shipping_address")), 0);?>

        </table>
    <?php } else { ?>
        &nbsp;
    <?php }?>
    </td>
</tr>
<?php }?>
</table>
<?php }} ?>
