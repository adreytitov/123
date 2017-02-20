<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 13:59:45
         compiled from "/home/adreytitov/html/design/backend/templates/views/block_manager/update_container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:637652299589d9d21240fe1-05035359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12489018dc8a483bfecb1095c5a152a7d3d253cc' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/block_manager/update_container.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '637652299589d9d21240fe1-05035359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'container' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589d9d2126ced1_53573041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589d9d2126ced1_53573041')) {function content_589d9d2126ced1_53573041($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','user_class'));
?>

<?php if ($_smarty_tpl->tpl_vars['container']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_smarty_tpl->tpl_vars['container']->value['container_id'], null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable(0, null, 0);?>
<?php }?>

<div id="container_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal form-edit " name="container_update_form">
<input type="hidden" name="container_data[container_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />

<div class="tabs cm-j-tabs">
    <ul class="nav nav-tabs">
        <li class="cm-js active"><a><?php echo $_smarty_tpl->__("general");?>
</a></li>
    </ul>
</div>

<div class="cm-tabs-content">
<fieldset>
    <div class="control-group cm-no-hide-input">
        <label class="control-label" for="elm_container_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("user_class");?>
</label>
        <div class="controls">
        <input class="input-text" type="text" id="elm_container_user_class_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="container_data[user_class]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </div>

</fieldset>
</div>

<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/save_cancel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[block_manager.update_location]",'cancel_action'=>"close",'but_meta'=>"cm-dialog-closer",'save'=>$_smarty_tpl->tpl_vars['id']->value), 0);?>

</div>
</form>
<!--container_properties_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }} ?>
