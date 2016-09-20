<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:23:19
         compiled from "D:\OpenServer\domains\denfish.my\admin6912\themes\default\template\helpers\list\list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:360857dfd8b77e0241-19805331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb74d7840b57cb56a2b70e9d3ff7117df72ea3e5' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\admin6912\\themes\\default\\template\\helpers\\list\\list_action_duplicate.tpl',
      1 => 1470840459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '360857dfd8b77e0241-19805331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd8b77fc508_46756595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd8b77fc508_46756595')) {function content_57dfd8b77fc508_46756595($_smarty_tpl) {?>
<a href="#" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ok']->value, ENT_QUOTES, 'UTF-8', true);?>
'; else document.location = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['location_ko']->value, ENT_QUOTES, 'UTF-8', true);?>
'; return false;">
	<i class="icon-copy"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
