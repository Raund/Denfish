<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 15:43:19
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:706057e12ee7d5fb04-49976853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51c55dc019a4dc98a7daa7c6c2447b33d5d452b0' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1474371406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '706057e12ee7d5fb04-49976853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12ee7d82d88_73715862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12ee7d82d88_73715862')) {function content_57e12ee7d82d88_73715862($_smarty_tpl) {?>


	<a class="product_post right addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Отложить",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
<?php }} ?>
