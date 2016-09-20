<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:50:12
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209583646357c83214c2fbf9-26427001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a50c9a29dbb85afa873e4bbbe0e5f048f87bc9a9' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1470840459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209583646357c83214c2fbf9-26427001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c83214c48fd8_71065367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c83214c48fd8_71065367')) {function content_57c83214c48fd8_71065367($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
