<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 13:18:31
         compiled from "/home/adreytitov/html/design/backend/templates/views/sales_reports/components/amchart_pie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971500674589ee4f7d58467-53774697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa0ec90f783c6c6bf5ac3c2d85ec59ead3fd46b6' => 
    array (
      0 => '/home/adreytitov/html/design/backend/templates/views/sales_reports/components/amchart_pie.tpl',
      1 => 1457188866,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '971500674589ee4f7d58467-53774697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'chart_id' => 0,
    'chart_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ee4f7d6ce41_33881271',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ee4f7d6ce41_33881271')) {function content_589ee4f7d6ce41_33881271($_smarty_tpl) {?><?php if (!is_callable('smarty_block_inline_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/block.inline_script.php';
?><div id="chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_pie" style="width: 100%; height: 410px;"></div>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('inline_script', array()); $_block_repeat=true; echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo '<script'; ?>
 type="text/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.tab.show', function(){
            var chart = new AmCharts.AmPieChart();
            var legend = new AmCharts.AmLegend();
            legend.align = "center",
            legend.borderAlpha = 1,
            legend.borderColor = "#ddd",
            legend.marginLeft = 100,
            legend.marginRight = 100,
            legend.autoMargins = false,
            chart.addLegend(legend);
            chart.titleField = "label";
            chart.descriptionField = "full_descr";
            chart.valueField = "count";
            chart.outlineColor = "#FFFFFF";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            chart.balloonText = "[[description]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
            chart.height = '100%';
            chart.dataProvider = <?php echo json_encode($_smarty_tpl->tpl_vars['chart_data']->value);?>
;
            // this makes the chart 3D
            chart.depth3D = 15;
            chart.angle = 30;

            chart.write("chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_pie");
        });
    }(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_inline_script(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }} ?>
