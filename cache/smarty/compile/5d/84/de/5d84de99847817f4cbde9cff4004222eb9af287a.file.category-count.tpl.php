<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:35
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2553657dfd6333e8ff4-18086763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d84de99847817f4cbde9cff4004222eb9af287a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\category-count.tpl',
      1 => 1470841514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2553657dfd6333e8ff4-18086763',
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
  'unifunc' => 'content_57dfd633436844_09838313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd633436844_09838313')) {function content_57dfd633436844_09838313($_smarty_tpl) {?>
<?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'Нет товаров в этой категории.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>' 1 товар'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>' %d ','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?>
<?php }} ?>
