<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:54
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/blockfacebook/blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197708971157c82fe60badf6-06660276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6d105ff595f34fe7de29d13a9decd8527adf9b5' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/blockfacebook/blockfacebook.tpl',
      1 => 1470841584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197708971157c82fe60badf6-06660276',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe60c6940_74391630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe60c6940_74391630')) {function content_57c82fe60c6940_74391630($_smarty_tpl) {?>
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
