<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:35
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\modules\blockwishlist\blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1193557dfd633a01647-68074007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36fdb9dfdee0049b2c478c4398a7addcf46e7641' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\modules\\blockwishlist\\blockwishlist_button.tpl',
      1 => 1470841592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1193557dfd633a01647-68074007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd633a14748_71471234',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd633a14748_71471234')) {function content_57dfd633a14748_71471234($_smarty_tpl) {?>


	<a class="product_post right addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Отложить",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
<?php }} ?>
