<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:20:18
         compiled from "/home/adreytitov/html/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1264505689589b0d0264f597-67496230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a71c4fb35cbab77b6b378dcbe10c9432fc8808f' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/addons/twigmo/hooks/block_manager/settings.post.tpl',
      1 => 1457188875,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1264505689589b0d0264f597-67496230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_twigmo_location' => 0,
    'html_id' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0d02656e88_46243212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0d02656e88_46243212')) {function content_589b0d02656e88_46243212($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['is_twigmo_location']->value) {?>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header"><?php echo $_smarty_tpl->__('twgadmin_hide_header');?>
:</label>
        <div class="controls">
            <input type="hidden" name="block_data[properties][hide_header]" value="N">
            <input type="checkbox" class="checkbox" name="block_data[properties][hide_header]" value="Y" id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_hide_header" <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']&&$_smarty_tpl->tpl_vars['block']->value['properties']['hide_header']=="Y") {?>checked="checked"<?php }?> >
        </div>
    </div>
<?php }?><?php }} ?>
