<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:14:31
         compiled from "/home/adreytitov/html/design/backend/templates/views/profiles/components/profiles_scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1899172218589b0ba77b71c2-28714008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b57ef0fee0a72868d0a52e7c1e7ac1eb0cfbe63' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/profiles/components/profiles_scripts.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1899172218589b0ba77b71c2-28714008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'states' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0ba77c1e34_79753731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0ba77c1e34_79753731')) {function content_589b0ba77c1e34_79753731($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
(function(_, $) {

    /* Do not put this code to document.ready, because it should be
       initialized first
    */
    $.ceRebuildStates('init', {
        default_country: '<?php echo htmlspecialchars(strtr($_smarty_tpl->tpl_vars['settings']->value['General']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" )), ENT_QUOTES, 'UTF-8');?>
',
        states: <?php echo json_encode($_smarty_tpl->tpl_vars['states']->value);?>

    });


    
    $.ceFormValidator('setZipcode', {
        US: {
            regexp: /^(\d{5})(-\d{4})?$/,
            format: '01342 (01342-5678)'
        },
        CA: {
            regexp: /^(\w{3} ?\w{3})$/,
            format: 'K1A OB1 (K1AOB1)'
        },
        RU: {
            regexp: /^(\d{6})?$/,
            format: '123456'
        }
    });
    

}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
