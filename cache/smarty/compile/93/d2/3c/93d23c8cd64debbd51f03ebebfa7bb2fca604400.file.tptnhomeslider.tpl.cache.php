<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:15:00
         compiled from "/homepages/27/d707877555/htdocs/modules/tptnhomeslider/views/templates/hook/tptnhomeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145541964660253be4e3f8a6-51525496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93d23c8cd64debbd51f03ebebfa7bb2fca604400' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/modules/tptnhomeslider/views/templates/hook/tptnhomeslider.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145541964660253be4e3f8a6-51525496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tptnhomeslider_slides' => 0,
    'slide' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253be4e4aad6_20724620',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253be4e4aad6_20724620')) {function content_60253be4e4aad6_20724620($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['tptnhomeslider_slides']->value)) {?>
<div id="tptnhomeslider" class="owlslider">
    <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tptnhomeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
    <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
    <div class="item">
        <a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."tptnhomeslider/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
" alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
        </a>
    </div>
    <?php }?>
    <?php } ?>
</div>
<?php }?><?php }} ?>
