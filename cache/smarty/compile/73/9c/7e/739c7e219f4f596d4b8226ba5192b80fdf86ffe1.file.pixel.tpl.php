<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/adroll/views/templates/hook/pixel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195206620160255e78b70cb7-80131521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '739c7e219f4f596d4b8226ba5192b80fdf86ffe1' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/adroll/views/templates/hook/pixel.tpl',
      1 => 1553676713,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195206620160255e78b70cb7-80131521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adroll_advertisable_id' => 0,
    'adroll_pixel_id' => 0,
    'adroll_current_page' => 0,
    'adroll_product_group' => 0,
    'adroll_customer' => 0,
    'adroll_product' => 0,
    'adroll_order' => 0,
    'adroll_order_currency' => 0,
    'product' => 0,
    'cart_obj' => 0,
    'search_string' => 0,
    'adroll_currency' => 0,
    'adroll_language_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78b93399_74029718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78b93399_74029718')) {function content_60255e78b93399_74029718($_smarty_tpl) {?>
<script data-adroll="prestashop-adroll-pixel" type="text/javascript">
    var prestashopAdrollPixelGuard = "prestashop-adroll-pixel-guard";
<?php if ($_smarty_tpl->tpl_vars['adroll_advertisable_id']->value&&$_smarty_tpl->tpl_vars['adroll_pixel_id']->value) {?>

    <?php if (isset($_smarty_tpl->tpl_vars['adroll_current_page']->value)) {?>
        adroll_current_page = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_current_page']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    <?php }?>

    adroll_product_group = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_product_group']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";

    <?php if (isset($_smarty_tpl->tpl_vars['adroll_customer']->value->email)) {?>
        adroll_email = "<?php echo mb_convert_encoding(htmlspecialchars(md5($_smarty_tpl->tpl_vars['adroll_customer']->value->email), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['adroll_customer']->value->id)) {?>
        adroll_user_id = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_customer']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['adroll_product']->value)) {?>
        adroll_product = {

            "price": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_product']->value->getPrice(true,@constant('NULL'),2), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
            "product_id": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_product']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
            "category": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_product']->value->category, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
            "product_group": adroll_product_group

        };
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['adroll_order']->value)) {?>
        adroll_conversion_value = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_order']->value->total_paid, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
        adroll_order_id = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_order']->value->id, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
        <?php if (isset($_smarty_tpl->tpl_vars['adroll_order_currency']->value)) {?>
            adroll_order_currency = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_order_currency']->value->iso_code, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
        <?php }?>
        adroll_checkout_products = [
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['adroll_order']->value->getProducts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['checkout_products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
                {"product_id": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
                "quantity": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['product_quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
                "product_group": adroll_product_group,
                "price": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['unit_price_tax_incl'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['checkout_products']['last']) {?>,<?php }?>

            <?php } ?>
        ];
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['cart_obj']->value)&&!empty($_smarty_tpl->tpl_vars['cart_obj']->value->getProducts())) {?>
        adroll_cart_products = [
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cart_obj']->value->getProducts(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cart_products']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
                {"product_id": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
                "quantity": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cart_quantity'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
                "price": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_with_reduction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
",
                "product_group": adroll_product_group,
                "category": "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['category'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"}<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['cart_products']['last']) {?>,<?php }?>
            <?php } ?>
        ];
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['search_string']->value)) {?>
        adroll_search_string = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    <?php }?>


    <?php if (isset($_smarty_tpl->tpl_vars['adroll_currency']->value)) {?>
        adroll_currency = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_currency']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    <?php }?>


    <?php if (isset($_smarty_tpl->tpl_vars['adroll_language_code']->value)) {?>
        adroll_language_code = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_language_code']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    <?php }?>


    adroll_adv_id = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_advertisable_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    adroll_pix_id = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['adroll_pixel_id']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
    
    adroll_version = "2.0";
    (function(w,d,e,o,a){
        w.__adroll_loaded=true;
        w.adroll=w.adroll||[];
        w.adroll.f=['setProperties','identify','track'];
        var roundtripUrl="https://s.adroll.com/j/" + adroll_adv_id + "/roundtrip.js";
        for(a=0;a<w.adroll.f.length;a++){
            w.adroll[w.adroll.f[a]]=w.adroll[w.adroll.f[a]]||(function(n){return function(){w.adroll.push([n,arguments])}})(w.adroll.f[a])};e=d.createElement('script');o=d.getElementsByTagName('script')[0];e.async=1;e.src=roundtripUrl;o.parentNode.insertBefore(e, o);})(window,document);
    
<?php }?>
</script>
<?php }} ?>
