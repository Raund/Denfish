<div id="wishlist_block" class="block account">
    <h2 id="name_post">
            {l s='Отложеные покупки' mod='blockwishlist'}
    </h2>

    <div class="order_list clearfix">

        <div id="wishlist_block_list" class="expanded">
            {if $wishlist_products}

                    {foreach from=$wishlist_products item=product name=i}
                      <div class="up clearfix mb10">
                                <div class="product_descr post left {if $smarty.foreach.i.first}first_item{elseif $smarty.foreach.i.last}last_item{else}item{/if} ">
                                    <span class="quantity-formated" hidden>
                                        <span class="quantity" hidden>{$product.quantity|intval}</span>
                                    </span>
                                    <img class="left" src="{$link->getImageLink($product.link_rewrite, $product.id_image, 'small_default')|escape:'html':'UTF-8'}" alt="{$product.name|escape:'html':'UTF-8'}" {if isset($smallSize)}width="{$smallSize.width}" height="{$smallSize.height}" {/if} />
                                    <ul class="left">
                                            <li>
                                                <a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}">
                                                    {$product.name|truncate:50:'...'|escape:'html':'UTF-8'}
                                                </a>
                                                <a class="ajax_cart_block_remove_link" href="javascript:;" rel="nofollow" title="{l s='Убрать товар со списка отложеных' mod='blockwishlist'}" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '{$product.id_product}', {$product.id_product_attribute}, '0', '{if isset($token)}{$token}{/if}');">
                                                     <i class="fa fa-times-circle"></i>
                                                </a>
                                            </li>

                                            {if $product.reference}<!--необхідно ввести змінну для ID-->
                                            <li>
                                                {l s='id'}<span> : {$product.reference|escape:'html':'UTF-8'}</span>
                                            </li>
                                            {/if}
                                    </ul>


                                </div>
                        {if isset($product.attributes_small)}
                            <dd class="{if $smarty.foreach.i.first}first_item{elseif $smarty.foreach.i.last}last_item{else}item{/if}">
                                <a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{l s='Product detail'}">
                                    {$product.attributes_small|escape:'html':'UTF-8'}
                                </a>
                            </dd>
                        {/if}
                      </div>
                    {/foreach}
                </div>
            {else}
                <dl class="products no-products">
                    <dt>{l s='Нет отложеных покупок' mod='blockwishlist'}</dt>
                    <dd></dd>
                </dl>
            {/if}
    </div> <!-- #wishlist_block_list -->

  <!--    <div class="lnk">
            {if $wishlists}
                <div class="form-group selector1">
                    <select name="wishlists" id="wishlists" class="form-control">
                        {foreach from=$wishlists item=wishlist name=i}
                            <option value="{$wishlist.id_wishlist}"{if $id_wishlist eq $wishlist.id_wishlist or ($id_wishlist == false and $smarty.foreach.i.first)} selected="selected"{/if}>
                                {$wishlist.name|truncate:22:'...'|escape:'html':'UTF-8'}
                            </option>
                        {/foreach}
                    </select>
                </div>
            {/if}
            <a class="btn btn-default button button-small" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockwishlist'}">
				<span>
					{l s='My wishlists' mod='blockwishlist'}<i class="icon-chevron-right right"></i>
				</span>
            </a>
        </div> --><!-- .lnk -->
    </div> <!-- .block_content -->
</div> <!-- #wishlist_block -->




<!--<div id="wishlist_block" class="block account">
    <h4 class="title_block">
        <a href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockwishlist'}" rel="nofollow">
            {l s='Wishlist' mod='blockwishlist'}
        </a>
    </h4>
    <div class="block_content">
        <div id="wishlist_block_list" class="expanded">
            {if $wishlist_products}
                <dl class="products">
                    {foreach from=$wishlist_products item=product name=i}
                        <dt class="{if $smarty.foreach.i.first}first_item{elseif $smarty.foreach.i.last}last_item{else}item{/if}">
							<span class="quantity-formated">
								<span class="quantity">{$product.quantity|intval}</span>
							</span>
                            <a class="cart_block_product_name" href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{$product.name|escape:'html':'UTF-8'}">
                                {$product.name|truncate:30:'...'|escape:'html':'UTF-8'}
                            </a>
                            <a class="ajax_cart_block_remove_link" href="javascript:;" rel="nofollow" title="{l s='remove this product from my wishlist' mod='blockwishlist'}" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '{$product.id_product}', {$product.id_product_attribute}, '0', '{if isset($token)}{$token}{/if}');">
                                <i class="icon-remove-sign "></i>
                            </a>
                        </dt>
                        {if isset($product.attributes_small)}
                            <dd class="{if $smarty.foreach.i.first}first_item{elseif $smarty.foreach.i.last}last_item{else}item{/if}">
                                <a href="{$link->getProductLink($product.id_product, $product.link_rewrite, $product.category_rewrite)|escape:'html':'UTF-8'}" title="{l s='Product detail'}">
                                    {$product.attributes_small|escape:'html':'UTF-8'}
                                </a>
                            </dd>
                        {/if}
                    {/foreach}
                </dl>
            {else}
                <dl class="products no-products">
                    <dt>{l s='No products' mod='blockwishlist'}</dt>
                    <dd></dd>
                </dl>
            {/if}
        </div> <!-- #wishlist_block_list -->

       <!-- <div class="lnk">
            {if $wishlists}
                <div class="form-group selector1">
                    <select name="wishlists" id="wishlists" class="form-control">
                        {foreach from=$wishlists item=wishlist name=i}
                            <option value="{$wishlist.id_wishlist}"{if $id_wishlist eq $wishlist.id_wishlist or ($id_wishlist == false and $smarty.foreach.i.first)} selected="selected"{/if}>
                                {$wishlist.name|truncate:22:'...'|escape:'html':'UTF-8'}
                            </option>
                        {/foreach}
                    </select>
                </div>
            {/if}
            <a class="btn btn-default button button-small" href="{$link->getModuleLink('blockwishlist', 'mywishlist', array(), true)|escape:'html':'UTF-8'}" title="{l s='My wishlists' mod='blockwishlist'}">
				<span>
					{l s='My wishlists' mod='blockwishlist'}<i class="icon-chevron-right right"></i>
				</span>
            </a>
        </div>
    </div>
</div> --><!-- #wishlist_block -->
<!-- #wishlist_block -->
<!--<h2 id="name_post">Отложеные покупки</h2>
<div class="order_list clearfix">
    <div class="up clearfix">
        <div class="product_descr post left">
            <img class="left" src="../img/img_product.jpg" alt="">
            <ul class="left">
                <li><a href="#">Катушка Kaida KD 40</a></li>
                <li>id: <span>12345678</span></li>
            </ul>
            <ul class="recall">
                <li>Напомнить:<span class="date">12.10.15</span></li>
                <li>SMS<span>+380951234567</span></li>
                <li>Почта<span>raun@i.ua</span></li>
            </ul>
        </div>
    </div>-->