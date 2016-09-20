<!--Accessories -->
<div id="viewed-products_block_left" class="block">
    <h1 class="you_see">{l s='Еще вы смотрели:' mod='blockviewed'}</h1>
    <div class="block_content products-block">
        <ul id="bxslider" class="bxslider clearfix">
            {foreach from=$productsViewedObj item=viewedProduct name=myLoop}
            <li class="product-container clearfix{if $smarty.foreach.myLoop.last} last_item{elseif $smarty.foreach.myLoop.first} first_item{else} item{/if}">

                <div class="product_desc">

                    <div class="product-image-container">
                        <a class="product_img_link" href="{$viewedProduct->
                    product_link|escape:'html':'UTF-8'}" title="{l s='More about %s' mod='blockviewed' sprintf=[$viewedProduct->name|escape:'html':'UTF-8']}" >
                            <img class="replace-2x img-responsive" src="{if isset($viewedProduct->
                    id_image) && $viewedProduct->id_image}{$link->getImageLink($viewedProduct->link_rewrite, $viewedProduct->cover, 'home_default')}{else}{$img_prod_dir}{$lang_iso}-default-medium_default.jpg{/if}"
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

                   <!-- <div class="block_description">{$viewedProduct->description_short|strip_tags:'UTF-8'|truncate:40}</div>-->
                    <div class="button-container">
                        <a class="button ajax_add_to_cart_button btn btn-default">
                            <span>{convertPrice price=$productPrice}<!--{l s='Add to cart'}--></span>
                        </a>
                    </div>
                </div>
            </li>
            {/foreach}
        </ul>
    </div>
</div>
<!--end Accessories -->