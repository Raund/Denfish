{if $page_name =='index'}
<!-- Module HomeSlider -->
    {if isset($homeslider_slides)}
		<div id="homepage-slider">
			{if isset($homeslider_slides.0) && isset($homeslider_slides.0.sizes.1)}{capture name='height'}{$homeslider_slides.0.sizes.1}{/capture}{/if}
			<ul id="homeslider"{if isset($smarty.capture.height) && $smarty.capture.height} style="max-height:{$smarty.capture.height}px;"{/if}>
				{foreach from=$homeslider_slides item=slide}
					{if $slide.active}
						<li class="homeslider-container">
							<a href="{$slide.url|escape:'html':'UTF-8'}" title="{$slide.legend|escape:'html':'UTF-8'}">
								<img src="{$link->getMediaLink("`$smarty.const._MODULE_DIR_`homeslider/images/`$slide.image|escape:'htmlall':'UTF-8'`")}"{if isset($slide.size) && $slide.size} {$slide.size}{else} width="100%" height="100%"{/if} alt="{$slide.legend|escape:'htmlall':'UTF-8'}" />
							</a>
							{if isset($slide.description) && trim($slide.description) != ''}
								<div class="homeslider-description">{$slide.description}</div>
							{/if}
						</li>
					{/if}
				{/foreach}
			</ul>
		</div>
	{/if}
<div class="img_menu clearfix">
<ul>
	<li>
		<a href="{$base_dir}12-udilissha">
			<span class="discr">Удилища</span>
			<img src="{$img_dir}/udka1.jpg" alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}21-katushki">
			<span class="discr">Катушки</span>
			<img src="{$img_dir}/spining.jpg" alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}90-kryuchki">
			<span class="discr">Крючки</span>
			<img src="{$img_dir}/kryuk.jpg" alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}95-leski-shnury">
			<span class="discr">Лески, шнуры</span>
			<img src="{$img_dir}/leska.jpg" alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}28-karpovaya-lovlya">
			<span class="discr">Карповая ловля</span>
			<img src="{$img_dir}/karp_lovlya.jpg" alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}65-fidernaya-lovlya">
			<span class="discr">Фидерная ловля</span>
			<img src="{$img_dir}/fider_lovlya.jpg" alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}44-spinningovaya-lovlya">
			<span class="discr">Спиннинговая ловля</span>
			<img src="{$img_dir}/spining_lovlya.jpg"  alt=""></a>
	</li>
	<li>
		<a href="{$base_dir}55-poplavochnaya-lovlya">
			<span class="discr">Поплавочная ловля</span>
			<img src="{$img_dir}/poplavok_lovlya.jpg" alt=""></a>
	</li>
</ul>
</div>
<!-- /Module HomeSlider -->
{/if}