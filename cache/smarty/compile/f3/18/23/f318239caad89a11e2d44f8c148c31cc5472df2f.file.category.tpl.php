<?php /* Smarty version Smarty-3.1.19, created on 2021-02-11 17:31:26
         compiled from "/homepages/27/d707877555/htdocs/themes/MegaShop/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67977855060255bdeeea922-32426056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f318239caad89a11e2d44f8c148c31cc5472df2f' => 
    array (
      0 => '/homepages/27/d707877555/htdocs/themes/MegaShop/category.tpl',
      1 => 1510743744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67977855060255bdeeea922-32426056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'subcategories' => 0,
    'products' => 0,
    'categoryNameComplement' => 0,
    'display_subcategories' => 0,
    'subcategory' => 0,
    'link' => 0,
    'categorySize' => 0,
    'img_cat_dir' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_60255bdef06e83_03544925',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60255bdef06e83_03544925')) {function content_60255bdef06e83_03544925($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>
        

        <h1 class="page-heading<?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)&&!$_smarty_tpl->tpl_vars['products']->value)||(isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value)||!isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?> product-listing<?php }?>"><span class="cat-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryNameComplement']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</h1>

        <?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>
            <div class="cat_desc rte"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
        <?php }?>
        
        <?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)&&$_smarty_tpl->tpl_vars['display_subcategories']->value==1)||!isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) {?>
        <!-- Subcategories -->
        <div id="subcategories">
            <p class="subcategory-heading"><?php echo smartyTranslate(array('s'=>'Subcategories'),$_smarty_tpl);?>
</p>
            <ul class="row">
            <?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
                <li class="col-xs-6 col-sm-4 col-md-3">
                    <div class="subcategory-content">
                        <div class="subcategory-image">
                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="img">
                            <?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
                                <img class="replace-2x" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['categorySize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['categorySize']->value['height'];?>
" />
                            <?php } else { ?>
                                <img class="replace-2x" src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-category_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width="<?php echo $_smarty_tpl->tpl_vars['categorySize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['categorySize']->value['height'];?>
" />
                            <?php }?>
                        </a>
                        </div>
                        <h5><a class="subcategory-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
                    </div>
                </li>
            <?php } ?>
            </ul>
        </div>
        <?php }?>
        <?php }?>
        
		<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <div class="content_sortPagiBar clearfix">
                <div class="sortPagiBar clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ("./nbr-product-page.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
            </div>
            <?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

            <div class="content_sortPagiBar">
                <div class="bottom-pagination-content clearfix">
                    <?php echo $_smarty_tpl->getSubTemplate ("./product-compare.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

                    <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

                </div>
            </div>
		<?php }?>

	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?><?php }} ?>
