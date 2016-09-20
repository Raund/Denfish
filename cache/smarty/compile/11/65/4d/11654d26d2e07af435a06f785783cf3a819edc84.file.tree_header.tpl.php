<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 20:09:57
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158927300357c860e5f1fe95-22011633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11654d26d2e07af435a06f785783cf3a819edc84' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1470840464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158927300357c860e5f1fe95-22011633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c860e5f2d7a0_90366426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c860e5f2d7a0_90366426')) {function content_57c860e5f2d7a0_90366426($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
