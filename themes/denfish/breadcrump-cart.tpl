
<!-- Breadcrumb-cart -->
<div class="clearfix">
    {if isset($smarty.capture.path)}{assign var='path' value=$smarty.capture.path}{/if}
    <ul class="bread_crumbs clearfix">
        <li><a href="{$base_dir}">Главная</a></li>
        {if isset($path)AND $path}
            <li {if isset($category) && isset($category->id_category) && $category->id_category == 1} <!--style="display:none;"-->{/if}> - </li>
            {if !$path|strpos:'span'}
                <li> {$path}</li>
            {else}
                <li> {$path}</li>
            {/if}
        {/if}
    </ul>
    {if isset($smarty.get.search_query) && isset($smarty.get.results) && $smarty.get.results > 1 && isset($smarty.server.HTTP_REFERER)}
        <div class="pull-right">
            <strong>
                <a href="{$smarty.server.HTTP_REFERER|escape}" name="back">
                    <i class="icon-chevron-left left"></i> {l s='Back to Search results for "%s" (%d other results)' sprintf=[$smarty.get.search_query,$smarty.get.results]}
                </a>
            </strong>
        </div>
    {/if}

</div>

<!-- /Breadcrumb-cart-->
