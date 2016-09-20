<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:23:14
         compiled from "D:\OpenServer\domains\denfish.my\admin6912\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:688857dfd8b25d7704-13573329%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e61c3470a13ddf49856c2e5f57d273ec0d8453de' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\admin6912\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1470840462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '688857dfd8b25d7704-13573329',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd8b25dd208_86300625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd8b25dd208_86300625')) {function content_57dfd8b25dd208_86300625($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>
