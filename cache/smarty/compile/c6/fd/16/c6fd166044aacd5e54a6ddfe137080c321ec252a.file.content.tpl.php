<?php /* Smarty version Smarty-3.1.19, created on 2016-09-02 08:17:01
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/controllers/localization/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58127453157c90b4da39a65-40901711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6fd166044aacd5e54a6ddfe137080c321ec252a' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/controllers/localization/content.tpl',
      1 => 1470840419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58127453157c90b4da39a65-40901711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c90b4da8fce4_19733367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c90b4da8fce4_19733367')) {function content_57c90b4da8fce4_19733367($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
