<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 14:45:00
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1612057e1213c6370a3-81644335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a95e4d4f048f2c6fe662a0b9689e73339a3f04b' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\404.tpl',
      1 => 1474371405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1612057e1213c6370a3-81644335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img_dir' => 0,
    'link' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e1213c7310d2_81549702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e1213c7310d2_81549702')) {function content_57e1213c7310d2_81549702($_smarty_tpl) {?><div class="pagenotfound">
	<div class="img-404">
    	<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/img-404.png" alt="<?php echo smartyTranslate(array('s'=>'Page not found'),$_smarty_tpl);?>
" />
    </div>
	<h1><?php echo smartyTranslate(array('s'=>'Извините! Но данная страница сейчас недоступна. Попробуйте позже.'),$_smarty_tpl);?>
</h1>

	<h3><?php echo smartyTranslate(array('s'=>'Что бы найти товар введите его имя в форме поиска ниже'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post">
		<input id="search_query" name="search_query" type="text"/>
        <button type="submit" name="Submit" value="OK" id="btn_notfound"><span><?php echo smartyTranslate(array('s'=>'Ok'),$_smarty_tpl);?>
</span></button>
	</form>

	<a class="on_start" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'На главную'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'На Главную'),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>
