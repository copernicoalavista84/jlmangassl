<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 15:14:33
         compiled from "/homepages/27/d707877555/htdocs/admin788xpfnos/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67187492360253bc9ce38d0-52212720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7a698e2168bdd950e9c1476fd75dae1fb2f21d' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/admin788xpfnos/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1545304850,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67187492360253bc9ce38d0-52212720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60253bc9ce45c3_73201898',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60253bc9ce45c3_73201898')) {function content_60253bc9ce45c3_73201898($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
