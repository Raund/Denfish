<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:48:36
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14999798257c831b4a3da69-70861999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b87f83b9e9f79da4388a64057b3575aee5f89bc5' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1470841592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14999798257c831b4a3da69-70861999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c831b4a567c0_34134050',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c831b4a567c0_34134050')) {function content_57c831b4a567c0_34134050($_smarty_tpl) {?>


	<a class="product_post right addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Отложить",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
<?php }} ?>
