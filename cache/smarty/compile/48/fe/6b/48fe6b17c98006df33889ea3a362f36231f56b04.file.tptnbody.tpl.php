<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnthemeconfig/views/templates/hook/tptnbody.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116683534560255e78dc3602-10617934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48fe6b17c98006df33889ea3a362f36231f56b04' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnthemeconfig/views/templates/hook/tptnbody.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116683534560255e78dc3602-10617934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tptn_topbkg' => 0,
    'tptn_titlebkg' => 0,
    'tptn_cartbkg' => 0,
    'tptn_btnbkg' => 0,
    'tptn_pnameclr' => 0,
    'tptn_newbkg' => 0,
    'tptn_salebkg' => 0,
    'tptn_priceclr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78dca5d4_77438531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78dca5d4_77438531')) {function content_60255e78dca5d4_77438531($_smarty_tpl) {?><div id="tptn-config" class="hidden-md hidden-sm hidden-xs">
	<a id="tptn-config-switch" class="config-close" href="#"></a>
	<div id="tptn-config-inner">
		<form method="post" action="" id="config_form">
		<div class="tptn-config-elements">
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'Top Horizontal Menu','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="topbkg-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_topbkg']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'Categories Title Background','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="titlebkg-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_titlebkg']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'Cart Background','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="cartbkg-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_cartbkg']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'Button Background','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="btnbkg-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_btnbkg']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'Product Name Color','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="pnameclr-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_pnameclr']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'NEW label Background','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="newbkg-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_newbkg']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'SALE label Background','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="salebkg-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_salebkg']->value;?>
"></div>
			</div>
			<div class="tptn-config-block">
				<div class="tptn-config-title"><?php echo smartyTranslate(array('s'=>'Price Color','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</div>
				<div id="priceclr-input" class="tptn-config-colorpicker" style="background-color:#<?php echo $_smarty_tpl->tpl_vars['tptn_priceclr']->value;?>
"></div>
			</div>
		</div>
		<div class="tptn-config-button">
			<button type="submit" name="reset" class="reset"><i class="fa fa-undo left"></i><?php echo smartyTranslate(array('s'=>'Reset','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</button>
			<button type="submit" name="apply" class="apply"><i class="fa fa-check left"></i><?php echo smartyTranslate(array('s'=>'Apply','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
</button>
			<p><?php echo smartyTranslate(array('s'=>'Click on "Apply" to see the changes','mod'=>'tptnthemeconfig'),$_smarty_tpl);?>
.</p>
		</div>
		</form>
	</div>
</div><?php }} ?>
