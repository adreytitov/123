<?php /* Smarty version Smarty-3.1.21, created on 2017-02-10 18:51:25
         compiled from "/home/adreytitov/html/design/backend/templates/views/file_editor/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:550120943589de17dc0ce72-88439452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c76de35bc63002f4436f5f842a9c00ab29088e34' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/file_editor/manage.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '550120943589de17dc0ce72-88439452',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589de17dc2f781_70392631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589de17dc2f781_70392631')) {function content_589de17dc2f781_70392631($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_inline_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/block.inline_script.php';
?><?php
fn_preload_lang_vars(array('file_editor'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>

    <?php echo smarty_function_script(array('src'=>"js/lib/elfinder/js/elfinder.min.js"),$_smarty_tpl);?>


    <?php if (@constant('CART_LANGUAGE')!='en') {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/elfinder/js/i18n/elfinder.".((string)@constant('CART_LANGUAGE')).".js"),$_smarty_tpl);?>

    <?php }?>

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function(_, $) {

        $.loadCss(['js/lib/elfinder/css/elfinder.min.css']);
        $.loadCss(['js/lib/elfinder/css/theme.css']);

        $(document).ready(function() {

            var w = $.getWindowSizes();
            $('#elfinder').elfinder({
                url : fn_url('elf_connector.manage?start_path=<?php echo htmlspecialchars($_REQUEST['path'], ENT_QUOTES, 'UTF-8');?>
&security_hash=' + _.security_hash),
                rememberLastDir: true,
                useBrowserHistory: true,
                resizable: false,
                lang: _.cart_language,
                height: w.view_height - 170,
                uiOptions: {
                    toolbar : [
                        ['back', 'forward'],
                        ['mkdir', 'mkfile', 'upload'],
                        ['download'],
                        ['info'],
                        ['quicklook'],
                        ['copy', 'cut', 'paste'],
                        ['rm', 'rename'],
                        ['edit'],
                        ['extract', 'archive'],
                        ['search'],
                        ['view']
                    ]
                },
                requestType: 'post'
            });
        });
    }(Tygh, Tygh.$))
    <?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


    <div id="elfinder"></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title'=>__("file_editor"),'buttons'=>Smarty::$_smarty_vars['capture']['buttons'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar'],'sidebar_position'=>"left"), 0);?>

<?php }} ?>
