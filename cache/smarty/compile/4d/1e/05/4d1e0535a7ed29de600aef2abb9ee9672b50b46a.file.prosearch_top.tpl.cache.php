<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:25
         compiled from "D:\OpenServer\domains\denfish.my\modules\prosearch\prosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:111357dfd629d182d7-13384545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d1e0535a7ed29de600aef2abb9ee9672b50b46a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1470841115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111357dfd629d182d7-13384545',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd629d30625_90457732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd629d30625_90457732')) {function content_57dfd629d30625_90457732($_smarty_tpl) {?><div class="search_form" style="display:none">
<div id="search_block_top" class="block exclusive">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
        <input type="hidden" name="orderby" value="position" placeholder="Поиск по каталогу товаров1"/>
        <input type="hidden" name="controller" value="search" />
        <input type="hidden" name="orderway" value="desc" placeholder="Поиск по каталогу товаров"/>
        <input class="search_query form-control grey" type="text" id="search_query_top" name="search_query" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
"placeholder="Поиск по каталогу товаров" />
        <button type="submit" id="search_button" class="btn btn-default button button-small"><span><i class="fa fa-search fa-2x"></i></span></button>
        <hr>
	</form>
</div>
</div>

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/prosearch_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>
			
<?php }} ?>
