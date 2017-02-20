<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:05:02
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/views/block_manager/render/container.tpl" */ ?>
<?php /*%%SmartyHeaderCode:919485722589b096e35a471-19528756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '189ab53c4aef650e77ddbd20290895ad532ff0ac' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/views/block_manager/render/container.tpl',
      1 => 1486555461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '919485722589b096e35a471-19528756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout_data' => 0,
    'container' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b096e35f720_36182932',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b096e35f720_36182932')) {function content_589b096e35f720_36182932($_smarty_tpl) {?><div class="<?php if ($_smarty_tpl->tpl_vars['layout_data']->value['layout_width']!="fixed") {?>container-fluid <?php } else { ?>container<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['container']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div><?php }} ?>
