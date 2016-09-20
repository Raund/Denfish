<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:28
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1271157dfd62c9c7e20-71467794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da2e3257112d61909ffe99dfaeddc6d40b7727d0' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\404.tpl',
      1 => 1470841513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1271157dfd62c9c7e20-71467794',
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
  'unifunc' => 'content_57dfd62ca464c2_36294970',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd62ca464c2_36294970')) {function content_57dfd62ca464c2_36294970($_smarty_tpl) {?><div class="pagenotfound">
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
