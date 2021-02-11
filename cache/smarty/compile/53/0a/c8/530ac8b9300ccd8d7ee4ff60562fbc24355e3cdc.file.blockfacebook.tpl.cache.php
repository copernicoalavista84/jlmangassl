<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:00
         compiled from "/homepages/27/d707877555/htdocs/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77285762460253be4e5d339-23921378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '530ac8b9300ccd8d7ee4ff60562fbc24355e3cdc' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/blockfacebook/blockfacebook.tpl',
      1 => 1545304852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77285762460253be4e5d339-23921378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be4e5fdd9_29116065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be4e5fdd9_29116065')) {function content_60253be4e5fdd9_29116065($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
