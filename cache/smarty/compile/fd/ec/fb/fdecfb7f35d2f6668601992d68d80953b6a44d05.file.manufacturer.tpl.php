<?php /* Smarty version Smarty-3.1.19, created on 2016-09-02 10:22:47
         compiled from "/home/denfish/denfish.com/www/themes/denfish/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125667232157c928c747d223-93514985%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdecfb7f35d2f6668601992d68d80953b6a44d05' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/manufacturer.tpl',
      1 => 1470841517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125667232157c928c747d223-93514985',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'manufacturer' => 0,
    'categories' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c928c7522e56_33212056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c928c7522e56_33212056')) {function content_57c928c7522e56_33212056($_smarty_tpl) {?><div id="content_vnutr1">
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	
	<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->description)||!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>
		<div class="description_box rte">
			<?php if (!empty($_smarty_tpl->tpl_vars['manufacturer']->value->short_description)) {?>
				<div class="short_desc">
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->short_description;?>

				</div>
				<div class="hide_desc">
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>

				</div>
				<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide();$(this).prev().prev().hide(); return false;">
					<?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>

				</a>
			<?php } else { ?>
				<div>
					<?php echo $_smarty_tpl->tpl_vars['manufacturer']->value->description;?>

				</div>
			<?php }?>
		</div>
	<?php }?>


    <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
        <!--<div class="clearfix">
            <div class="sort_name">
                <h2>
                    <?php echo smartyTranslate(array('s'=>'Список товаров производителя'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                </h2>
            </div>
        </div>-->
        <?php echo $_smarty_tpl->getSubTemplate ("./product-list-by-category.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('categoriess'=>$_smarty_tpl->tpl_vars['categories']->value), 0);?>

    <?php } elseif ($_smarty_tpl->tpl_vars['products']->value) {?>
		<div class="clearfix">
			<div class="sort_name">
				<h2>
					<?php echo smartyTranslate(array('s'=>'Список товаров производителя'),$_smarty_tpl);?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value->name, ENT_QUOTES, 'UTF-8', true);?>

				</h2>
			</div>
				<?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

	<?php }?>
</div>

<?php }?>
</div><?php }} ?>
