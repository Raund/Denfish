<!-- Block search module TOP -->
<div class="search_form_vnutr1">
	<div id="search_block_top" class="col-sm-4 clearfix">
		<form id="searchbox" method="get" action="{$link->getPageLink('search')|escape:'html':'UTF-8'}" >
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
<!-- /Block search module TOP -->