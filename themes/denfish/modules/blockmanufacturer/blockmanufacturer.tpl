

<!-- Block manufacturers module -->
<div class="manufact">
		<!--{if $display_link_manufacturer}
			<a href="{$link->getPageLink('manufacturer')|escape:'html':'UTF-8'}" title="{l s='Manufacturers' mod='blockmanufacturer'}">
		{/if}-->
				<h3>{l s='Manufacturers' mod='blockmanufacturer'}</h3>
		{if $display_link_manufacturer}
			<!--</a>-->
		{/if}


		{if $manufacturers}
			{if $text_list}
			<ul class="manf clearfix">

                {foreach from=$manufacturers item=manufacturer name=manufacturer_list}
                    {if $smarty.foreach.manufacturer_list.iteration <= $text_list_nb}

                    <li onclick='location.href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}"'><span><div class="chek"></div>{$manufacturer.name|escape:'html':'UTF-8'}</span></li>

                    {/if}
                {/foreach}

			</ul>
			{/if}
           <a href="{$link->getPageLink('manufacturer')|escape:'html':'UTF-8'}">{l s='Смотреть все' mod='blockmanufacturer'}</a>
            <hr>
		{/if}

</div>
<!-- /Block manufacturers module -->
<!-- Блок статей -->

<!-- Блок статей -->
