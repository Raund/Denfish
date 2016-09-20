<?php /* Smarty version Smarty-3.1.19, created on 2016-09-02 16:58:14
         compiled from "/home/denfish/denfish.com/www/themes/denfish/product-list-by-category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71233286657c98576c1c8c0-65342372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d803d8dff5d91e5efd00b7b358b82aff1ec4401' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/product-list-by-category.tpl',
      1 => 1470841520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71233286657c98576c1c8c0-65342372',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c98576c6ac60_04261631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c98576c6ac60_04261631')) {function content_57c98576c6ac60_04261631($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value) {?>
    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['category_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['category_id']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
    <div class="x-manufacturer-prouct-list">
        <div class="rozd clearfix">
            <span><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['category']->value['count']>4) {?>
                <a href="#" class="show_all x-show-all">Показать все</a>
            <?php }?>
        </div>
            <?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['category']->value['products']), 0);?>

        <div style="clear: both"></div>
    </div>
    <?php } ?>
<?php }?>
<STYLE>
    .x-manufacturer-prouct-list{
        margin-bottom: 30px;
    }
    .x-manufacturer-prouct-list ul.product_list li{
        display: none;
    }
    .x-manufacturer-prouct-list ul.product_list li:nth-child(1),
    .x-manufacturer-prouct-list ul.product_list li:nth-child(2),
    .x-manufacturer-prouct-list ul.product_list li:nth-child(3),
    .x-manufacturer-prouct-list ul.product_list li:nth-child(4){
        display: block;
    }
    .x-manufacturer-prouct-list.x-all ul.product_list li{
        display: block;
    }
    .x-manufacturer-prouct-list ul.product_list{
        padding-top: 0;
    }
</STYLE>
<SCRIPT>
$(function(){

    $('.x-manufacturer-prouct-list .x-show-all').on('click', function(e){
        e.preventDefault();
        $('.x-manufacturer-prouct-list').removeClass('x-all');
        $('.x-manufacturer-prouct-list .x-show-all').show();
        $(this).hide();
        $(this).parents('.x-manufacturer-prouct-list').addClass('x-all');
        return false;
    });
});
</SCRIPT><?php }} ?>
