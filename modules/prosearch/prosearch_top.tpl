<div class="search_form" style="display:none">
<div id="search_block_top" class="block exclusive">
	<form id="searchbox" method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" >
        <input type="hidden" name="orderby" value="position" placeholder="Поиск по каталогу товаров1"/>
        <input type="hidden" name="controller" value="search" />
        <input type="hidden" name="orderway" value="desc" placeholder="Поиск по каталогу товаров"/>
        <input class="search_query form-control grey" type="text" id="search_query_top" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}"placeholder="Поиск по каталогу товаров" />
        <button type="submit" id="search_button" class="btn btn-default button button-small"><span><i class="fa fa-search fa-2x"></i></span></button>
        <hr>
	</form>
</div>
</div>

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	{include file="$self/prosearch_instant.tpl"}			
