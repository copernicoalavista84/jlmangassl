<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:00
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnheaderlinks/views/templates/hook/tptnheaderlinks.tpl" */ ?>
<?php /*%%SmartyHeaderCode:150667180760253be4b154c4-60624639%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b852671b92c2a080e37bb4fb3b53b52057f8a03c' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnheaderlinks/views/templates/hook/tptnheaderlinks.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '150667180760253be4b154c4-60624639',
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
  'unifunc' => 'content_60253be4b18696_94423819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be4b18696_94423819')) {function content_60253be4b18696_94423819($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['infos']->value) {?>
<div id="tptnheaderlinks" class="hidden-xs hidden-sm">
<ul>
	<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['url_info'];?>
"><?php echo $_smarty_tpl->tpl_vars['info']->value['text_info'];?>
</a>
	</li>
<?php } ?>
</ul>
</div>
<?php }?><?php }} ?>
