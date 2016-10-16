

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
            <span class="nove">Новинка</span>
            <span class="year">2015</span>
            <span class="test">Тест:</span>
            <span class="par1">0,2 мм</span>
            <span class="par2">15,7 кг</span>
            <button class="price">25 грн</button>
        </div>
    </div>
	{/if}
</li>

