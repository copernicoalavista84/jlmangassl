<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 20:13:17
         compiled from "/var/www/html/jlmangassl/admin788xpfnos/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1381315586602581cd71c325-19862493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98be4900a6d42b17bc16c487502e2e75c50d6fd9' => 
    array (
      0 => '/var/www/html/jlmangassl/admin788xpfnos/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1556635332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1381315586602581cd71c325-19862493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_602581cd71d789_50060274',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_602581cd71d789_50060274')) {function content_602581cd71d789_50060274($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a>
<?php }} ?>
