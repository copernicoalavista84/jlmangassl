<?php /*%%SmartyHeaderCode:62066502960258170080404-23974835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c78ee8df193a0fb18c4e12f073ce05f52cc4af1' => 
    array (
      0 => '/var/www/html/jlmangassl/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1612885010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62066502960258170080404-23974835',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60264a029102b2_91223612',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60264a029102b2_91223612')) {function content_60264a029102b2_91223612($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="clearfix">
	<form id="searchbox" method="get" action="//localhost/jlmangassl/es/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
