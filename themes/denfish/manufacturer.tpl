<div id="content_vnutr1">
{include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
{include file="$tpl_dir./breadcrumb.tpl"}
{include file="$tpl_dir./errors.tpl"}

{if !isset($errors) OR !sizeof($errors)}
	
	{if !empty($manufacturer->description) || !empty($manufacturer->short_description)}
		<div class="description_box rte">
			{if !empty($manufacturer->short_description)}
				<div class="short_desc">
					{$manufacturer->short_description}
				</div>
				<div class="hide_desc">
					{$manufacturer->description}
				</div>
				<a href="#" class="lnk_more" onclick="$(this).prev().slideDown('slow'); $(this).hide();$(this).prev().prev().hide(); return false;">
					{l s='More'}
				</a>
			{else}
				<div>
					{$manufacturer->description}
				</div>
			{/if}
		</div>
	{/if}


    {if $categories}
        <!--<div class="clearfix">
            <div class="sort_name">
                <h2>
                    {l s='Список товаров производителя'}&nbsp;{$manufacturer->name|escape:'html':'UTF-8'}
                </h2>
            </div>
        </div>-->
        {include file="./product-list-by-category.tpl" categoriess=$categories}
    {elseif $products}
		<div class="clearfix">
			<div class="sort_name">
				<h2>
					{l s='Список товаров производителя'}&nbsp;{$manufacturer->name|escape:'html':'UTF-8'}
				</h2>
			</div>
				{include file="./product-sort.tpl"}
		</div>
			{include file="./product-list.tpl" products=$products}
	{/if}
</div>

{/if}
</div>