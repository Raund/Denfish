<?php /* Smarty version Smarty-3.1.19, created on 2016-09-09 21:08:34
         compiled from "/home/denfish/denfish.com/www/themes/denfish/contact-form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197239816357d2faa21da023-99121916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '630285ffce08d4d23597d1c94824cdde45e06ce5' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/contact-form.tpl',
      1 => 1470841515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197239816357d2faa21da023-99121916',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57d2faa2396dd1_71571442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57d2faa2396dd1_71571442')) {function content_57d2faa2396dd1_71571442($_smarty_tpl) {?>﻿<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Фотогалерея DenFish'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="content">

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayHome"),$_smarty_tpl);?>


</div>
<?php }} ?>
