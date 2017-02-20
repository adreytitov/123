<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:45:38
         compiled from "/home/adreytitov/html/design/backend/templates/common/products_to_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1916493684589de022c9f469-22481205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc3c67a023e62ab2e2dd4fa3b113824d01e70e5d' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/products_to_search.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1916493684589de022c9f469-22481205',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'search' => 0,
    'product_ids' => 0,
    'views' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de022cb5793_51261428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de022cb5793_51261428')) {function content_589de022cb5793_51261428($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add','or_saved_search'));
?>
<?php if ($_smarty_tpl->tpl_vars['search']->value['p_ids']) {?>
    <?php $_smarty_tpl->tpl_vars["product_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['search']->value['p_ids']), null, 0);?>
<?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"added_products",'but_text'=>__("add"),'item_ids'=>$_smarty_tpl->tpl_vars['product_ids']->value,'input_name'=>"p_ids",'type'=>"links",'no_container'=>true,'picker_view'=>true), 0);?>

    <?php $_smarty_tpl->tpl_vars["views"] = new Smarty_variable(fn_get_views("products"), null, 0);?>
    <?php if ($_smarty_tpl->tpl_vars['views']->value) {?>
    <?php echo $_smarty_tpl->__("or_saved_search");?>
:&nbsp;
    <select name="product_view_id">
        <option value="0">--</option>
        <?php  $_smarty_tpl->tpl_vars["f"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["f"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['views']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["f"]->key => $_smarty_tpl->tpl_vars["f"]->value) {
$_smarty_tpl->tpl_vars["f"]->_loop = true;
?>
            <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['view_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['product_view_id']==$_smarty_tpl->tpl_vars['f']->value['view_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['f']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
        <?php } ?>
    </select>
    <?php }?><?php }} ?>
