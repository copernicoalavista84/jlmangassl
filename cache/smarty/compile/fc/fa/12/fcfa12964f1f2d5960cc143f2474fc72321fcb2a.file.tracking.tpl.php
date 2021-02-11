<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/cartsguru/views/templates/hook/tracking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96572058460255e78a174a7-63237797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcfa12964f1f2d5960cc143f2474fc72321fcb2a' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/cartsguru/views/templates/hook/tracking.tpl',
      1 => 1545304940,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96572058460255e78a174a7-63237797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'trackingUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78a1bc63_81725750',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78a1bc63_81725750')) {function content_60255e78a1bc63_81725750($_smarty_tpl) {?>

<script>
    cg_onJQueryReady(function (){
        cgjQuery(document).ready(function() {
            if (!Array.isArray) {
                Array.isArray = function(arg) {
                    return Object.prototype.toString.call(arg) === '[object Array]';
                };
            }

            var fieldNames = {
                email: ['guest_email', 'email'],
                homePhoneNumber: ['phone'],
                mobilePhoneNumber: ['phone_mobile'],
                firstname: ['firstname', 'customer_firstname'],
                lastname: ['lastname', 'customer_lastname'],
                countryCode: ['id_country']
            };

            var fields = {
                    email: [],
                    homePhoneNumber: [],
                    mobilePhoneNumber: [],
                    firstname: [],
                    lastname: [],
                    countryCode: []
            };

            var remainingLRequest = 10;

            function setupTracking () {
                for (var item in fieldNames) {
                    if (fieldNames.hasOwnProperty(item)) {
                        for (var i = 0; i < fieldNames[item].length; i++) {
                            //Get by name
                            var els = document.getElementsByName(fieldNames[item][i]);
                            for (var j = 0; j < els.length; j++) {
                                fields[item].push(els[j]);
                            }

                            //Get by ID
                            var el = document.getElementById(fieldNames[item][i]);
                            if (el &&  el.name !== fieldNames[item][i]){
                                fields[item].push(el);
                            }
                        }
                    }
                }
                if (fields.email.length > 0 && fields.firstname.length > 0) {
                    for (var item in fields) {
                        if (fields.hasOwnProperty(item)) {
                            for (var i = 0; i < fields[item].length; i++) {
                                cgjQuery(fields[item][i]).bind('blur', trackData);
                            }

                        }
                    }
                }
            }

            function collectData () {
                var data = {};
                for (var item in fields) {
                    if (fields.hasOwnProperty(item)) {
                        for (var i = 0; i < fields[item].length; i++) {
                            data[item] =  cgjQuery(fields[item][i]).val();
                            if (data[item] && data[item].trim){
                                data[item].trim();
                            }
                            if (data[item] !== ''){
                                break;
                            }
                        }
                    }
                }
                return data;
            }

            function trackData () {
                var data = collectData();
                if (data.email && remainingLRequest > 0) {
                    cgjQuery.ajax({
                        url: "<?php echo strtr($_smarty_tpl->tpl_vars['trackingUrl']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
",
                        type: "POST",
                        data: data
                    });
                    remainingLRequest =- 1;
                }
            }

            setupTracking();
        });
    });
</script>
<?php }} ?>
