<div id="content_manufact">	

{capture name=path}{l s='Производители'}{/capture}
 {include file="$tpl_dir./breadcrumb.tpl"}

{if isset($errors) AND $errors}
	{include file="$tpl_dir./errors.tpl"}
{else}
	{if $nbManufacturers > 0}
    	 

        {assign var='nbItemsPerLine' value=3}
        {assign var='nbItemsPerLineTablet' value=2}
        {assign var='nbLi' value=$manufacturers|@count}
        {math equation="nbLi/nbItemsPerLine" nbLi=$nbLi nbItemsPerLine=$nbItemsPerLine assign=nbLines}
        {math equation="nbLi/nbItemsPerLineTablet" nbLi=$nbLi nbItemsPerLineTablet=$nbItemsPerLineTablet assign=nbLinesTablet}

        <div class="manufact_category clearfix">
        	{foreach from=$manufacturers item=manufacturer name=manufacturers}
	        	{math equation="(total%perLine)" total=$smarty.foreach.manufacturers.total perLine=$nbItemsPerLine assign=totModulo}
	            {math equation="(total%perLineT)" total=$smarty.foreach.manufacturers.total perLineT=$nbItemsPerLineTablet assign=totModuloTablet}
	            {if $totModulo == 0}{assign var='totModulo' value=$nbItemsPerLine}{/if}
	            {if $totModuloTablet == 0}{assign var='totModuloTablet' value=$nbItemsPerLineTablet}{/if}
			<div class="manufact_block">
				{if $manufacturer.nb_products > 0}
				<a href="{$link->getmanufacturerLink($manufacturer.id_manufacturer, $manufacturer.link_rewrite)|escape:'html':'UTF-8'}" 
				title="{$manufacturer.name|escape:'html':'UTF-8'}" >
				{/if}
					<img src="{$img_manu_dir}{$manufacturer.image|escape:'html':'UTF-8'}-medium_default.jpg" alt="" />
					{$manufacturer.name|truncate:60:'...'|escape:'html':'UTF-8'}
				</a>
			</div>
			{/foreach}
		</div>

		
       
	{/if}
{/if}
</div>
