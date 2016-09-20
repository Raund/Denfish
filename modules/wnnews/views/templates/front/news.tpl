<div id="content">
	
<div id="news">
	
	

	{if $annonces}
		
		<div class="clearfix">
		{capture name=path}{l s='Советы от DenFish'}{/capture}
		{include file="$tpl_dir./breadcrumb-cart.tpl"}
		{include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
	</div>
		{assign var='nbItemsPerLine' value=1}
		
		<ul id="annonce_list" class="news_list">
			{foreach from=$annonces item=item name=annonces}
			<li class="gl_img">
				<a title="{$item.title}" href="{$news_url}&id_annonce={$item.id_annonce}" class="gl_img"><img src="{$news_dir}images/c/{$item.id_annonce}-home_default.jpg"></a>
				<strong><a title="{$item.title}" href="{$news_url}&id_annonce={$item.id_annonce}" class="gl_title">{$item.title}</a></strong>
				<a title="{$item.title}" href="{$news_url}&id_annonce={$item.id_annonce}" class="gl_text">{$item.short_description|strip_tags:'UTF-8'|truncate:300:'...'}</a>
				
			</li>
			{/foreach}
			<br class="clear">
		</ul>
	{/if}
	
	{if $images}
		
		<div class="clearfix">
		{capture name=path}
	    <a href="{$base_dir}index.php?fc=module&module=wnnews&controller=news">{l s='Советы от DenFish'}
	    </a>
	    <span class="navigation-pipe">{$navigationPipe}</span>
	    <span class="navigation_page">Выбраный совет</span>
	    {/capture}
		{include file="$tpl_dir./breadcrumb-cart.tpl"}
		{include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
		</div>

		<ul id="image_list" class="news_list">
			{foreach from=$images item=item name=images}
			<li class="gl_img"  style="width:100%">
				<p title="" class="gl_img"> 
					<img src="{$news_dir}images/{$item.id_image}-home_default.jpg">{$item.title}</p>
					
				<p class="caption">{$item.caption}</p>
			</li>
			{/foreach}
			<br class="clear">
		</ul>
	{/if}
	
	

</div>
</div>