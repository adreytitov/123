<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:57:34
         compiled from "/home/adreytitov/html/design/backend/templates/views/product_options/apply.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1683149108589de2ee21aee1-04000503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d37e68a4b1da377a58d03e5a47e1cc5a555ba69' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/product_options/apply.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1683149108589de2ee21aee1-04000503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'company_id' => 0,
    'product_options' => 0,
    'po' => 0,
    'select_languages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de2ee249c94_52721225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de2ee249c94_52721225')) {function content_589de2ee249c94_52721225($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_no_items_defined','products','select_options','apply','apply_as_link','apply_to_products'));
?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="add_global_options" class="form-table form-horizontal form-edit">
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php if (fn_allowed_for("ULTIMATE")&&$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->tpl_vars["company_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['runtime']->value['company_id'], null, 0);?>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"added_products",'input_name'=>"apply_options[product_ids]",'no_item_text'=>__("text_no_items_defined",array("[items]"=>__("products"))),'type'=>"links",'company_id'=>$_smarty_tpl->tpl_vars['company_id']->value,'placement'=>"right"), 0);?>


<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("select_options")), 0);?>

<?php  $_smarty_tpl->tpl_vars["po"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["po"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['product_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["po"]->key => $_smarty_tpl->tpl_vars["po"]->value) {
$_smarty_tpl->tpl_vars["po"]->_loop = true;
?>
    <label class="checkbox">
        <input type="checkbox" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_id'], ENT_QUOTES, 'UTF-8');?>
" name="apply_options[options][]" />
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['po']->value['option_name'], ENT_QUOTES, 'UTF-8');?>

        <?php echo $_smarty_tpl->getSubTemplate ("views/companies/components/company_name.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object'=>$_smarty_tpl->tpl_vars['po']->value), 0);?>

    </label>
<?php } ?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("buttons", null, null); ob_start(); ?>
<div class="btn-group btn-hover dropleft">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("apply"),'but_name'=>"dispatch[product_options.apply]",'but_role'=>"submit",'but_meta'=>"btn-primary dropdown-toggle"), 0);?>

    <ul class="dropdown-menu">
        <li><a>
            <label for="link">
                <input type="hidden" name="apply_options[link]" value="N" />
                <input type="checkbox" name="apply_options[link]" id="link" value="Y"/>
            <?php echo $_smarty_tpl->__("apply_as_link");?>

            </label>
        </a></li>
    </ul>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("apply_to_products"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'select_languages'=>$_smarty_tpl->tpl_vars['select_languages']->value), 0);?>

</form><?php }} ?>
