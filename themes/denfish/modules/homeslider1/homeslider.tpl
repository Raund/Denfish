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
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if $page_name =='index'}
<!-- Module HomeSlider -->
    {if isset($homeslider_slides)}
		<div class="slide">
			{if isset($homeslider_slides.0) && isset($homeslider_slides.0.sizes.1)}{capture name='height'}{$homeslider_slides.0.sizes.1}{/capture}{/if}
			{if isset($smarty.capture.height) && $smarty.capture.height} {/if}
				{foreach from=$homeslider_slides item=slide}
					{if $slide.active}


						      <img src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`homeslider/images/`$slide.image|escape:'htmlall':'UTF-8'`")}"{if isset($slide.size) && $slide.size} {$slide.size}{else} width="100%" height="100%"{/if} alt="{$slide.legend|escape:'htmlall':'UTF-8'}" />

							{if isset($slide.description) && trim($slide.description) != ''}
								<!--<div class="homeslider-description">{$slide.description}</div>-->
							{/if}

					{/if}
				{/foreach}

		</div>
	{/if}
   <div class="img_menu clearfix">
				<ul>
					<li><a href="http://poligon.loc/ru/12-udilissha"><span class="discr">Удилища</span><img src="{$img_dir}/udka1.jpg" alt=""></a></li>
					<li><a href="http://poligon.loc/ru/21-katushki"><span class="discr">Катушки</span><img src="{$img_dir}/spining.jpg" alt=""></a></li>
					<li><a href="http://poligon.loc/ru/90-kryuchki"><span class="discr">Крючки</span><img src="{$img_dir}/kryuk.jpg" alt=""></a></li>
					<li><a href="#"><span class="discr">Лески, шнуры</span><img src="{$img_dir}/leska.jpg" alt=""></a></li>
					<li><a href="#"><span class="discr">Карповая ловля</span><img src="{$img_dir}/karp_lovlya.jpg" alt=""></a></li>
					<li class="active"><a href="#"><span class="discr">Фидерная ловля</span><img src="{$img_dir}/fider_lovlya.jpg" alt=""></a></li>
					<li><a href="#"><span class="discr">Спиннинговая ловля</span><img src="{$img_dir}/spining_lovlya.jpg"  alt=""></a></li>
					<li><a href="#"><span class="discr">Поплавочная ловля</span><img src="{$img_dir}/poplavok_lovlya.jpg" alt=""></a></li>
				</ul>
			</div>
<!-- /Module HomeSlider -->
{/if}