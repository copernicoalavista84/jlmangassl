<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnuserinfo/views/templates/hook/tptnuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45784356260255e78a6dea1-90530697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c846e07ffcabb1588be41e6c562abd916f006d4' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnuserinfo/views/templates/hook/tptnuserinfo.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45784356260255e78a6dea1-90530697',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logged' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78a80c49_57780357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78a80c49_57780357')) {function content_60255e78a80c49_57780357($_smarty_tpl) {?><div id="tptnuserinfo">
	<div class="dropbtn">
		<i class="fa fa-user left"></i>
		<span class="hidden-xs"><?php echo smartyTranslate(array('s'=>'Account','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
<i class="fa fa-angle-down right"></i></span>
	</div>
	<ul class="dropdown-content">
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Information','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Information','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Addresses','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Addresses','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Orders','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Orders','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
	<?php } else { ?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Register','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Register','mod'=>'tptnuserinfo'),$_smarty_tpl);?>
</a></li>
	<?php }?>
	</ul>
</div><?php }} ?>
