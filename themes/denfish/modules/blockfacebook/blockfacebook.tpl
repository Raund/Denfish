
<!-- Блок facebook-->
<div class="facebook">
{if $facebookurl != ''}
<!--<h4 >{l s='Follow us on Facebook' mod='blockfacebook'}</h4>-->

	<div class="fb-page" data-href="{$facebookurl|escape:'html':'UTF-8'}" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
	</div>
{/if}
 </div>

<!-- Блок facebook- конец-->