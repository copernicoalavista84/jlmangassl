<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:26:49
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/modules/referralprogram/views/templates/hook/authentication.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100233465260255ac9a02cf2-67560750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f85001e6a9e0426c0884d47a1c359b8cab126873' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/modules/referralprogram/views/templates/hook/authentication.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100233465260255ac9a02cf2-67560750',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255ac9a06528_53269397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255ac9a06528_53269397')) {function content_60255ac9a06528_53269397($_smarty_tpl) {?>

<!-- MODULE ReferralProgram -->
<fieldset class="account_creation">
	<h3 class="page-subheading"><?php echo smartyTranslate(array('s'=>'Referral program','mod'=>'referralprogram'),$_smarty_tpl);?>
</h3>
	<p class="form-group">
		<label for="referralprogram"><?php echo smartyTranslate(array('s'=>'E-mail address of your sponsor','mod'=>'referralprogram'),$_smarty_tpl);?>
</label>
		<input class="form-control" type="text" size="52" maxlength="128" id="referralprogram" name="referralprogram" value="<?php if (isset($_POST['referralprogram'])) {?><?php echo htmlspecialchars($_POST['referralprogram'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
	</p>
</fieldset>
<!-- END : MODULE ReferralProgram --><?php }} ?>
