<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:52:36
         compiled from "/home/adreytitov/html/design/backend/templates/views/product_features/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1686011776589de1c43ba455-30760563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd695a0795eea1b83ed0271460d15df8c9ee2ffd9' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/product_features/manage.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1686011776589de1c43ba455-30760563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
    'features' => 0,
    'has_ungroupped' => 0,
    'p_feature' => 0,
    'show_in_popup' => 0,
    'r_url' => 0,
    'gr_feature' => 0,
    'subfeature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de1c4467bd6_45445924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de1c4467bd6_45445924')) {function content_589de1c4467bd6_45445924($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_modifier_enum')) include '/home/adreytitov/html/app/functions/smarty_plugins/modifier.enum.php';
?><?php
fn_preload_lang_vars(array('ungroupped_features','editing_product_feature','viewing_feature','view','viewing_feature','view','editing_group','viewing_feature','view','editing_product_feature','no_data','new_group','add_group','new_feature','add_feature','features'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->tpl_vars["r_url"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), null, 0);?>
<?php $_smarty_tpl->tpl_vars["show_in_popup"] = new Smarty_variable(false, null, 0);?>

<div class="items-container<?php if (fn_check_form_permissions('')) {?> cm-hide-inputs<?php }?>" id="update_features_list">
<?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['has_ungroupped']->value) {?>
        <div class="object-group clear no-hover row-gray">
            <strong><?php echo $_smarty_tpl->__("ungroupped_features");?>
</strong>
        </div>
    <?php }?>
<table width="100%" class="table table-middle table-objects">
<tbody>
    <?php if ($_smarty_tpl->tpl_vars['has_ungroupped']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["p_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p_feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["p_feature"]->key => $_smarty_tpl->tpl_vars["p_feature"]->value) {
$_smarty_tpl->tpl_vars["p_feature"]->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['p_feature']->value['feature_type']!=smarty_modifier_enum("ProductFeatures::GROUP")) {?>
                
                <?php if ($_smarty_tpl->tpl_vars['p_feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                    <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(true, null, 0);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(false, null, 0);?>
                <?php }?>

                <?php if (fn_allow_save_object($_smarty_tpl->tpl_vars['p_feature']->value,"product_features")) {?>
                    <?php ob_start();
if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?><?php echo "&return_url=";?><?php echo (string)$_smarty_tpl->tpl_vars['r_url']->value;?><?php }
$_tmp1=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("editing_product_feature");
$_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'],'details'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_description'],'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'status'=>$_smarty_tpl->tpl_vars['p_feature']->value['status'],'hidden'=>true,'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']).$_tmp1,'object_id_name'=>"feature_id",'table'=>"product_features",'href_delete'=>"product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'delete_target_id'=>"pagination_contents",'header_text'=>$_tmp2.": ".((string)$_smarty_tpl->tpl_vars['p_feature']->value['description']),'no_table'=>true,'no_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value,'company_object'=>$_smarty_tpl->tpl_vars['p_feature']->value), 0);?>

                <?php } else { ?>
                    <?php ob_start();
if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?><?php echo "&return_url=";?><?php echo (string)$_smarty_tpl->tpl_vars['r_url']->value;?><?php }
$_tmp3=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("viewing_feature");
$_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_id'],'details'=>$_smarty_tpl->tpl_vars['p_feature']->value['feature_description'],'text'=>$_smarty_tpl->tpl_vars['p_feature']->value['description'],'status'=>$_smarty_tpl->tpl_vars['p_feature']->value['status'],'hidden'=>true,'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['p_feature']->value['feature_id']).$_tmp3,'object_id_name'=>"feature_id",'table'=>"product_features",'additional_class'=>"cm-hide-inputs",'header_text'=>$_tmp4.": ".((string)$_smarty_tpl->tpl_vars['p_feature']->value['description']),'update_controller'=>"product_features",'no_table'=>true,'non_editable'=>true,'link_text'=>__("view"),'is_view_link'=>true,'company_object'=>$_smarty_tpl->tpl_vars['p_feature']->value), 0);?>

                <?php }?>
            <?php }?>
        <?php } ?>
    <?php }?>

    <?php  $_smarty_tpl->tpl_vars["gr_feature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["gr_feature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["gr_feature"]->key => $_smarty_tpl->tpl_vars["gr_feature"]->value) {
$_smarty_tpl->tpl_vars["gr_feature"]->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['gr_feature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::GROUP")) {?>

            <?php if (!fn_allow_save_object($_smarty_tpl->tpl_vars['gr_feature']->value,"product_features")) {?>
                <?php ob_start();
echo $_smarty_tpl->__("viewing_feature");
$_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['gr_feature']->value['feature_id'],'details'=>$_smarty_tpl->tpl_vars['gr_feature']->value['feature_description'],'text'=>$_smarty_tpl->tpl_vars['gr_feature']->value['description'],'status'=>$_smarty_tpl->tpl_vars['gr_feature']->value['status'],'hidden'=>true,'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['gr_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'object_id_name'=>"feature_id",'table'=>"product_features",'additional_class'=>"row-gray",'header_text'=>$_tmp5.": ".((string)$_smarty_tpl->tpl_vars['gr_feature']->value['description']),'no_table'=>true,'link_meta'=>"strong",'link_text'=>__("view"),'non_editable'=>true,'is_view_link'=>true,'company_object'=>$_smarty_tpl->tpl_vars['gr_feature']->value), 0);?>

            <?php } else { ?>
                <?php ob_start();
echo $_smarty_tpl->__("editing_group");
$_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['gr_feature']->value['feature_id'],'details'=>$_smarty_tpl->tpl_vars['gr_feature']->value['feature_description'],'text'=>$_smarty_tpl->tpl_vars['gr_feature']->value['description'],'status'=>$_smarty_tpl->tpl_vars['gr_feature']->value['status'],'hidden'=>true,'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['gr_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'object_id_name'=>"feature_id",'table'=>"product_features",'href_delete'=>"product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['gr_feature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'delete_target_id'=>"pagination_contents,content_add_new_feature",'header_text'=>$_tmp6.": ".((string)$_smarty_tpl->tpl_vars['gr_feature']->value['description']),'no_table'=>true,'link_meta'=>"strong",'company_object'=>$_smarty_tpl->tpl_vars['gr_feature']->value,'additional_class'=>"row-gray"), 0);?>

            <?php }?>


            <?php if ($_smarty_tpl->tpl_vars['gr_feature']->value['subfeatures']) {?>
                <?php  $_smarty_tpl->tpl_vars["subfeature"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["subfeature"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gr_feature']->value['subfeatures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["subfeature"]->key => $_smarty_tpl->tpl_vars["subfeature"]->value) {
$_smarty_tpl->tpl_vars["subfeature"]->_loop = true;
?>

                    <?php if ($_smarty_tpl->tpl_vars['subfeature']->value['feature_type']==smarty_modifier_enum("ProductFeatures::EXTENDED")) {?>
                        <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(true, null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars['show_in_popup'] = new Smarty_variable(false, null, 0);?>
                    <?php }?>

                    <?php if (!fn_allow_save_object($_smarty_tpl->tpl_vars['subfeature']->value,"product_features")) {?>
                        <?php ob_start();
if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?><?php echo "&return_url=";?><?php echo (string)$_smarty_tpl->tpl_vars['r_url']->value;?><?php }
$_tmp7=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("viewing_feature");
$_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['subfeature']->value['feature_id'],'details'=>$_smarty_tpl->tpl_vars['subfeature']->value['feature_description'],'text'=>$_smarty_tpl->tpl_vars['subfeature']->value['description'],'status'=>$_smarty_tpl->tpl_vars['subfeature']->value['status'],'hidden'=>true,'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['subfeature']->value['feature_id']).$_tmp7,'object_id_name'=>"feature_id",'table'=>"product_features",'additional_class'=>"cm-hide-inputs",'header_text'=>$_tmp8.": ".((string)$_smarty_tpl->tpl_vars['subfeature']->value['description']),'update_controller'=>"product_features",'no_table'=>true,'non_editable'=>true,'link_text'=>__("view"),'is_view_link'=>true,'company_object'=>$_smarty_tpl->tpl_vars['subfeature']->value), 0);?>

                    <?php } else { ?>
                        <?php ob_start();
if (!$_smarty_tpl->tpl_vars['show_in_popup']->value) {?><?php echo "&return_url=";?><?php echo (string)$_smarty_tpl->tpl_vars['r_url']->value;?><?php }
$_tmp9=ob_get_clean();?><?php ob_start();
echo $_smarty_tpl->__("editing_product_feature");
$_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['subfeature']->value['feature_id'],'details'=>$_smarty_tpl->tpl_vars['subfeature']->value['feature_description'],'text'=>$_smarty_tpl->tpl_vars['subfeature']->value['description'],'status'=>$_smarty_tpl->tpl_vars['subfeature']->value['status'],'hidden'=>true,'href'=>"product_features.update?feature_id=".((string)$_smarty_tpl->tpl_vars['subfeature']->value['feature_id']).$_tmp9,'object_id_name'=>"feature_id",'table'=>"product_features",'href_delete'=>"product_features.delete?feature_id=".((string)$_smarty_tpl->tpl_vars['subfeature']->value['feature_id'])."&return_url=".((string)$_smarty_tpl->tpl_vars['r_url']->value),'delete_target_id'=>"pagination_contents",'header_text'=>$_tmp10.": ".((string)$_smarty_tpl->tpl_vars['subfeature']->value['description']),'update_controller'=>"product_features",'no_table'=>true,'company_object'=>$_smarty_tpl->tpl_vars['subfeature']->value,'no_popup'=>$_smarty_tpl->tpl_vars['show_in_popup']->value), 0);?>

                    <?php }?>

                <?php } ?>
            <?php }?>

        <?php }?>
    <?php } ?>
    </tbody>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>
<!--update_features_list--></div>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("tools_list", null, null); ob_start(); ?>
        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>array(),'in_popup'=>true,'is_group'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_group",'text'=>__("new_group"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'link_text'=>__("add_group"),'act'=>"link",'icon'=>"true"), 0);?>
</li>

        <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker_2", null, null); ob_start(); ?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('feature'=>array(),'in_popup'=>true,'return_url'=>$_smarty_tpl->tpl_vars['config']->value['current_url']), 0);?>

        <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
        <li><?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_feature",'text'=>__("new_feature"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker_2'],'link_text'=>__("add_feature"),'act'=>"link",'icon'=>"true"), 0);?>
</li>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php smarty_template_function_dropdown($_smarty_tpl,array('content'=>Smarty::$_smarty_vars['capture']['tools_list'],'icon'=>"icon-plus",'no_caret'=>true,'placement'=>"right"));?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("sidebar", null, null); ob_start(); ?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/saved_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_features.manage",'view_type'=>"product_features"), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/product_features/components/product_features_search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('dispatch'=>"product_features.manage"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("features"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'select_languages'=>true,'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
