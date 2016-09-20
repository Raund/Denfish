<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 14:47:32
         compiled from "D:\Webserver\domains\denfish.my\admin6912\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:864257e121d4bb8141-03959555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '349395a5abbcbddd71197fd3bfb18018b5e9a11d' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\admin6912\\themes\\default\\template\\footer.tpl',
      1 => 1474371328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '864257e121d4bb8141-03959555',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'php_errors' => 0,
    'modals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e121d4be30d2_46178754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e121d4be30d2_46178754')) {function content_57e121d4be30d2_46178754($_smarty_tpl) {?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>
<div id="footer" class="bootstrap hide" style="width:50px; right: 0;">



	<div class="col-sm-3">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayBackOfficeFooter"),$_smarty_tpl);?>

	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['modals']->value)) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }} ?>
