<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55354482360255e78deeb24-41728175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ce9ff528320c1cd2877ad8f5a1e514a697326c9' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/footer.tpl',
      1 => 1528190665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55354482360255e78deeb24-41728175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78df24a3_69466508',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78df24a3_69466508')) {function content_60255e78df24a3_69466508($_smarty_tpl) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						
				</div> <!-- #center_column -->
				</div> <!-- .row -->
				</div> <!-- .container -->
			</div> <!-- #columns -->

			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
			<!-- Footer -->
			<footer id="footer">
				<div class="footer_top">
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooterTop'),$_smarty_tpl);?>

				</div>
				<div class="footer_middle">
					<div class="container">
					<div class="row">
					<div id="servicios">
						<div style="font-weight:bolder;">SERVICIOS</div>
						</BR>
						<div><a href="http://www.jlmangas.com/content/1-entrega">ENTREGA</a></div>
						<div><a href="http://www.jlmangas.com/content/16-avisolegal">AVISO LEGAL</a></div>
						<div><a href="http://www.jlmangas.com/content/3-terminos-y-condiciones-de-uso">T&Eacute;RMINOS Y CONDICIONES DE USO</a></div>
						<div><a href="http://www.jlmangas.com/content/4-acerca">ACERCA DE NOSOTROS</a></div>
						<div><a href="http://www.jlmangas.com/content/5-pago-seguro">PAGO SEGURO</a></div>
						<div><a href="http://www.jlmangas.com/content/6-nuestras-tiendas">NUESTRAS TIENDAS</a></div>
						<div><a href="http://www.jlmangas.com/content/7-cookies">POL&Iacute;TICA DE COOKIES</a></div>
					</div>
					<div id="informacion">
						<div style="font-weight:bolder;">INFORMACI&Oacute;N</div>
						</BR>
						<div><a href="http://www.jlmangas.com/content/8-novedades">NOVEDADES</a></div>
						<div><a href="http://www.jlmangas.com/content/9-masvendido">&iexcl;LO M&Aacute;S VENDIDO!</a></div>
						<div><a href="http://www.jlmangas.com/content/10-tienda">NUESTRAS TIENDAS</a></div>
						<div><a href="http://www.jlmangas.com/content/11-contacto">CONTACTE CON NOSOTROS</a></div>
						<div><a href="http://www.jlmangas.com/content/12-buscar">C&Oacute;MO BUSCAR MI TINTA O T&Oacute;NER</a></div>
						<div><a href="http://www.jlmangas.com/content/13-calidad">CALIDADES DE CONSUMIBLES</a></div>
						<div><a href="http://www.jlmangas.com/content/17-mapa">MAPA DEL SITIO</a></div>
					</div>
					<div id="cuenta">
						<div style="font-weight:bolder;">MI CUENTA</div>
						</BR>
						<div><a href="https://www.jlmangas.com/es/historial-compra">MIS PEDIDOS</a></div>
						<div><a href="https://www.jlmangas.com/es/direcciones">MIS DIRECCIONES</a></div>
						<div><a href="https://www.jlmangas.com/es/datos-personales">MIS DATOS PERSONALES</a></div>
						<div><a href="https://www.jlmangas.com/es/albaran">MIS NOTAS DE CREDITO</a></div>
						<div><a href="https://www.jlmangas.com/content/19-proteccion">PROTECCI&Oacute;N DE DATOS</a></div>
					</div>

						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

					<div id="paypal">
					<img src="http://www.jlmangas.com/img/paypal.gif"/>
					</div>
					</div>
					</div>
				</div>
				<div class="footer_bottom">
					<div class="container">
						B81573842 - J.L. Mangas, S.L. &copy; 2017
					</div>
				</div>
			</footer>
			<?php }?>
			
		</div>
	<?php }?>

	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
