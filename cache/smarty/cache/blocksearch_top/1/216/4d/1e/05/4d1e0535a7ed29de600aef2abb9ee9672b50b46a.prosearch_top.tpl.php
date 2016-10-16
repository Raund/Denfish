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
    '1ec6df9eba5699313f700d6dc8420eeecaa081d6' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\modules\\prosearch\\prosearch_instant.tpl',
      1 => 1470841115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111357dfd629d182d7-13384545',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58025dfd978565_44835546',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58025dfd978565_44835546')) {function content_58025dfd978565_44835546($_smarty_tpl) {?><div class="search_form" style="display:none">
<div id="search_block_top" class="block exclusive">
	<form id="searchbox" method="get" action="http://denfish.my/search" >
        <input type="hidden" name="orderby" value="position" placeholder="Поиск по каталогу товаров1"/>
        <input type="hidden" name="controller" value="search" />
        <input type="hidden" name="orderway" value="desc" placeholder="Поиск по каталогу товаров"/>
        <input class="search_query form-control grey" type="text" id="search_query_top" name="search_query" value=""placeholder="Поиск по каталогу товаров" />
        <button type="submit" id="search_button" class="btn btn-default button button-small"><span><i class="fa fa-search fa-2x"></i></span></button>
        <hr>
	</form>
</div>
</div>

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
		<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '/modules/prosearch/prosearchAjax.php',{
						minChars: 3,
						max: 10,
						width: 270,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value:' <img src="'+ data[i].ajaxsearchimage + '" />' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>

			
<?php }} ?>
