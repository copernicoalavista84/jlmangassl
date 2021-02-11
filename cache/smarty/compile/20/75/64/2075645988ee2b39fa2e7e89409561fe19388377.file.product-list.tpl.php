<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:31:27
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/product-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24860407360255bdf022195-26318469%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2075645988ee2b39fa2e7e89409561fe19388377' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/product-list.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24860407360255bdf022195-26318469',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'id' => 0,
    'class' => 0,
    'product' => 0,
    'link' => 0,
    'homeSize' => 0,
    'add_prod_display' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'static_token' => 0,
    'page_name' => 0,
    'comparator_max_item' => 0,
    'priceDisplay' => 0,
    'currency' => 0,
    'PS_STOCK_MANAGEMENT' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255bdf084722_46161078',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255bdf084722_46161078')) {function content_60255bdf084722_46161078($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<!-- Products list -->
	<ul<?php if (isset($_smarty_tpl->tpl_vars['id']->value)&&$_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"<?php } else { ?> id="product_list"<?php }?> class="product_list grid row<?php if (isset($_smarty_tpl->tpl_vars['class']->value)&&$_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<li class="ajax_block_product col-xs-12 col-sm-4 item" itemscope itemtype="https://schema.org/Product">
		<div class="item-content">
			<div class="left-block">
				<div class="product-image-container">
					<a class="product_img_link"	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'home_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" title="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['legend'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
					</a>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['new'])&&$_smarty_tpl->tpl_vars['product']->value['new']==1) {?><span class="new-box"><?php echo smartyTranslate(array('s'=>'New'),$_smarty_tpl);?>
</span><?php }?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['on_sale']||(isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction'])) {?><span class="sale-box"><?php echo smartyTranslate(array('s'=>'Sale!'),$_smarty_tpl);?>
</span><?php }?>
					<div class="functional-buttons">
						<div class="button-container">
						<?php if (($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']==0||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&$_smarty_tpl->tpl_vars['product']->value['customizable']!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<?php if ((!isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])||!$_smarty_tpl->tpl_vars['product']->value['customization_required'])&&($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?>add=1&amp;id_product=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
<?php if (isset($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'])&&$_smarty_tpl->tpl_vars['product']->value['id_product_attribute']) {?>&amp;ipa=<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['static_token']->value)) {?>&amp;token=<?php echo $_smarty_tpl->tpl_vars['static_token']->value;?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<a class="ajax_add_to_cart_button simptip" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,Smarty::$_smarty_vars['capture']['default'],false), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" data-tooltip="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
" data-id-product-attribute="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" data-minimal_quantity="<?php if (isset($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']>=1) {?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['product_attribute_minimal_quantity']);?>
<?php } else { ?><?php echo intval($_smarty_tpl->tpl_vars['product']->value['minimal_quantity']);?>
<?php }?>">
									<i class="fa fa-shopping-cart"></i>
								</a>
							<?php } else { ?>
								<span class="ajax_add_to_cart_button disabled"><i class="fa fa-shopping-cart"></i></span>
							<?php }?>
						<?php }?>
						</div>
						<div class="quickview">
							<a class="quick-view simptip" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-tooltip="<?php echo smartyTranslate(array('s'=>'Quick view'),$_smarty_tpl);?>
" rel="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-expand"></i></a>
						</div>	
						<?php if ($_smarty_tpl->tpl_vars['page_name']->value!='index') {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

							<?php if (isset($_smarty_tpl->tpl_vars['comparator_max_item']->value)&&$_smarty_tpl->tpl_vars['comparator_max_item']->value) {?>
								<div class="compare">
									<a class="add_to_compare simptip" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" data-tooltip="<?php echo smartyTranslate(array('s'=>'Add to Compare'),$_smarty_tpl);?>
" data-id-product="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"><i class="fa fa-adjust"></i></a>
								</div>
							<?php }?>
						<?php }?>
					</div>
				</div>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_virtual'])&&!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight"),$_smarty_tpl);?>

			</div>
			<div class="right-block">
				<h5 class="product_name" itemprop="name">
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])&&$_smarty_tpl->tpl_vars['product']->value['pack_quantity']) {?><?php echo (intval($_smarty_tpl->tpl_vars['product']->value['pack_quantity'])).(' x ');?>
<?php }?>
					<a class="product-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['link'], ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" itemprop="url">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

					</a>
				</h5>
				<?php $_smarty_tpl->_capture_stack[0][] = array('displayProductListReviews', null, null); ob_start(); ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<?php if (Smarty::$_smarty_vars['capture']['displayProductListReviews']) {?>
					<div class="hook-reviews">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl);?>

					</div>
				<?php }?>
				<p class="product-desc" itemprop="description">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']),360,'...');?>

				</p>
				<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
				<div class="content_price" itemprop="offers" itemscope itemtype="https://schema.org/Offer">
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
						<span itemprop="price" class="price product-price">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl);?>

							<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>
