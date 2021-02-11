<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:26:51
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212473828960255acb5086f7-67563135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2bcd9dc23da6024f202be04dc15dac6f0071598' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/my-account.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212473828960255acb5086f7-67563135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'account_created' => 0,
    'has_customer_an_address' => 0,
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_CUSTOMER_ACCOUNT' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255acb51d6d7_49782058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255acb51d6d7_49782058')) {function content_60255acb51d6d7_49782058($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)) {?>
    <p class="alert alert-success">
        <?php echo smartyTranslate(array('s'=>'Your account has been created.'),$_smarty_tpl);?>

    </p>
<?php }?>
<p class="info-account"><?php echo smartyTranslate(array('s'=>'Welcome to your account. Here you can manage all of your personal information and orders.'),$_smarty_tpl);?>
</p>
<div class="addresses-lists">
    <ul class="myaccount-link-list row">
        <?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value) {?>
        <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
"><i class="fa fa-building-o"></i><span><?php echo smartyTranslate(array('s'=>'Add my first address'),$_smarty_tpl);?>
</span></a></li>
        <?php }?>
        <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Orders'),$_smarty_tpl);?>
"><i class="fa fa-list-ol"></i><span><?php echo smartyTranslate(array('s'=>'Order history and details'),$_smarty_tpl);?>
</span></a></li>
        <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
            <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><i class="fa fa-refresh"></i><span><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</span></a></li>
        <?php }?>
        <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><i class="fa fa-ban"></i><span><?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>
</span></a></li>
        <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Addresses'),$_smarty_tpl);?>
"><i class="fa fa-building-o"></i><span><?php echo smartyTranslate(array('s'=>'My addresses'),$_smarty_tpl);?>
</span></a></li>
        <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Information'),$_smarty_tpl);?>
"><i class="fa fa-user"></i><span><?php echo smartyTranslate(array('s'=>'My personal information'),$_smarty_tpl);?>
</span></a></li>
    
<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value||isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value)&&$_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value!='') {?>
    
        <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
            <li class="col-xs-12 col-sm-6"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><i class="fa fa-briefcase"></i><span><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</span></a></li>
        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value;?>

    </ul>
<?php }?>
</div>
<ul class="footer_links clearfix">
<li><a class="std-btn" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><i class="fa fa-chevron-left left"></i> <?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a></li>
</ul>
<?php }} ?>
