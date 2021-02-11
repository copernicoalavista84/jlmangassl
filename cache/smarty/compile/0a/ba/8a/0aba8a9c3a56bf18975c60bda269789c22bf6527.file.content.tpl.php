<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:14:33
         compiled from "/homepages/27/d707877555/htdocs/admin788xpfnos/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187128963460253bc9ca2076-88415989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0aba8a9c3a56bf18975c60bda269789c22bf6527' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/admin788xpfnos/themes/default/template/content.tpl',
      1 => 1545304849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187128963460253bc9ca2076-88415989',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253bc9ca3fa4_19724985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253bc9ca3fa4_19724985')) {function content_60253bc9ca3fa4_19724985($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
