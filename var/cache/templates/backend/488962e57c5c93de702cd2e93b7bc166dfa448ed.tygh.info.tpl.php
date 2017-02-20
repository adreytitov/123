<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:15:49
         compiled from "/home/adreytitov/html/design/backend/templates/addons/call_requests/settings/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189716592589b0bf5a28427-69479949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '488962e57c5c93de702cd2e93b7bc166dfa448ed' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/call_requests/settings/info.tpl',
      1 => 1457188865,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '189716592589b0bf5a28427-69479949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0bf5a492a0_26969766',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0bf5a492a0_26969766')) {function content_589b0bf5a492a0_26969766($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('call_requests.phone_from_settings'));
?>
<div class="control-group setting-wide call_requests">

    <label for="addon_option_call_requests_phone" class="control-label "><?php echo $_smarty_tpl->__("call_requests.phone_from_settings");?>
:</label>

    <div class="controls">
        <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Company']['company_phone'], ENT_QUOTES, 'UTF-8');?>
</p>
    </div>

</div><?php }} ?>
