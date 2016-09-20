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
{if count($categoryProducts) > 0 && $categoryProducts !== false}
<section class="page-product-box blockproductscategory">
	<h3 class="productscategory_h3 page-product-heading">{l s='Похожие товары' mod='productscategory'}</h3>
	<div id="productscategory_list" class="clearfix">
		<ul id="bxslider1" class="bxslider clearfix">
		 {foreach from=$categoryProducts item='categoryProduct' name=categoryProduct}
			<li class="product-container mt0">
					<div class="product-image-container">
						<div class="stars">
							<img src="{$img_dir}star_gold_mini.png" alt="">
							<img src="{$img_dir}star_gold_mini.png" alt="">
							<img src="{$img_dir}star_gold_mini.png" alt="">
							<img src="{$img_dir}star_grey_mini.png" alt="">
							<img src="{$img_dir}star_grey_mini.png" alt="">
						</div>
						<a href="{$link->
							getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)}" class="product_img_link" title="{$categoryProduct.name|htmlspecialchars}">
							<img class="replace-2x img-responsive" src="{$link->
							getImageLink($categoryProduct.link_rewrite, $categoryProduct.id_image, 'home_default')|escape:'html':'UTF-8'}" alt="{$categoryProduct.name|htmlspecialchars}"{if isset($homeSize)} width="{$homeSize.width}" height="{$homeSize.height}"{/if} itemprop="image" />
						</a>
					</div>
					<div class="s_title_block">
					<h5 class="product-name">
						<a href="{$link->
							getProductLink($categoryProduct.id_product, $categoryProduct.link_rewrite, $categoryProduct.category, $categoryProduct.ean13)|escape:'html':'UTF-8'}" title="{$categoryProduct.name|htmlspecialchars}">{$categoryProduct.name|truncate:50:'...'|escape:'html':'UTF-8'}
						</a>
					</h5>
					</div>
					<div class="block_description">{$product.description_short|strip_tags|truncate:45:'...'}
					</div>
					{if $ProdDisplayPrice AND $categoryProduct.show_price == 1 AND !isset($restricted_country_mode) AND !$PS_CATALOG_MODE}
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
					{else}
					<br />
					{/if}
				</li>
		{/foreach}
		</ul>
	</div>
</section>
{/if}