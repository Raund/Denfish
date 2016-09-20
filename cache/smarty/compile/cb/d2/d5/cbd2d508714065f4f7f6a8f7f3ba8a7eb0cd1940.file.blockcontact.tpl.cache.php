<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 16:02:28
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\modules\blockcontact\blockcontact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296357e12a33686353-89835987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd2d508714065f4f7f6a8f7f3ba8a7eb0cd1940' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\modules\\blockcontact\\blockcontact.tpl',
      1 => 1474376546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '296357e12a33686353-89835987',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12a33751580_70602624',
  'variables' => 
  array (
    'telnumber' => 0,
    'telnumber2' => 0,
    'telnumber3' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12a33751580_70602624')) {function content_57e12a33751580_70602624($_smarty_tpl) {?>
<div id="contact_block">
		<?php if ($_smarty_tpl->tpl_vars['telnumber']->value!='') {?>
			<div class="phone">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber']->value, ENT_QUOTES, 'UTF-8', true);?>

			</div>
		<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['telnumber2']->value!='') {?>
		<div class="phone1">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber2']->value, ENT_QUOTES, 'UTF-8', true);?>

		</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['telnumber3']->value!='') {?>
		<div class="phone">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['telnumber3']->value, ENT_QUOTES, 'UTF-8', true);?>

		</div>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?>
			<a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true);?>
"></a>
		<?php }?>

</div>
<!--<div class="phone"><span>+3 8050</span> 548 11 59</div>--><?php }} ?>
