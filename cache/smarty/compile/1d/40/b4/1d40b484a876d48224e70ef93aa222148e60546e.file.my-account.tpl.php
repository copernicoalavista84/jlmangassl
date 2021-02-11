<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:26:51
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/modules/referralprogram/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11157201460255acb4cfa82-54115924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d40b484a876d48224e70ef93aa222148e60546e' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/referralprogram/views/templates/hook/my-account.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11157201460255acb4cfa82-54115924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255acb4d2403_41756988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255acb4d2403_41756988')) {function content_60255acb4d2403_41756988($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<li class="referralprogram col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('referralprogram','program',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
" rel="nofollow"><i class="fa fa-random"></i><span><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</span></a></li>
<!-- END : MODULE ReferralProgram --><?php }} ?>
