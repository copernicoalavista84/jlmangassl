<?php /* Smarty version Smarty-3.1.19, created on 2021-02-12 10:16:56
         compiled from "/var/www/html/jlmangassl/modules/cartsguru/views/templates/hook/dashboard_zone_one.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1931222328602647882d1e55-32000132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baf5192615178bcec56dee69cecda8d7aceb4931' => 
    array (
      0 => '/var/www/html/jlmangassl/modules/cartsguru/views/templates/hook/dashboard_zone_one.tpl',
      1 => 1613063182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1931222328602647882d1e55-32000132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_602647882d37c2_78424764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602647882d37c2_78424764')) {function content_602647882d37c2_78424764($_smarty_tpl) {?>

<section id="cartsguru" class="panel widget">
    <div class="panel-heading">
        <i class="icon-time"></i><?php echo smartyTranslate(array('s'=>'Carts Guru Dashboard','mod'=>'cartsguru'),$_smarty_tpl);?>

        <span class="panel-heading-action">
            <a class="list-toolbar-btn" href="#" onclick="refreshDashboard('cartsguru'); return false;" title="<?php echo smartyTranslate(array('s'=>'Refresh','mod'=>'cartsguru'),$_smarty_tpl);?>
">
                <i class="process-icon-refresh"></i>
            </a>
        </span>
    </div>
    <section id="dash_cg_main" class="">
        <ul class="data_list_large">
            <li>
                <span class="data_label size_l"> <?php echo smartyTranslate(array('s'=>'Processed Carts','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                <span class="data_value size_xxl">
                    <span id="cg_processed_carts"></span>
                </span>
            </li>
            <li>
                <span class="data_label size_l"> <?php echo smartyTranslate(array('s'=>'Orders','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                <span class="data_value size_xxl">
                    <span id="cg_sales"></span>
                </span>
            </li>
            <li>
                <span class="data_label size_l"><?php echo smartyTranslate(array('s'=>'Revenue Recovered','mod'=>'cartsguru'),$_smarty_tpl);?>
</span>
                <span class="data_value size_xxl">
                    <span id="cg_turnover"></span>
                </span>
            </li>
        </ul>
    </section>
</section>
<?php }} ?>
