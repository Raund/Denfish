<h1 class="you_see">{l s='Еще вы смотрели:' mod='blockviewed'}</h1>
<div class="product_category clearfix">

    {foreach from=$productsViewedObj item=viewedProduct name=myLoop}
    <div class="block_product{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if}">
					<a href="{$viewedProduct->product_link|escape:'html':'UTF-8'}">
						<img
						src="{if isset($viewedProduct->id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'small_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}"
						alt="{$viewedProduct->legend|escape:'html':'UTF-8'}" />
					</a>
					<div>

							<a href="{$viewedProduct->product_link|escape:'html':'UTF-8'}"
							title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}">
								{$viewedProduct->name|truncate:25:'...'|escape:'html':'UTF-8'}
							</a>
                        <h4 class="available">Есть в наличии</h4>
                        <a href="{$viewedProduct->product_link|escape:'html':'UTF-8'}"
                           title="{l s='Подробнее' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}">Подробнее</a>


                            <div class="button-container2">
                                <a class="button ajax_add_to_cart_button btn btn-default" href="{$link->
                                getPageLink('cart', true, NULL, "qty=1&amp;id_product={$accessory.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$accessory.id_product|intval}" title="{l s='Add to cart'}">
                                    <span class="price_acc{if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices} special-price{/if}">{convertPrice price=$categoryProduct.displayed_price}</span>
                                    {if isset($categoryProduct.specific_prices.reduction) && $categoryProduct.specific_prices.reduction && $categoryProduct.specific_prices.reduction_type == 'percentage'}
                                        <span class="price-percent-reduction small">-{$categoryProduct.specific_prices.reduction * 100}%</span>
                                    {/if}
                                    {if isset($categoryProduct.specific_prices) && $categoryProduct.specific_prices}
                                        <span class="old-price">{displayWtPrice p=$categoryProduct.price_without_reduction}</span>
                                    {/if}
                                </a>
                            </div>


						<p class="product-description">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:40}</p>
					</div>
</div>
			{/foreach}



    </div>
</div>
<!--<div class="product_category clearfix">
    <div class="block_product">
        <img src="../img/img_example.jpg" alt="">
        <a href="#">Cпиннинг Kaida Explorer две строки</a>

    </div>-->
