<?php /*%%SmartyHeaderCode:29276658360253be509f0c0-99191622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e471535c47c0e878cc43753a8db6b85d32154e8a' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/blockcms/blockcms.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29276658360253be509f0c0-99191622',
  'variables' => 
  array (
    'block' => 0,
    'cms_titles' => 0,
    'cms_key' => 0,
    'cms_title' => 0,
    'cms_page' => 0,
    'link' => 0,
    'show_price_drop' => 0,
    'PS_CATALOG_MODE' => 0,
    'show_new_products' => 0,
    'show_best_sales' => 0,
    'display_stores_footer' => 0,
    'show_contact' => 0,
    'contact_url' => 0,
    'cmslinks' => 0,
    'cmslink' => 0,
    'show_sitemap' => 0,
    'display_poweredby' => 0,
    'footer_text' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be50cbc44_23226056',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be50cbc44_23226056')) {function content_60253be50cbc44_23226056($_smarty_tpl) {?>
	<!-- MODULE Block footer -->
	<section id="block_various_links_footer" class="footer-block col-xs-12 col-lg-3">
		<h4>Información</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="https://www.jlmangas.com/es/bajamos-precios" title="Promociones especiales">
						Promociones especiales
					</a>
				</li>
									<li class="item">
				<a href="https://www.jlmangas.com/es/nuevos-productos" title="Novedades">
					Novedades
				</a>
			</li>
										<li class="item">
					<a href="https://www.jlmangas.com/es/mas-vendido" title="Los más vendidos">
						Los más vendidos
					</a>
				</li>
										<li class="item">
					<a href="https://www.jlmangas.com/es/tiendas" title="Nuestras tiendas">
						Nuestras tiendas
					</a>
				</li>
									<li class="item">
				<a href="https://www.jlmangas.com/es/contactanos" title="Contáctenos">
					Contáctenos
				</a>
			</li>
																						<li class="item">
						<a href="https://www.jlmangas.com/es/content/4-acerca" title="Sobre nosotros">
							Sobre nosotros
						</a>
					</li>
													<li>
				<a href="https://www.jlmangas.com/es/mapa-web" title="Mapa del sitio">
					Mapa del sitio
				</a>
			</li>
										<li class="last_item">
					<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

				</li>
					</ul>
		
	</section>
	<!-- /MODULE Block footer -->
<?php }} ?>
