<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:01
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnhtmlbox2/views/templates/hook/tptnhtmlbox2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28585579060253be5282e80-68203676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9952ade2334896af1db71da411b625cbfd338052' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnhtmlbox2/views/templates/hook/tptnhtmlbox2.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28585579060253be5282e80-68203676',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be5286ee7_94876942',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be5286ee7_94876942')) {function content_60253be5286ee7_94876942($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['infos']->value) {?>
<div id="tptnhtmlbox2">
<div class="container">
	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
	<div class="box-content">
		<a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url_info'];?>
">
			<em class="fa fa-<?php echo $_smarty_tpl->tpl_vars['info']->value['icon_info'];?>
" style="background:#<?php echo $_smarty_tpl->tpl_vars['info']->value['bkg_info'];?>
"></em>
			<span><?php echo $_smarty_tpl->tpl_vars['info']->value['text_info'];?>
</span>
		</a>
	</div>
	<?php } ?>
</div>
</div>
<?php }?><?php }} ?>
