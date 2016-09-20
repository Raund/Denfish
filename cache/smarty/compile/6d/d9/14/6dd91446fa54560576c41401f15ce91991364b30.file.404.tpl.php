<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:54
         compiled from "/home/denfish/denfish.com/www/themes/denfish/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41862518857c82fe60e41b8-85274147%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dd91446fa54560576c41401f15ce91991364b30' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/404.tpl',
      1 => 1470841513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41862518857c82fe60e41b8-85274147',
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
  'unifunc' => 'content_57c82fe60ff723_09773521',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe60ff723_09773521')) {function content_57c82fe60ff723_09773521($_smarty_tpl) {?><div class="pagenotfound">
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
