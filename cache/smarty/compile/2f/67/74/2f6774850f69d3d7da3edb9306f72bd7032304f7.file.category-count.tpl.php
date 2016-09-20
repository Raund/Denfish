<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 15:43:19
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1510557e12ee76a1060-53151736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f6774850f69d3d7da3edb9306f72bd7032304f7' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\category-count.tpl',
      1 => 1474371405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1510557e12ee76a1060-53151736',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12ee76db9f7_63614756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12ee76db9f7_63614756')) {function content_57e12ee76db9f7_63614756($_smarty_tpl) {?>
<?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'Нет товаров в этой категории.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>' 1 товар'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>' %d ','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?>
<?php }} ?>
