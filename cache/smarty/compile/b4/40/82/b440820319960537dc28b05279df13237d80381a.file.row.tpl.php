<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:50:12
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/kpi/row.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148486491357c832148f1841-60511722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b440820319960537dc28b05279df13237d80381a' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/kpi/row.tpl',
      1 => 1470840458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148486491357c832148f1841-60511722',
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
  'unifunc' => 'content_57c832148f80e5_14802944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c832148f80e5_14802944')) {function content_57c832148f80e5_14802944($_smarty_tpl) {?>
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
