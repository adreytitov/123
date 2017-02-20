<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:12:25
         compiled from "/home/adreytitov/html/design/backend/templates/common/sidebox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:765766555589ed57913e939-42008728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13d6ccf06fb1afba6b6cf665f5b1f7d8fd58eca3' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/sidebox.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '765766555589ed57913e939-42008728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed579144f28_34261097',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed579144f28_34261097')) {function content_589ed579144f28_34261097($_smarty_tpl) {?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['content']->value)===null||$tmp==='' ? "&nbsp;" : $tmp);?>

    </div>
    <hr />
<?php }?><?php }} ?>
