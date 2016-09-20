

<li {if isset($last) && $last == 'true'}class="last"{/if}>
	<a 
	href="{$node.link|escape:'html':'UTF-8'}"{if isset($currentCategoryId) && $node.id == $currentCategoryId} class="selected"{/if} title="{$node.desc|strip_tags|trim|escape:'html':'UTF-8'}">
		{$node.name|escape:'html':'UTF-8'}
	</a>
	{if $node.children|@count > 0}
    <div class="ob">
		<ul class="sub_menu">
            <li>
			{foreach from=$node.children item=child name=categoryTreeBranch}
				{if $smarty.foreach.categoryTreeBranch.last}
					{include file="$branche_tpl_path" node=$child last='true'}
				{else}
					{include file="$branche_tpl_path" node=$child last='false'}
				{/if}
			{/foreach}
            </li>
            <li style="height:30px"></li>
            <li style="height:30px"></li>
		</ul>
        <div class="new">
            <img src="{$img_dir}/new1.jpg" alt="">
            <h1 class="nove">Новинка</h1>
            <h1 class="year">2015</h1>
            <h1 class="test">Тест:</h1>
            <h1 class="par1">0,2 мм</h1>
            <h1 class="par2">15,7 кг</h1>
            <button class="price">25 грн</button>
        </div>
    </div>
	{/if}
</li>

