<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 19:19:15
         compiled from "/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:191050499457c8550306a027-29682817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bceaee66bd7bfe3b10619d23a259c531f304226' => 
    array (
      0 => '/home/denfish/denfish.com/www/admin6912/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1470840461,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191050499457c8550306a027-29682817',
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
  'unifunc' => 'content_57c85503076af0_79835246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c85503076af0_79835246')) {function content_57c85503076af0_79835246($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" >
	<i class="icon-search-plus"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
