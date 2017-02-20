<?php /* Smarty version Smarty-3.1.21, created on 2017-02-11 12:08:13
         compiled from "/home/adreytitov/html/design/themes/responsive/templates/views/orders/components/payments/cc_eway.tpl" */ ?>
<?php /*%%SmartyHeaderCode:934856126589ed47dbd6d85-81454222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e18dc4093bc131f12999c9135d46fde0d669a0' => 
    array (
      0 => '/home/adreytitov/html/design/themes/responsive/templates/views/orders/components/payments/cc_eway.tpl',
      1 => 1486555461,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '934856126589ed47dbd6d85-81454222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'card_id' => 0,
    'id_suffix' => 0,
    'tab_id' => 0,
    'cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_589ed47dc33f67_81201229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589ed47dc33f67_81201229')) {function content_589ed47dc33f67_81201229($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/home/adreytitov/html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('card_number','valid_thru','cardholder_name','cvv2','error_validator_ccv','card_number','valid_thru','cardholder_name','cvv2','error_validator_ccv'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {
$_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start();
echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="clearfix">
    <div class="ty-credit-card">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-cc-number ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-focus cm-autocomplete-off" />
                <ul class="ty-cc-icons cm-cc-icons">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>
    
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-date cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-cc-date cm-cc-exp-year hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short " />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short" />&nbsp;
            </div>
    
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
    </div>
    
    <div class="ty-control-group ty-credit-card__cvv-field">
        <label for="eway_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-cc-cvv2 ty-control-group__title cm-required cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
        <input type="text" id="eway_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-autocomplete-off" />
    </div>
</div>
<?php echo '<script'; ?>
 class="cm-ajax-force">
(function(_, $) {

    $.ceEvent('on', 'ce.commoninit', function() {
        var icons = $('.cm-cc-icons li');
        var ccNumber = $(".cm-cc-number");
        var ccNumberInput = $("#" + ccNumber.attr("for"));
        var ccCv2 = $(".cm-cc-cvv2");
        var ccCv2Input = $("#" + ccCv2.attr("for"));
        var ccMonth = $(".cm-cc-exp-month");
        var ccMonthInput = $("#" + ccMonth.attr("for"));
        var ccYear = $(".cm-cc-exp-year");
        var ccYearInput = $("#" + ccYear.attr("for"));

        if(_.isTouch === false && jQuery.isEmptyObject(ccNumberInput.data("_inputmask")) == true) {

            ccNumberInput.inputmask("9999 9999 9999 9[99][9]", {
                placeholder: ' '
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-number',
                message: '',
                func: function(id) {
                    return ccNumberInput.inputmask("isComplete");
                }
            });

            ccCv2Input.inputmask("999[9]", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-cvv2',
                message: "<?php echo $_smarty_tpl->__("error_validator_ccv");?>
",
                func: function(id) {
                    return ccCv2Input.inputmask("isComplete");
                }
            });

            ccMonthInput.inputmask("99", {
                placeholder: ''
            });

            ccYearInput.inputmask("99", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-date',
                message: '',
                func: function(id) {
                    return (ccYearInput.inputmask("isComplete") && ccMonthInput.inputmask("isComplete"));
                }
            });
        }

        ccNumberInput.validateCreditCard(function(result) {
            icons.removeClass('active');
            if (result.card_type) {
                icons.filter('.cm-cc-' + result.card_type.name).addClass('active');
                if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                    ccCv2.removeClass("cm-required");
                } else {
                    ccCv2.addClass("cm-required");
                }
            }
        });

    });

    $(document).ready(function(){
        $.getScript("https://secure.ewaypayments.com/scripts/eCrypt.js");
        $("#place_order_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
").on('click', function(){
            if ($("#eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").attr('data-eway-encrypted') != 'yes') {
                var elm_cvv = $("#eway_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
");
                var elm_num = $("#eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
");
                var cvv_val = elm_cvv.val();
                var num_val = elm_num.val().replace(/\s/g, '');
                var enc_cvv = eCrypt.encryptValue(cvv_val, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_method_data']['processor_params']['encryption_key'], ENT_QUOTES, 'UTF-8');?>
');
                var enc_num = eCrypt.encryptValue(num_val, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_method_data']['processor_params']['encryption_key'], ENT_QUOTES, 'UTF-8');?>
');
                elm_cvv.inputmask('remove');
                elm_num.inputmask('remove');
                elm_cvv.val(enc_cvv);
                elm_num.val(enc_num);
                elm_cvv.prop('maxlength', enc_cvv.length);
                elm_num.attr('data-eway-encrypted', 'yes');
            }
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {
if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/orders/components/payments/cc_eway.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/orders/components/payments/cc_eway.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else {
echo Smarty::$_smarty_vars['capture']['template_content'];
}
}
} else {
echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/creditcardvalidator/jquery.creditCardValidator.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['card_id']->value) {?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['card_id']->value), null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["id_suffix"] = new Smarty_variable('', null, 0);?>
<?php }?>

<div class="clearfix">
    <div class="ty-credit-card">
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-cc-number ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("card_number");?>
</label>
                <input size="35" type="text" id="eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[card_number]" value="" class="ty-credit-card__input cm-focus cm-autocomplete-off" />
                <ul class="ty-cc-icons cm-cc-icons">
                    <li class="ty-cc-icons__item cc-default cm-cc-default"><span class="ty-cc-icons__icon default">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa"><span class="ty-cc-icons__icon visa">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-visa_electron"><span class="ty-cc-icons__icon visa-electron">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-mastercard"><span class="ty-cc-icons__icon mastercard">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-maestro"><span class="ty-cc-icons__icon maestro">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-amex"><span class="ty-cc-icons__icon american-express">&nbsp;</span></li>
                    <li class="ty-cc-icons__item cm-cc-discover"><span class="ty-cc-icons__icon discover">&nbsp;</span></li>
                </ul>
            </div>
    
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-cc-date cm-cc-exp-month cm-required"><?php echo $_smarty_tpl->__("valid_thru");?>
</label>
                <label for="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-required cm-cc-date cm-cc-exp-year hidden"></label>
                <input type="text" id="credit_card_month_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[expiry_month]" value="" size="2" maxlength="2" class="ty-credit-card__input-short " />&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" id="credit_card_year_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
"  name="payment_info[expiry_year]" value="" size="2" maxlength="2" class="ty-credit-card__input-short" />&nbsp;
            </div>
    
            <div class="ty-credit-card__control-group ty-control-group">
                <label for="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-control-group__title cm-required"><?php echo $_smarty_tpl->__("cardholder_name");?>
</label>
                <input size="35" type="text" id="credit_card_name_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cardholder_name]" value="" class="cm-cc-name ty-credit-card__input ty-uppercase" />
            </div>
    </div>
    
    <div class="ty-control-group ty-credit-card__cvv-field">
        <label for="eway_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="cm-cc-cvv2 ty-control-group__title cm-required cm-autocomplete-off"><?php echo $_smarty_tpl->__("cvv2");?>
</label>
        <input type="text" id="eway_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" name="payment_info[cvv2]" value="" size="4" maxlength="4" class="cm-autocomplete-off" />
    </div>
</div>
<?php echo '<script'; ?>
 class="cm-ajax-force">
(function(_, $) {

    $.ceEvent('on', 'ce.commoninit', function() {
        var icons = $('.cm-cc-icons li');
        var ccNumber = $(".cm-cc-number");
        var ccNumberInput = $("#" + ccNumber.attr("for"));
        var ccCv2 = $(".cm-cc-cvv2");
        var ccCv2Input = $("#" + ccCv2.attr("for"));
        var ccMonth = $(".cm-cc-exp-month");
        var ccMonthInput = $("#" + ccMonth.attr("for"));
        var ccYear = $(".cm-cc-exp-year");
        var ccYearInput = $("#" + ccYear.attr("for"));

        if(_.isTouch === false && jQuery.isEmptyObject(ccNumberInput.data("_inputmask")) == true) {

            ccNumberInput.inputmask("9999 9999 9999 9[99][9]", {
                placeholder: ' '
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-number',
                message: '',
                func: function(id) {
                    return ccNumberInput.inputmask("isComplete");
                }
            });

            ccCv2Input.inputmask("999[9]", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-cvv2',
                message: "<?php echo $_smarty_tpl->__("error_validator_ccv");?>
",
                func: function(id) {
                    return ccCv2Input.inputmask("isComplete");
                }
            });

            ccMonthInput.inputmask("99", {
                placeholder: ''
            });

            ccYearInput.inputmask("99", {
                placeholder: ''
            });

            $.ceFormValidator('registerValidator', {
                class_name: 'cm-cc-date',
                message: '',
                func: function(id) {
                    return (ccYearInput.inputmask("isComplete") && ccMonthInput.inputmask("isComplete"));
                }
            });
        }

        ccNumberInput.validateCreditCard(function(result) {
            icons.removeClass('active');
            if (result.card_type) {
                icons.filter('.cm-cc-' + result.card_type.name).addClass('active');
                if (['visa_electron', 'maestro', 'laser'].indexOf(result.card_type.name) != -1) {
                    ccCv2.removeClass("cm-required");
                } else {
                    ccCv2.addClass("cm-required");
                }
            }
        });

    });

    $(document).ready(function(){
        $.getScript("https://secure.ewaypayments.com/scripts/eCrypt.js");
        $("#place_order_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_id']->value, ENT_QUOTES, 'UTF-8');?>
").on('click', function(){
            if ($("#eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
").attr('data-eway-encrypted') != 'yes') {
                var elm_cvv = $("#eway_cvv2_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
");
                var elm_num = $("#eway_cc_number_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
");
                var cvv_val = elm_cvv.val();
                var num_val = elm_num.val().replace(/\s/g, '');
                var enc_cvv = eCrypt.encryptValue(cvv_val, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_method_data']['processor_params']['encryption_key'], ENT_QUOTES, 'UTF-8');?>
');
                var enc_num = eCrypt.encryptValue(num_val, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['payment_method_data']['processor_params']['encryption_key'], ENT_QUOTES, 'UTF-8');?>
');
                elm_cvv.inputmask('remove');
                elm_num.inputmask('remove');
                elm_cvv.val(enc_cvv);
                elm_num.val(enc_num);
                elm_cvv.prop('maxlength', enc_cvv.length);
                elm_num.attr('data-eway-encrypted', 'yes');
            }
        });
    });
})(Tygh, Tygh.$);
<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
