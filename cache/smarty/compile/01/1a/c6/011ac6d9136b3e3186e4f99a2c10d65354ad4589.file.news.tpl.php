<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 20:25:11
         compiled from "/home/denfish/denfish.com/www/modules/wnnews/views/templates/front/news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99380196957c86477727a33-94353890%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '011ac6d9136b3e3186e4f99a2c10d65354ad4589' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/wnnews/views/templates/front/news.tpl',
      1 => 1470841479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99380196957c86477727a33-94353890',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'annonces' => 0,
    'item' => 0,
    'news_url' => 0,
    'news_dir' => 0,
    'images' => 0,
    'base_dir' => 0,
    'navigationPipe' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c864777b0ba8_22455734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c864777b0ba8_22455734')) {function content_57c864777b0ba8_22455734($_smarty_tpl) {?><div id="content">
	
<div id="news">
	
	

	<?php if ($_smarty_tpl->tpl_vars['annonces']->value) {?>
		
		<div class="clearfix">
		<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Советы от DenFish'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
		<?php $_smarty_tpl->tpl_vars['nbItemsPerLine'] = new Smarty_variable(1, null, 0);?>
		
		<ul id="annonce_list" class="news_list">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['annonces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li class="gl_img">
				<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['news_url']->value;?>
&id_annonce=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_annonce'];?>
" class="gl_img"><img src="<?php echo $_smarty_tpl->tpl_vars['news_dir']->value;?>
images/c/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_annonce'];?>
-home_default.jpg"></a>
				<strong><a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['news_url']->value;?>
&id_annonce=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_annonce'];?>
" class="gl_title"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></strong>
				<a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['news_url']->value;?>
&id_annonce=<?php echo $_smarty_tpl->tpl_vars['item']->value['id_annonce'];?>
" class="gl_text"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['item']->value['short_description']),300,'...');?>
</a>
				
			</li>
			<?php } ?>
			<br class="clear">
		</ul>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['images']->value) {?>
		
		<div class="clearfix">
		<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
	    <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=wnnews&controller=news"><?php echo smartyTranslate(array('s'=>'Советы от DenFish'),$_smarty_tpl);?>

	    </a>
	    <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
	    <span class="navigation_page">Выбраный совет</span>
	    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>

		<ul id="image_list" class="news_list">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
			<li class="gl_img"  style="width:100%">
				<p title="" class="gl_img"> 
					<img src="<?php echo $_smarty_tpl->tpl_vars['news_dir']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_image'];?>
-home_default.jpg"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</p>
					
				<p class="caption"><?php echo $_smarty_tpl->tpl_vars['item']->value['caption'];?>
</p>
			</li>
			<?php } ?>
			<br class="clear">
		</ul>
	<?php }?>
	
	

</div>
</div><?php }} ?>
