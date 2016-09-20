<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:30:58
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2368457dfda827fd9a7-69125146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d929dec140d41080c30abe101d9c8009d981be8' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\modules\\blockwishlist\\my-account.tpl',
      1 => 1470841592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2368457dfda827fd9a7-69125146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfda82846851_77631821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfda82846851_77631821')) {function content_57dfda82846851_77631821($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Избранное','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="fa fa-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'Избранное','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
