<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnhomeslider/views/templates/hook/tptnhomeslider_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120508331260255e789ba452-62862376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fdd00f01bc90983fbe4816858f2322eab6ee57c' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnhomeslider/views/templates/hook/tptnhomeslider_header.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120508331260255e789ba452-62862376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tptnhomeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e789da241_99814229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e789da241_99814229')) {function content_60255e789da241_99814229($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tptnhomeslider']->value)) {?>
<script type="text/javascript">
	var slider_play = <?php echo $_smarty_tpl->tpl_vars['tptnhomeslider']->value['play'];?>
;
	var	slider_speed = <?php echo intval($_smarty_tpl->tpl_vars['tptnhomeslider']->value['speed']);?>
;
</script>
<?php }?><?php }} ?>
