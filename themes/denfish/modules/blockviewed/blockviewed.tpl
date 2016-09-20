<!--Accessories -->
<div id="viewed-products_block_left" class="block">
    <h1 class="you_see">{l s='Еще вы смотрели:' mod='blockviewed'}</h1>
    <div class="block_content products-block">
        <ul id="bxslider" class="bxslider clearfix">
            {foreach from=$productsViewedObj item=viewedProduct name=myLoop}
                <li class="product-container item product-box ajax_block_product{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if} product_accessories_description">

                    <div class="product_desc">

                        <div class="product-image-container">
                                <a class="product_img_link" href="{$viewedProduct->product_link|escape:'html':'UTF-8'}" title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}" >
                                    <img class="replace-2x img-responsive" src="{if isset($viewedProduct->id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'home_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}"
                                    alt="{$viewedProduct->legend|escape:'html':'UTF-8'}"  {if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
                                </a>
                        </div>

                        <div class="s_title_block">
                            <h4 class="product-name">
                                <a href="{$viewedProduct->
                                    product_link|escape:'html':'UTF-8'}" title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}">
                                        {$viewedProduct->name|truncate:45:'...'|escape:'html':'UTF-8'}
                               </a>
                           </h4>
                       </div>
                            <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">


                                        {if ($viewedProduct->quantity > 0)}
                                            <span>В наличии</span>
                                        {else}
                                            <span class="out-of-stock">Нет в наличии</span>
                                        {/if}
                            </span>
                                <a href="{$viewedProduct->
                                product_link|escape:'html':'UTF-8'}"
                                   title="{l s='Подробнее' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}">
                                    <span>{if (isset($product.customization_required) && $product.customization_required)}{l s='Customize'}{else}{l s='Подробнее'}{/if}</span>
                                </a>

                                <!-- <div class="block_description">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:40}</div>-->
                            <div class="button-container">

                            {if ($viewedProduct->quantity > 0)}

                                <a class="button ajax_add_to_cart_button btn btn-default" href="{$link->
                                getPageLink('cart', true, NULL, "qty=1&amp;id_product={$viewedProduct->id|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$viewedProduct->id|intval}" title="{l s='Добавить в корзину'}">
                                    <span class="price_acc">
                                        {if $priceDisplay != 1}
                                            {displayWtPrice p=$viewedProduct->price}
                                        {else}
                                            {displayWtPrice p=$viewedProduct->price_tax_exc}
                                        {/if}
                                    </span>

                                </a>

                            {else}
                                <!--забрав з класу ajax_add_to_cart_button-->
                                <span class="button btn btn-default">
                                    <span class="price_acc" style="    width: 190px;
                                display: block;
                                height: 40px;
                                margin: -10px 0 0 -18px;
                                padding: 10px 0 0 14px;
                                background: rgba(255,255,255,0.8);">
                                        {if $priceDisplay != 1}
                                            {displayWtPrice p=$viewedProduct->price}
                                        {else}
                                            {displayWtPrice p=$viewedProduct->price_tax_exc}
                                        {/if}
                                    </span>

                                </span>
                            {/if}
                            </div>
                    </div>
                </li>
            {/foreach}
        </ul>
    </div>
</div>
<!--end Accessories -->