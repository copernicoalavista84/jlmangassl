<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:17:36
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/modules/crossselling/views/templates/hook/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44646015760253c80970d45-86513670%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '150557291a3be68ce39a10390fde2273edfc6442' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/crossselling/views/templates/hook/crossselling.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44646015760253c80970d45-86513670',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'page_name' => 0,
    'orderProduct' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253c8097c815_77227593',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253c8097c815_77227593')) {function content_60253c8097c815_77227593($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)) {?>
    <div id="crossselling" class="tptncarousel tptnprods clearfix">
    	<h4>
            <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
                <?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling'),$_smarty_tpl);?>

            <?php } else { ?>
                <?php echo smartyTranslate(array('s'=>'We recommend','mod'=>'crossselling'),$_smarty_tpl);?>

            <?php }?>
        </h4>
    	<div id="crossselling_list" class="prodcrsl">
            <?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value) {
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
            <div class="item" itemprop="isRelatedTo" itemscope itemtype="https://schema.org/Product">
                <div class="product-image-container">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
                        <img itemprop="image" src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" />
                    </a>
                </div>
                <p class="product_name" itemprop="name">
                    <a class="product-name" itemprop="url" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],28,'...'), ENT_QUOTES, 'UTF-8', true);?>

                    </a>
                </p>
                <?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value&&$_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                    <p class="content_price">
                        <span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
                    </p>
                <?php }?>
                
            </div>
            <?php } ?>
        </div>
    </div>
<?php }?>
<?php }} ?>
