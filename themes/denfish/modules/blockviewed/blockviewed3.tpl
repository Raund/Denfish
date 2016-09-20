<!--Accessories -->
<div id="viewed-products_block_left" class="block">
    <p class="title_block">{l s='Viewed products' mod='blockviewed'}</p>
    <div class="block_content products-block">
        <ul id="bxslider" class="bxslider clearfix">
            {foreach from=$productsViewedObj item=viewedProduct name=myLoop}
            <li class="product-container clearfix{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if}">

                <div class="product_desc">

                    <div class="product-image-container">
                        <a class="product_img_link" href="{$viewedProduct->
                    product_link|escape:'html':'UTF-8'}" title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}" >
                            <img class="replace-2x img-responsive" src="{if isset($viewedProduct->
                    id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'small_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}" 
                        alt="{$viewedProduct->legend|escape:'html':'UTF-8'}"  {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
                        </a>
                    </div>

                    <div class="s_title_block">
                        <h5 class="product-name">
                        <a href="{$viewedProduct->
                            product_link|escape:'html':'UTF-8'}" 
                            title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}">
                                {$viewedProduct->name|truncate:45:'...'|escape:'html':'UTF-8'}
                        </a>
                        </h5>
                    </div>

                    <div class="block_description">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:40}</div>
                    <div class="button-container2">
                        <a class="button ajax_add_to_cart_button btn btn-default" href="{$link->
                            getPageLink('cart', true, NULL, "qty=1&amp;id_product={$viewed.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$viewed.id_product|intval}" title="{l s='Add to cart'}">
                            {if $viewed.show_price && !isset($restricted_country_mode) && !$PS_CATALOG_MODE}
                                <span class="price_acc">
                                {if $priceDisplay != 1}
                                    {displayWtPrice p=$viewed.price}{else}{displayWtPrice p=$viewed.price_tax_exc}
                                {/if}
                                </span>
                            {/if}
                        </a>
                    </div>
                </div>
            </li>
            {/foreach}
        </ul>
    </div>
</div>
<!--end Accessories -->