<?php } else { ?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc']),$_smarty_tpl);?>
<?php }?>
						</span>
						<meta itemprop="priceCurrency" content="<?php echo $_smarty_tpl->tpl_vars['currency']->value->iso_code;?>
" />
						<?php if ($_smarty_tpl->tpl_vars['product']->value['price_without_reduction']>0&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']&&isset($_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['specific_prices']['reduction']>0) {?>
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl);?>

							<span class="old-price product-price">
								<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['product']->value['price_without_reduction']),$_smarty_tpl);?>

							</span>
							
						<?php }?>
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl);?>

						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayProductPriceBlock",'product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'after_price'),$_smarty_tpl);?>

					<?php }?>
				</div>
				<?php }?>
				<?php if (isset($_smarty_tpl->tpl_vars['product']->value['color_list'])) {?>
					<div class="color-list-container"><?php echo $_smarty_tpl->tpl_vars['product']->value['color_list'];?>
</div>
				<?php }?>
				<div class="product-flags">
					<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
						<?php if (isset($_smarty_tpl->tpl_vars['product']->value['online_only'])&&$_smarty_tpl->tpl_vars['product']->value['online_only']) {?>
							<span class="online_only"><?php echo smartyTranslate(array('s'=>'Online only'),$_smarty_tpl);?>
</span>
						<?php }?>
					<?php }?>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['on_sale'])&&$_smarty_tpl->tpl_vars['product']->value['on_sale']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
						<?php } elseif (isset($_smarty_tpl->tpl_vars['product']->value['reduction'])&&$_smarty_tpl->tpl_vars['product']->value['reduction']&&isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price']&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
							<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
						<?php }?>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
				<span class="unvisible">
					<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
						<link itemprop="availability" href="https://schema.org/InStock" /><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
					<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
						<link itemprop="availability" href="https://schema.org/LimitedAvailability" /><?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

					<?php } else { ?>
						<link itemprop="availability" href="https://schema.org/OutOfStock" /><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

					<?php }?>
				</span>
				<?php }?>
				<?php if ((!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value&&$_smarty_tpl->tpl_vars['PS_STOCK_MANAGEMENT']->value&&((isset($_smarty_tpl->tpl_vars['product']->value['show_price'])&&$_smarty_tpl->tpl_vars['product']->value['show_price'])||(isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order'])))) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_for_order'])&&$_smarty_tpl->tpl_vars['product']->value['available_for_order']&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)) {?>
						<span class="availability">
							<?php if (($_smarty_tpl->tpl_vars['product']->value['allow_oosp']||$_smarty_tpl->tpl_vars['product']->value['quantity']>0)) {?>
								<span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0&&isset($_smarty_tpl->tpl_vars['product']->value['allow_oosp'])&&!$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> label-danger<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?> label-warning<?php } else { ?> label-success<?php }?>">
									<?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']<=0) {?><?php if ($_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_later'])&&$_smarty_tpl->tpl_vars['product']->value['available_later']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_later'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>
<?php }?><?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_now'])&&$_smarty_tpl->tpl_vars['product']->value['available_now']) {?><?php echo $_smarty_tpl->tpl_vars['product']->value['available_now'];?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'In Stock'),$_smarty_tpl);?>
<?php }?><?php }?>
								</span>
							<?php } elseif ((isset($_smarty_tpl->tpl_vars['product']->value['quantity_all_versions'])&&$_smarty_tpl->tpl_vars['product']->value['quantity_all_versions']>0)) {?>
								<span class="label-warning">
									<?php echo smartyTranslate(array('s'=>'Product available with different options'),$_smarty_tpl);?>

								</span>
							<?php } else { ?>
								<span class="label-danger">
									<?php echo smartyTranslate(array('s'=>'Out of stock'),$_smarty_tpl);?>

								</span>
							<?php }?>
						</span>
					<?php }?>
				<?php }?>
			</div>
		</div>
		</li>
	<?php } ?>
	</ul>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?><?php }} ?>
