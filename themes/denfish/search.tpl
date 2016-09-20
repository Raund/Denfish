<div class="my-account">
<div class="search_block">
    <div class="clearfix">
        {capture name=path}{l s='Поиск'}{/capture}
        {include file="$tpl_dir./breadcrumb-cart.tpl"}
        {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
    </div>
    <h1 
    {if isset($instant_search) && $instant_search}id="instant_search_results"{/if} 
    class="page-heading search_heading{if !isset($instant_search) || (isset($instant_search) && !$instant_search)} product-listing{/if}">
       {l s='За поиском'}&nbsp;
        {if $nbProducts > 0}
            <span class="lighter">
                "{if isset($search_query) && $search_query}{$search_query|escape:'html':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'html':'UTF-8'}{elseif $ref}{$ref|escape:'html':'UTF-8'}{/if}"
            </span>
        {/if}
        {if isset($instant_search) && $instant_search}
            <a href="#" class="close">{l s='Return to the previous page'}</a>
            {else}
            <span class="heading-counter">
                {if $nbProducts == 1}{l s='%d товар найдено.' sprintf=$nbProducts|intval}{else}{l s='%d товаров было найдено.' sprintf=$nbProducts|intval}{/if}
            </span>
        {/if}
    </h1>
    {include file="$tpl_dir./errors.tpl"}
    {include file="$tpl_dir./product-list.tpl" products=$search_products}
</div>
    </div>