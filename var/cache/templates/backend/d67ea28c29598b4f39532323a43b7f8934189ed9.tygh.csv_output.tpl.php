<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:52:21
         compiled from "/home/adreytitov/html/design/backend/templates/views/exim/components/csv_output.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45392573589de1b5813393-17009462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd67ea28c29598b4f39532323a43b7f8934189ed9' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/exim/components/csv_output.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '45392573589de1b5813393-17009462',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'value' => 0,
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de1b581f277_70530682',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de1b581f277_70530682')) {function content_589de1b581f277_70530682($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('direct_download','screen','server'));
?>
<select name="export_options[output]" id="output">
    <option value="D" <?php if ($_smarty_tpl->tpl_vars['value']->value=="D") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("direct_download");?>
</option>
    <option value="C" <?php if ($_smarty_tpl->tpl_vars['value']->value=="C") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("screen");?>
</option>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']||!empty($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'])) {?>
        <option value="S" <?php if ($_smarty_tpl->tpl_vars['value']->value=="S") {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__("server");?>
</option>
    <?php }?>
</select><?php }} ?>
