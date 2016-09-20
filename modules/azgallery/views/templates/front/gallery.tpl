<div id="gallery">
	
	{if $albums}
	<div class="clearfix">
	    {capture name=path}{l s='Фотогалерея DenFish'}{/capture}
	    {include file="$tpl_dir./breadcrumb-cart.tpl"}
	    {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
    </div>
        <h2>{l s='Альбомы DenFish' mod='azgallery'}</h2>
		{assign var='nbItemsPerLine' value=4}

        <ul id="album_list" class="gallery_list">
            {foreach from=$albums item=item name=albums}
                <li class="{if $smarty.foreach.albums.index%$nbItemsPerLine==0}first-item{else}item{/if}">
                    {if $gallery->countImages($item.id_album) == 0}
                        <a title="{$item.title}" href="#" class="gl_img" style="cursor: default"><img src="{$gallery_dir}images/c/{$item.id_album}-home_default.jpg"></a>
                        <a title="{$item.title}" href="#" class="gl_title" style="display: none">{$item.title}</a>
                    {else}
                        <a title="{$item.title}" href="{$gallery_url}&id_album={$item.id_album}" class="gl_img"><img src="{$gallery_dir}images/c/{$item.id_album}-home_default.jpg"></a>
                        <a title="{$item.title}" href="{$gallery_url}&id_album={$item.id_album}" class="gl_title" style="display: none">{$item.title}</a>
                    {/if}

                    <span class="images_count"><i class="fa fa-camera"></i>{$gallery->countImages($item.id_album)}</span>
                </li>
            {/foreach}

            <br class="clear">
        </ul>
	{/if}
	
	{if $images}
		<div class="clearfix">
			{capture name=path}
		    <a href="{$base_dir}index.php?fc=module&module=azgallery&controller=gallery">{l s='Фотогалерея DenFish'}
		    </a>
		    <span class="navigation-pipe">{$navigationPipe}</span>
		    <span class="navigation_page">{l s='Фото'}</span>
		    {/capture}
		    {include file="$tpl_dir./breadcrumb-cart.tpl"}
		    {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
		</div>
        <h2>{l s='Альбом' mod='azgallery'} "{$images[0].title}"</h2>

		{assign var='nbItemsPerLine' value=4}
		
		<ul id="image_list" class="gallery_list">
			{foreach from=$images item=item name=images}
			<li class="{if $smarty.foreach.images.index%$nbItemsPerLine==0}first-item{else}item{/if}">
				<a title="{$item.caption}" rel="lightbox" href="{$gallery_dir}images/{$item.id_image}.jpg" class="gl_img">
					<img src="{$gallery_dir}images/{$item.id_image}-home_default.jpg"></a>
				<!--<p class="caption">{$item.caption}</p>-->
			</li>
			{/foreach}
			<br class="clear">
		</ul>
	{/if}
	
	<!--{if $backhome}
		<a title="{l s='Вернуться к альбомам фотогалереи Denfish' mod='azgallery'}" href="{$gallery_url}" class="back_gallery_home">{l s='Вернуться к альбомам фотогалереи Denfish' mod='azgallery'}</a>
	{/if}-->

</div>
<!-- Module by azCies <azcies @ gmail.com> -->