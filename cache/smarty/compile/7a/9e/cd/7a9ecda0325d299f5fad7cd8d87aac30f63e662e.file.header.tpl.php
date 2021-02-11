<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:42:32
         compiled from "/homepages/27/d707877555/htdocs/modules/homeslider/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:492304360255e78a62ff3-87333385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a9ecda0325d299f5fad7cd8d87aac30f63e662e' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/homeslider/views/templates/hook/header.tpl',
      1 => 1545304853,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '492304360255e78a62ff3-87333385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255e78a66795_80570125',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255e78a66795_80570125')) {function content_60255e78a66795_80570125($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>
