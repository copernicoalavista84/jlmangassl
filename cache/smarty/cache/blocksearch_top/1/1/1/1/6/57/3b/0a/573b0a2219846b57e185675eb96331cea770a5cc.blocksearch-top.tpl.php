<?php /*%%SmartyHeaderCode:201447236160253be4a09002-89310459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '573b0a2219846b57e185675eb96331cea770a5cc' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/blocksearch/blocksearch-top.tpl',
      1 => 1510816855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201447236160253be4a09002-89310459',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253c80291958_92404185',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253c80291958_92404185')) {function content_60253c80291958_92404185($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top">
	<form id="searchbox" method="get" action="//www.jlmangas.com/es/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar..." value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar...</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
