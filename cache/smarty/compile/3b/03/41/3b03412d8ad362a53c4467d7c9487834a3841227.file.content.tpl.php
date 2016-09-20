<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 14:49:45
         compiled from "D:\Webserver\domains\denfish.my\admin6912\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1208157e12259620c60-47001351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b03412d8ad362a53c4467d7c9487834a3841227' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\admin6912\\themes\\default\\template\\content.tpl',
      1 => 1474371327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1208157e12259620c60-47001351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12259630677_88855093',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12259630677_88855093')) {function content_57e12259630677_88855093($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
