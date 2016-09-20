
{if $page_name =='index'}
<!-- Module HomeSlider -->
    {if isset($homeslider_slides)}
		<div id="homepage-slider" class="slider">
			{if isset($homeslider_slides.0) && isset($homeslider_slides.0.sizes.1)}{capture name='height'}{$homeslider_slides.0.sizes.1}{/capture}{/if}
			<div class="carousel" id="homeslider"{if isset($smarty.capture.height) && $smarty.capture.height} style="max-height:{$smarty.capture.height}px;"{/if}>
				{foreach from=$homeslider_slides item=slide}
					{if $slide.active}
                <div class="slide_item">
							<a href="{$slide.url|escape:'html':'UTF-8'}" title="{$slide.legend|escape:'html':'UTF-8'}">
								<img src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`homeslider/images/`$slide.image|escape:'htmlall':'UTF-8'`")}"{if isset($slide.size) && $slide.size} {$slide.size}{else} width="870" height="381"{/if} alt="{$slide.legend|escape:'htmlall':'UTF-8'}" />
							</a>
							<!--{if isset($slide.description) && trim($slide.description) != ''}
								<div class="homeslider-description">{$slide.description}</div>
							{/if}-->
						</div>
					{/if}
				{/foreach}
			</div>
		</div>
	{/if}
    <div class="img_menu clearfix">
        <ul>
            <li><a href="http://poligon.loc/ru/12-udilissha"><span class="discr">Удилища</span><img src="{$img_dir}/udka1.jpg" alt=""></a></li>
            <li><a href="http://poligon.loc/ru/21-katushki"><span class="discr">Катушки</span><img src="{$img_dir}/spining.jpg" alt=""></a></li>
            <li><a href="http://poligon.loc/ru/90-kryuchki"><span class="discr">Крючки</span><img src="{$img_dir}/kryuk.jpg" alt=""></a></li>
            <li><a href="http://poligon.loc/ru/95-leski-shnury"><span class="discr">Лески, шнуры</span><img src="{$img_dir}/leska.jpg" alt=""></a></li>
            <li><a href="http://poligon.loc/ru/28-karpovaya-lovlya"><span class="discr">Карповая ловля</span><img src="{$img_dir}/karp_lovlya.jpg" alt=""></a></li>
            <li class="active"><a href="http://poligon.loc/ru/65-fidernaya-lovlya"><span class="discr">Фидерная ловля</span><img src="{$img_dir}/fider_lovlya.jpg" alt=""></a></li>
            <li><a href="http://poligon.loc/ru/44-spinningovaya-lovlya"><span class="discr">Спиннинговая ловля</span><img src="{$img_dir}/spining_lovlya.jpg"  alt=""></a></li>
            <li><a href="http://poligon.loc/ru/55-poplavochnaya-lovlya"><span class="discr">Поплавочная ловля</span><img src="{$img_dir}/poplavok_lovlya.jpg" alt=""></a></li>
        </ul>
    </div>
<!-- /Module HomeSlider -->
{/if}