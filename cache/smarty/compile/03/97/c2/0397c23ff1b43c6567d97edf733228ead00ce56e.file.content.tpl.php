<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:41
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120671118957c82fd9634322-26961222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0397c23ff1b43c6567d97edf733228ead00ce56e' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/content.tpl',
      1 => 1470840386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120671118957c82fd9634322-26961222',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fd9642c27_12147376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fd9642c27_12147376')) {function content_57c82fd9642c27_12147376($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
