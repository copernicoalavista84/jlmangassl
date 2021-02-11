<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:00
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/modules/blockbestsellers/blockbestsellers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139726536160253be4db2fe8-04861536%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc0a35702d794439fe595a045921440ee0d1ff6' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/blockbestsellers/blockbestsellers.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139726536160253be4db2fe8-04861536',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'best_sellers' => 0,
    'product' => 0,
    'smallSize' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be4dc5473_26276193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be4dc5473_26276193')) {function content_60253be4dc5473_26276193($_smarty_tpl) {?>

<!-- MODULE Block best sellers -->
<div id="best-sellers_block_right" class="block hidden-md hidden-sm hidden-xs">
    <h4 class="title_block">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('best-sales'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>
">
            <?php echo smartyTranslate(array('s'=>'Top sellers','mod'=>'blockbestsellers'),$_smarty_tpl);?>

        </a>
    </h4>
	<div class="block_content">
	<?php if ($_smarty_tpl->tpl_vars['best_sellers']->value&&count($_smarty_tpl->tpl_vars['best_sellers']->value)>0) {?>
		<ul class="colprods">
            <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['best_sellers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
            <li<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?> class="last"<?php }?>>
                <div class="left_block">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="prod-img">
                        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8', true);?>
" height="<?php echo $_smarty_tpl->tpl_vars['smallSize']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['smallSize']->value['width'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
"/>
                    </a>
                </div>
                <div class="right_block">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" class="product-name"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],40,'...'), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
                    <?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
                        <div class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</div>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

                        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']) {?>
                        <div class="old-price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>
</div>
                        <?php }?>
                    <?php }?>
                </div>
            </li>
            <?php } ?>
		</ul>
	<?php } else { ?>
		<p><?php echo smartyTranslate(array('s'=>'No best sellers at this time','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</p>
	<?php }?>
	</div>
</div>
<!-- /MODULE Block best sellers -->
<?php }} ?>
