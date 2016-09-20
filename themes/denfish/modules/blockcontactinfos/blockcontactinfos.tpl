<!--блок адреси-->
<div class="addres left">
        <h4>{l s='Адреса наших магазинов:' mod='blockcontactinfos'}</h4>
        <ul>
            {if $blockcontactinfos_company != ''}
            	<li class="gorod">
            		{$blockcontactinfos_company|escape:'html':'UTF-8'}
            	</li>
                <li class="ulica">{if $blockcontactinfos_address != ''} {$blockcontactinfos_address|escape:'html':'UTF-8'}{/if}
                </li>
            {/if}

        </ul>
             <ul>
                 {if $blockcontactinfos_company1 != ''}
                     <li class="gorod">
                         {$blockcontactinfos_company1|escape:'html':'UTF-8'}
                     </li>
                     <li class="ulica">{if $blockcontactinfos_address1 != ''} {$blockcontactinfos_address1|escape:'html':'UTF-8'}{/if}
                     </li>
                 {/if}
             </ul>
           <!-- {if $blockcontactinfos_phone != ''}
            	<li>
            		<i class="icon-phone"></i>{l s='Call us now:' mod='blockcontactinfos'} 
            		<span>{$blockcontactinfos_phone|escape:'html':'UTF-8'}</span>
            	</li>
            {/if}
            {if $blockcontactinfos_email != ''}
            	<li>
            		<i class="icon-envelope-alt"></i>{l s='Email:' mod='blockcontactinfos'} 
            		<span>{mailto address=$blockcontactinfos_email|escape:'html':'UTF-8' encode="hex"}</span>
            	</li>
            {/if}-->


        </ul>
    </div>
<!--/блок адреси-->



