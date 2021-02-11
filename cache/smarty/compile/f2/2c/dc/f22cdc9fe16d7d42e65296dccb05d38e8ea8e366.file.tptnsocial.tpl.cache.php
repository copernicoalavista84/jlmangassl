<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:01
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnsocial/views/templates/hook/tptnsocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123885957260253be51011b4-84735289%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f22cdc9fe16d7d42e65296dccb05d38e8ea8e366' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnsocial/views/templates/hook/tptnsocial.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123885957260253be51011b4-84735289',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tptnaddress' => 0,
    'tptnphone' => 0,
    'tptnemail' => 0,
    'tptnfacebook' => 0,
    'tptntwitter' => 0,
    'tptngoogle' => 0,
    'tptninstagram' => 0,
    'tptnyoutube' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be510d799_03843460',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be510d799_03843460')) {function content_60253be510d799_03843460($_smarty_tpl) {?><section id="tptnsocial" class="footer-block col-xs-12 col-lg-3">
	<h4><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'tptnsocial'),$_smarty_tpl);?>
</h4>
	<div class="toggle-footer">	
		<ul>
			<?php if ($_smarty_tpl->tpl_vars['tptnaddress']->value!='') {?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptnaddress']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tptnphone']->value!='') {?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptnphone']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tptnemail']->value!='') {?><li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptnemail']->value, ENT_QUOTES, 'UTF-8', true);?>
</li><?php }?>
		</ul>
		<ul class="social-icons">	
			<?php if ($_smarty_tpl->tpl_vars['tptnfacebook']->value!='') {?><li class="facebook"><a class="fa fa-facebook" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptnfacebook']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="Facebook"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tptntwitter']->value!='') {?><li class="twitter"><a class="fa fa-twitter" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptntwitter']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="Twitter"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tptngoogle']->value!='') {?><li class="google"><a class="fa fa-google-plus" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptngoogle']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="Google+"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tptninstagram']->value!='') {?><li class="instagram"><a class="fa fa-instagram" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptninstagram']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="Instagram"></a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['tptnyoutube']->value!='') {?><li class="youtube"><a class="fa fa-youtube-play" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tptnyoutube']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="Youtube"></a></li><?php }?>
		</ul>
	</div>
</section><?php }} ?>
