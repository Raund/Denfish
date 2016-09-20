{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $products}
    <div class="order_list clearfix">
		{foreach from=$products item=product name=i}
            <div class="up clearfix">
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
                    <!--<ul class="recall">
                        <li>Напомнить:<span class="date">12.10.15</span></li>
                        <li>SMS<span>+380951234567</span></li>
                        <li>Почта<span>denfish@i.ua</span></li>
                    </ul>-->

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
		{if isset($error) && $error}
			<dt>{l s='You must create a wishlist before adding products' mod='blockwishlist'}</dt>
		{else}
			<dt>{l s='No products' mod='blockwishlist'}</dt>
		{/if}
	</dl>
{/if}