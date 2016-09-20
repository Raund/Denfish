<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 14:57:38
         compiled from "D:\Webserver\domains\denfish.my\admin6912\themes\default\template\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2754357e122598a5585-89141448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f4f4b379a95e41f3f9c11dd35cc876d9eb016ee' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\admin6912\\themes\\default\\template\\nav.tpl',
      1 => 1474372655,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2754357e122598a5585-89141448',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e122599513a3_50605063',
  'variables' => 
  array (
    'employee' => 0,
    'tab' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e122599513a3_50605063')) {function content_57e122599513a3_50605063($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?>nav-sidebar<?php } else { ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value) {?>
			<div class="mainsubtablist" style="display:none;"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<?php echo $_smarty_tpl->getSubTemplate ("search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"header_search",'show_clear_btn'=>1), 0);?>

			</li>

			

			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']) {?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>has_submenu<?php }?>" id="maintab-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name']=='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>
						<ul class="submenu">
						<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value) {
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']) {?>
							<li id="subtab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']) {?> class="active"<?php }?>>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']=='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
								</a>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php } ?>
            <li class="maintab">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=wnnews&tab_module=others&module_name=wnnews" class="title" >
                    <i class="icon-advice"></i>
                    <span>Советы от Denfish</span>
                </a>
            </li>
            <li class="maintab">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=azgallery&tab_module=front_office_features&module_name=azgallery" class="title" >
                    <i class="icon-gallery"></i>
                    <span>Фотогалерея Denfish</span>
                </a>
            </li>
            <li class="maintab">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin6912/index.php?controller=AdminBlogPost&token=fc3f2be1ec606cad71a3d79ae6d99c4b" class="title"  >
                    <i class="icon-article"></i>
                    <span>Статьи Denfish</span>
                </a>
            </li>
            <li class="maintab">
                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=homeslider&tab_module=front_office_features&module_name=homeslider" class="title"  >
                    <i class="icon-gallery"></i>
                    <span>Редактор слайдера</span>
                </a>
            </li>
			<li class="maintab">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/admin6912/index.php?controller=AdminModules&token=7761059df8988998e41a18f7fa3d91ec&configure=blockcontact&tab_module=front_office_features&module_name=blockcontact" class="title"  >
					<i class="icon-article"></i>
					<span>Редактор контактных телефонов</span>
				</a>
			</li>

		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify"></i>
		</span>
	</nav>
</div><?php }} ?>
