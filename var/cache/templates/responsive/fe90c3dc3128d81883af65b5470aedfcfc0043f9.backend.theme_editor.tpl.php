<?php /* Smarty version Smarty-3.1.21, created on 2017-02-08 15:17:56
         compiled from "/home/adreytitov/html/design/backend/templates/common/theme_editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:615498603589b0c744a08f9-16717784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe90c3dc3128d81883af65b5470aedfcfc0043f9' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/common/theme_editor.tpl',
      1 => 1457188866,
      2 => 'backend',
    ),
  ),
  'nocache_hash' => '615498603589b0c744a08f9-16717784',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589b0c744afb12_97454148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589b0c744afb12_97454148')) {function content_589b0c744afb12_97454148($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/lib/ace/ace.js"),$_smarty_tpl);?>

<div id="theme_editor">
<div class="theme-editor"></div>
<?php echo smarty_function_script(array('src'=>"js/tygh/theme_editor.js"),$_smarty_tpl);?>

<!--theme_editor--></div>
<?php }} ?>
