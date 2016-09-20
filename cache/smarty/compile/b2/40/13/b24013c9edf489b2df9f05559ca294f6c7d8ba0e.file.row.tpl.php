<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:23:18
         compiled from "D:\OpenServer\domains\denfish.my\admin6912\themes\default\template\helpers\kpi\row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2743657dfd8b6dc1045-42011114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b24013c9edf489b2df9f05559ca294f6c7d8ba0e' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\admin6912\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1470840458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2743657dfd8b6dc1045-42011114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'kpis' => 0,
    'kpi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd8b6dcfff8_96470840',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd8b6dcfff8_96470840')) {function content_57dfd8b6dcfff8_96470840($_smarty_tpl) {?>
<div class="panel kpi-container" hidden>
	<div class="row">
		<?php  $_smarty_tpl->tpl_vars['kpi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['kpi']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['kpis']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['kpi']->key => $_smarty_tpl->tpl_vars['kpi']->value) {
$_smarty_tpl->tpl_vars['kpi']->_loop = true;
?>
		<div class="col-sm-6 col-lg-3">
			<?php echo $_smarty_tpl->tpl_vars['kpi']->value;?>

		</div>			
		<?php } ?>
	</div>
</div><?php }} ?>
