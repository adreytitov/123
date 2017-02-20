<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 13:55:31
         compiled from "/home/adreytitov/html/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1369125268589d9c230fc607-76508676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b5c270e68ce4232f583cb6f5ba096693ca47eb' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1369125268589d9c230fc607-76508676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'unique_blocks' => 0,
    'block' => 0,
    'block_types' => 0,
    'manage' => 0,
    'grid_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589d9c23111989_10414303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d9c23111989_10414303')) {function content_589d9c23111989_10414303($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/home/adreytitov/html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/home/adreytitov/html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php
fn_preload_lang_vars(array('delete_block'));
?>
<?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['unique_blocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]) {?>
        <div class="select-block cm-add-block bm-action-existing-block <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['single_for_location']) {?>bm-block-single-for-location<?php }?>">
            <input type="hidden" name="block_id" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="grid_id" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['grid_id']->value)===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
" />
            <a class="icon-remove-circle cm-tooltip cm-remove-block" title="<?php echo $_smarty_tpl->__("delete_block");?>
"></a>
            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'UTF-8', true),'...','&hellip;');?>
</strong>
                <p><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>
    <?php }?>
<?php } ?>
<?php }} ?>
