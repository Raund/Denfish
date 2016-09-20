<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 21:08:34
         compiled from "/home/denfish/denfish.com/www/modules/azgallery/views/templates/hook/azgallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181817466457d2faa23a8519-07157067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb2b8443293d119b15f37f1dbc82474dc9302b4e' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/azgallery/views/templates/hook/azgallery.tpl',
      1 => 1470841447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181817466457d2faa23a8519-07157067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gallery_dir' => 0,
    'images' => 0,
    'gallery_path' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d2faa23e4bd7_67938315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d2faa23e4bd7_67938315')) {function content_57d2faa23e4bd7_67938315($_smarty_tpl) {?><div id="azgallery_block" class="block">
	<h4><a href="<?php echo $_smarty_tpl->tpl_vars['gallery_dir']->value;?>
"title="<?php echo smartyTranslate(array('s'=>'Gallery','mod'=>'azgallery'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Gallery','mod'=>'azgallery'),$_smarty_tpl);?>
</a></h4>
	<!--<?php if ($_smarty_tpl->tpl_vars['images']->value) {?>
	<div class="content">
			<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['gallery_path']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
-thickbox_default.jpg" rel="lightbox" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['caption'];?>
">
			<img alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['caption'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['gallery_path']->value;?>
/images/<?php echo $_smarty_tpl->tpl_vars['image']->value['id_image'];?>
-home_default.jpg" />
		</a>
		<?php } ?>

	</div>
	<?php }?>-->
</div><?php }} ?>
