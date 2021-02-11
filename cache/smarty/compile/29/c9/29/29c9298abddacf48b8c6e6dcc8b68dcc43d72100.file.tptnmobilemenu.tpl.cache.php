<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:00
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnmobilemenu/views/templates/hook/tptnmobilemenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123602739060253be4b34630-60440300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29c9298abddacf48b8c6e6dcc8b68dcc43d72100' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnmobilemenu/views/templates/hook/tptnmobilemenu.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123602739060253be4b34630-60440300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be4b35ca9_49530410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be4b35ca9_49530410')) {function content_60253be4b35ca9_49530410($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!='') {?>
	<div id="tptnmobilemenu">
		<span class="toggler"></span>
		<ul class="mobilemenu toogle_content">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

		</ul>
	</div>
<?php }?><?php }} ?>
