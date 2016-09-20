<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:49
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96589329257c82fe1c6eb82-07846923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd0b4a5f11a3fff8734b33c327d3cec639d0127b' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/blocksearch/blocksearch-top.tpl',
      1 => 1470841588,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96589329257c82fe1c6eb82-07846923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe1c7b522_28374127',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe1c7b522_28374127')) {function content_57c82fe1c7b522_28374127($_smarty_tpl) {?><!-- Block search module TOP -->
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
