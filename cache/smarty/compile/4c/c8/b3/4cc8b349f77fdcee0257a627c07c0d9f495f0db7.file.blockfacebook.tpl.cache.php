<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:26
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1028257dfd62a7b3da1-28332082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc8b349f77fdcee0257a627c07c0d9f495f0db7' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1470841584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028257dfd62a7b3da1-28332082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd62a7c3c12_01801672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd62a7c3c12_01801672')) {function content_57dfd62a7c3c12_01801672($_smarty_tpl) {?>
<!-- Блок facebook-->
<div class="facebook">
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<!--<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>-->

	<div class="fb-page" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
	</div>
<?php }?>
 </div>

<!-- Блок facebook- конец--><?php }} ?>
