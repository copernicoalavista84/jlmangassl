<?php /* Smarty version Smarty-3.1.19, created on 2021-02-12 10:17:55
         compiled from "/var/www/html/jlmangassl/admin788xpfnos/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:460787053602647c328c340-93448252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7313967228f85063063e03bb324a6b2e571340c4' => 
    array (
      0 => '/var/www/html/jlmangassl/admin788xpfnos/themes/default/template/content.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '460787053602647c328c340-93448252',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_602647c328d293_91143064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602647c328d293_91143064')) {function content_602647c328d293_91143064($_smarty_tpl) {?>
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
