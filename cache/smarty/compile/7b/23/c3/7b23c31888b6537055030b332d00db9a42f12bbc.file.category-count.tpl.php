<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 19:52:21
         compiled from "/home/denfish/denfish.com/www/themes/denfish/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140844211657c85cc59f4486-81544256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b23c31888b6537055030b332d00db9a42f12bbc' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/category-count.tpl',
      1 => 1470841514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140844211657c85cc59f4486-81544256',
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
  'unifunc' => 'content_57c85cc5a2ecf5_14331456',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c85cc5a2ecf5_14331456')) {function content_57c85cc5a2ecf5_14331456($_smarty_tpl) {?>
<?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'Нет товаров в этой категории.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>' 1 товар'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>' %d ','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?>
<?php }} ?>
