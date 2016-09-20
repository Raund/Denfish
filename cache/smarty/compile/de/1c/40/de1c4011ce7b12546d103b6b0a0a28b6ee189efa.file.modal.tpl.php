<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:41
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208436155257c82fd97e23c9-63999746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de1c4011ce7b12546d103b6b0a0a28b6ee189efa' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1470840462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208436155257c82fd97e23c9-63999746',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fd97e7964_90167284',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fd97e7964_90167284')) {function content_57c82fd97e7964_90167284($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
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
