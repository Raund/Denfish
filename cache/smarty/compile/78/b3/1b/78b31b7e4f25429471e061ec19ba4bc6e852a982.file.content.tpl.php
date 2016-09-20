<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:23:20
         compiled from "D:\OpenServer\domains\denfish.my\admin6912\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3120257dfd8b80c7893-04653611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78b31b7e4f25429471e061ec19ba4bc6e852a982' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\admin6912\\themes\\default\\template\\content.tpl',
      1 => 1470840386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3120257dfd8b80c7893-04653611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd8b8215304_93691950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd8b8215304_93691950')) {function content_57dfd8b8215304_93691950($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
