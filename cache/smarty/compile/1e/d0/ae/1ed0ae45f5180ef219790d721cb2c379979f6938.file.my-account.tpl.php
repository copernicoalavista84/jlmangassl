<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:26:51
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88695973360255acb4c4a05-95813015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ed0ae45f5180ef219790d721cb2c379979f6938' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88695973360255acb4c4a05-95813015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255acb4c7d75_10883133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255acb4c7d75_10883133')) {function content_60255acb4c7d75_10883133($_smarty_tpl) {?>

<li class="mailalerts col-xs-12 col-sm-6">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="fa fa-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
