<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 20:28:56
         compiled from "/home/denfish/denfish.com/www/modules/azgallery/views/templates/front/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5542798557c86558771459-34588792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2033ba25f83e967af51c2fb93292a23d366d8d24' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/azgallery/views/templates/front/gallery.tpl',
      1 => 1470841446,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5542798557c86558771459-34588792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albums' => 0,
    'nbItemsPerLine' => 0,
    'item' => 0,
    'gallery' => 0,
    'gallery_dir' => 0,
    'gallery_url' => 0,
    'images' => 0,
    'base_dir' => 0,
    'navigationPipe' => 0,
    'backhome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c86558821a36_59101107',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c86558821a36_59101107')) {function content_57c86558821a36_59101107($_smarty_tpl) {?><div id="gallery">
	
	<?php if ($_smarty_tpl->tpl_vars['albums']->value) {?>
	<div class="clearfix">
	    <?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Фотогалерея DenFish'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
        <h2><?php echo smartyTranslate(array('s'=>'Альбомы DenFish','mod'=>'azgallery'),$_smarty_tpl);?>
</h2>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>

        <ul id="album_list" class="gallery_list">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['albums']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['albums']['index']++;
?>
                <li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['albums']['index']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?>first-item<?php } else { ?>item<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['gallery']->value->countImages($_smarty_tpl->tpl_vars['item']->value['id_album'])==0) {?>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="#" class="gl_img" style="cursor: default"><img src="<?php echo $_smarty_tpl->tpl_vars['gallery_dir']->value;?>
images/c/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
-home_default.jpg"></a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="#" class="gl_title" style="display: none"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php } else { ?>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['gallery_url']->value;?>
&id_album=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" class="gl_img"><img src="<?php echo $_smarty_tpl->tpl_vars['gallery_dir']->value;?>
images/c/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
-home_default.jpg"></a>
                        <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['gallery_url']->value;?>
&id_album=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_album'];?>
" class="gl_title" style="display: none"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a>
                    <?php }?>

                    <span class="images_count"><i class="fa fa-camera"></i><?php echo $_smarty_tpl->tpl_vars['gallery']->value->countImages($_smarty_tpl->tpl_vars['item']->value['id_album']);?>
</span>
                </li>
            <?php } ?>

            <br class="clear">
        </ul>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['images']->value) {?>
		<div class="clearfix">
			<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
		    <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=azgallery&controller=gallery"><?php echo smartyTranslate(array('s'=>'Фотогалерея DenFish'),$_smarty_tpl);?>

		    </a>
		    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
		    <span class="navigation_page"><?php echo smartyTranslate(array('s'=>'Фото'),$_smarty_tpl);?>
</span>
		    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
        <h2><?php echo smartyTranslate(array('s'=>'Альбом','mod'=>'azgallery'),$_smarty_tpl);?>
 "<?php echo $_smarty_tpl->tpl_vars['images']->value[0]['title'];?>
"</h2>

		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(4, null, 0);?>
		
		<ul id="image_list" class="gallery_list">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['images']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['images']['index']++;
?>
			<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['images']['index']%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value==0) {?>first-item<?php } else { ?>item<?php }?>">
				<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
" rel="lightbox" href="<?php echo $_smarty_tpl->tpl_vars['gallery_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
.jpg" class="gl_img">
					<img src="<?php echo $_smarty_tpl->tpl_vars['gallery_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
-home_default.jpg"></a>
				<!--<p class="caption"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</p>-->
			</li>
			<?php } ?>
			<br class="clear">
		</ul>
	<?php }?>
	
	<!--<?php if ($_smarty_tpl->tpl_vars['backhome']->value) {?>
		<a title="<?php echo smartyTranslate(array('s'=>'Вернуться к альбомам фотогалереи Denfish','mod'=>'azgallery'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['gallery_url']->value;?>
" class="back_gallery_home"><?php echo smartyTranslate(array('s'=>'Вернуться к альбомам фотогалереи Denfish','mod'=>'azgallery'),$_smarty_tpl);?>
</a>
	<?php }?>-->

</div>
<!-- Module by azCies <azcies @ gmail.com> --><?php }} ?>
