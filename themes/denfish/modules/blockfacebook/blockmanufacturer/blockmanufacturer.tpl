

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

                    <li style="cursor: pointer" onclick='location.href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}"'>{$manufacturer.name|escape:'html':'UTF-8'}</li>

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
<div class="article">
    <h3>Cтатьи от DEN<span>FISH</span></h3>
    <div class="article_box"><img src="{$img_dir}/art1.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ullam nobis accusantium architecto, modi laborum expedita fugiat labore earum tempora voluptatum atque sint consectetur commodi tempore! Perferendis dignissimos veritatis, corporis?
        <a href="#">Развернуть</a>
    </div>
    <div class="article_box"><img src="{$img_dir}/art2.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ullam nobis accusantium architecto, modi laborum expedita fugiat labore earum tempora voluptatum atque sint consectetur commodi tempore! Perferendis dignissimos veritatis, corporis?
        <a href="#">Развернуть</a>
    </div>
    <div class="article_box"><img src="{$img_dir}/art3.jpg" alt="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur ullam nobis accusantium architecto, modi laborum expedita fugiat labore earum tempora voluptatum atque sint consectetur commodi tempore! Perferendis dignissimos veritatis, corporis?
        <a href="#">Развернуть</a>
    </div>
</div>
<!-- Блок статей -->
