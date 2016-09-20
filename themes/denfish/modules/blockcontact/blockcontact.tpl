
<div id="contact_block">
		{if $telnumber != ''}
			<div class="phone">
				{$telnumber|escape:'html':'UTF-8'}
			</div>
		{/if}
	{if $telnumber2 != ''}
		<div class="phone1">
			{$telnumber2|escape:'html':'UTF-8'}
		</div>
	{/if}
	{if $telnumber3 != ''}
		<div class="phone">
			{$telnumber3|escape:'html':'UTF-8'}
		</div>
	{/if}
		{if $email != ''}
			<a href="mailto:{$email|escape:'html':'UTF-8'}"></a>
		{/if}

</div>
<!--<div class="phone"><span>+3 8050</span> 548 11 59</div>-->