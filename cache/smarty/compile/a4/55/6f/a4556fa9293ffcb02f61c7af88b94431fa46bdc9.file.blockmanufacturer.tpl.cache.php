<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 19:09:23
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/blockmanufacturer/blockmanufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94053861557c852b3021d12-23094892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4556fa9293ffcb02f61c7af88b94431fa46bdc9' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1470841586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94053861557c852b3021d12-23094892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c852b3081710_85729861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c852b3081710_85729861')) {function content_57c852b3081710_85729861($_smarty_tpl) {?>

<!-- Block manufacturers module -->
<div class="manufact">
		<!--<?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
">
		<?php }?>-->
				<h3><?php echo smartyTranslate(array('s'=>'Manufacturers','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
</h3>
		<?php if ($_smarty_tpl->tpl_vars['display_link_manufacturer']->value) {?>
			<!--</a>-->
		<?php }?>


		<?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
			<?php if ($_smarty_tpl->tpl_vars['text_list']->value) {?>
			<ul class="manf clearfix">

                <?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturer_list']['iteration']++;
?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturer_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value) {?>

                    <li onclick='location.href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"'><span><div class="chek"></div><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</span></li>

                    <?php }?>
                <?php } ?>

			</ul>
			<?php }?>
           <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('manufacturer'), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Смотреть все','mod'=>'blockmanufacturer'),$_smarty_tpl);?>
</a>
            <hr>
		<?php }?>

</div>
<!-- /Block manufacturers module -->
<!-- Блок статей -->

<!-- Блок статей -->
<?php }} ?>
