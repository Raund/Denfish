<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 15:43:19
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3221857e12ee756c6a2-47334496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34a907cbd9c9144974903b2516f32e325971b7e7' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1474371406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3221857e12ee756c6a2-47334496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12ee757c0a3_93769321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12ee757c0a3_93769321')) {function content_57e12ee757c0a3_93769321($_smarty_tpl) {?><!-- Block search module TOP -->
<div class="search_form_vnutr1">
	<div id="search_block_top" class="col-sm-4 clearfix">
		<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
			<input type="hidden" name="controller" value="search"placeholder="Поиск по каталогу товаров" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc"placeholder="Поиск по каталогу товаров" />

			<input class="search_query form-control" 

			 onblur="this.value=(this.value=='')?this.title:this.value;"
			 onfocus="this.value=(this.value==this.title)?'':this.value;"
			 value="Поиск по каталогу товаров"
 			 title="Поиск по каталогу товаров"

			 type="text" id="search_query_top" name="search_query" />

			<button type="submit" name="submit_search" class="btn btn-default button-search">
				<span><i class="fa fa-search fa-2x"></i></span>
			</button>
		</form>
	</div>
</div>
<!-- /Block search module TOP --><?php }} ?>
