{if isset($orderby) AND isset($orderway)}
<!-- спосіб виводу товарів на сторінці
<ul class="display hidden-xs">
	<li class="display-title">{l s='View:'}</li>
    <li id="grid"><a rel="nofollow" href="#" title="{l s='Grid'}"><i class="icon-th-large"></i>{l s='Grid'}</a></li>
    <li id="list"><a rel="nofollow" href="#" title="{l s='List'}"><i class="icon-th-list"></i>{l s='List'}</a></li>
</ul> 
 /спосіб виводу товарів на сторінці-->
{* On 1.5 the var request is setted on the front controller. The next lines assure the retrocompatibility with some modules *}
{if !isset($request)}
	<!-- Sort products -->
	{if isset($smarty.get.id_category) && $smarty.get.id_category}
		{assign var='request' value=$link->getPaginationLink('category', $category, false, true)}
	{elseif isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer}
		{assign var='request' value=$link->getPaginationLink('manufacturer', $manufacturer, false, true)}
	{elseif isset($smarty.get.id_supplier) && $smarty.get.id_supplier}
		{assign var='request' value=$link->getPaginationLink('supplier', $supplier, false, true)}
	{else}
		{assign var='request' value=$link->getPaginationLink(false, false, false, true)}
	{/if}
{/if}
<div class="right sort_margin_top">
<h3 class="sortir">Сортировать:</h3>
	<form id="productsSortForm{if isset($paginationId)}_{$paginationId}{/if}" action="{$request|escape:'html':'UTF-8'}" class="productsSortForm">

		<div class="select selector1">
			<!--<label for="selectProductSort{if isset($paginationId)}_{$paginationId}{/if}">{l s='Сортировать:'}</label> -->
			<select id="selectProductSort{if isset($paginationId)}_{$paginationId}{/if}" class="selectProductSort form-control">
				<option value="{$orderbydefault|escape:'html':'UTF-8'}:{$orderwaydefault|escape:'html':'UTF-8'}" ></option>
				{if !$PS_CATALOG_MODE}
					<option value="price:asc" {if $orderby eq 'price' AND $orderway eq 'asc'}selected="selected"{/if}{if $orderby eq $orderbydefault}selected="selected"{/if}>{l s='По возростанию цены'}</option>
					<option value="price:desc" {if $orderby eq 'price' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='По убыванию цены'}</option>
				{/if}
				<option value="name:asc" {if $orderby eq 'name' AND $orderway eq 'asc'}selected="selected"{/if}>{l s='От А до Я'}</option>
				<option value="name:desc" {if $orderby eq 'name' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='От Я до А'}</option>
				{if $PS_STOCK_MANAGEMENT && !$PS_CATALOG_MODE}
					<option value="quantity:desc" {if $orderby eq 'quantity' AND $orderway eq 'desc'}selected="selected"{/if}>{l s='В наличии'}</option>
				{/if}
			</select>
		</div>
	</form>
</div>
<!-- /Sort products -->
	{if !isset($paginationId) || $paginationId == ''}
		{addJsDef request=$request}
	{/if}
{/if}
