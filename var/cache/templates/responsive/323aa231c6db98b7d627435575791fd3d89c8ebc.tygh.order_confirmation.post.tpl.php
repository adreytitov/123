<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:45:30
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/addons/google_analytics/hooks/checkout/order_confirmation.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1430488138589de01ab82335-13943438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '323aa231c6db98b7d627435575791fd3d89c8ebc' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/addons/google_analytics/hooks/checkout/order_confirmation.post.tpl',
      1 => 1486723844,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1430488138589de01ab82335-13943438',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'orders_info' => 0,
    'ga_order_info' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de01abb4310_33461303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de01abb4310_33461303')) {function content_589de01abb4310_33461303($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
if ($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['track_ecommerce']=='Y') {?>
<?php echo '<script'; ?>
 type="text/javascript">
ga('require', 'ecommerce', 'ecommerce.js');
<?php  $_smarty_tpl->tpl_vars["ga_order_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ga_order_info"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ga_order_info"]->key => $_smarty_tpl->tpl_vars["ga_order_info"]->value) {
$_smarty_tpl->tpl_vars["ga_order_info"]->_loop = true;
?>
ga('ecommerce:addTransaction', {
    'id': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
',
    'affiliation': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['ga_company_name'], ENT_QUOTES, 'UTF-8');?>
',
    'revenue': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['total'], ENT_QUOTES, 'UTF-8');?>
',
    'shipping': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['shipping_cost'], ENT_QUOTES, 'UTF-8');?>
',
    'tax': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['tax_subtotal'], ENT_QUOTES, 'UTF-8');?>
',
    'currency': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['secondary_currency'], ENT_QUOTES, 'UTF-8');?>
'
});

<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ga_order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
ga('ecommerce:addItem', {
    'id': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
',
    'name': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
',
    'sku': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
',
    'category': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ga_category_name'], ENT_QUOTES, 'UTF-8');?>
',
    'price': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
',
    'quantity': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
'
});
<?php } ?>
<?php } ?>
ga('ecommerce:send');
ga('ecommerce:clear');
<?php echo '</script'; ?>
>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/google_analytics/hooks/checkout/order_confirmation.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/google_analytics/hooks/checkout/order_confirmation.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['google_analytics']['track_ecommerce']=='Y') {?>
<?php echo '<script'; ?>
 type="text/javascript">
ga('require', 'ecommerce', 'ecommerce.js');
<?php  $_smarty_tpl->tpl_vars["ga_order_info"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["ga_order_info"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["ga_order_info"]->key => $_smarty_tpl->tpl_vars["ga_order_info"]->value) {
$_smarty_tpl->tpl_vars["ga_order_info"]->_loop = true;
?>
ga('ecommerce:addTransaction', {
    'id': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
',
    'affiliation': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['ga_company_name'], ENT_QUOTES, 'UTF-8');?>
',
    'revenue': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['total'], ENT_QUOTES, 'UTF-8');?>
',
    'shipping': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['shipping_cost'], ENT_QUOTES, 'UTF-8');?>
',
    'tax': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['tax_subtotal'], ENT_QUOTES, 'UTF-8');?>
',
    'currency': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['secondary_currency'], ENT_QUOTES, 'UTF-8');?>
'
});

<?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ga_order_info']->value['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["key"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
ga('ecommerce:addItem', {
    'id': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_order_info']->value['order_id'], ENT_QUOTES, 'UTF-8');?>
',
    'name': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
',
    'sku': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
',
    'category': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['ga_category_name'], ENT_QUOTES, 'UTF-8');?>
',
    'price': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
',
    'quantity': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['amount'], ENT_QUOTES, 'UTF-8');?>
'
});
<?php } ?>
<?php } ?>
ga('ecommerce:send');
ga('ecommerce:clear');
<?php echo '</script'; ?>
>
<?php }?>
<?php }?><?php }} ?>
