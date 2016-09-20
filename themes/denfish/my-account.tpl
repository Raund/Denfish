<div class="my-account">
    <div class="clearfix">
    {capture name=path}{l s='Личный кабинет'}{/capture}
    {include file="$tpl_dir./breadcrumb-cart.tpl"}
    {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
    </div>
    <!--<h1 class="page-heading">{l s='My account'}</h1>-->
    {if isset($account_created)}
    	<p class="alert alert-success">
    		{l s='Личный кабинет успешно создан.'}
    	</p>
    {/if}
    <p class="info-account">{l s='Добро пожаловать в личный кабинет. Здесь Вы можите менять свою личную информацию и информацию о покупках.'}</p>
    <div class="row addresses-lists">
    	<div class="col-xs-12 col-sm-6 col-lg-4">
    		<ul class="myaccount-link-list">
                {if $has_customer_an_address}
                <li><a href="{$link->getPageLink('address', true)|escape:'html':'UTF-8'}" title="{l s='Добавить адресс доставки'}"><i class="fa fa-home"></i><span>{l s='Добавить первый адрес'}</span></a></li>
                {/if}
                <li><a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" title="{l s='История заказов'}"><i class="fa fa-list-alt"></i><span>{l s='История заказов'}</span></a></li>
                {if $returnAllowed}
                    <li><a href="{$link->getPageLink('order-follow', true)|escape:'html':'UTF-8'}" title="{l s='Merchandise returns'}"><i class="icon-refresh"></i><span>{l s='My merchandise returns'}</span></a></li>
                {/if}
                <!--<li><a href="{$link->getPageLink('order-slip', true)|escape:'html':'UTF-8'}" title="{l s='Credit slips'}"><i class="icon-ban-circle"></i><span>{l s='My credit slips'}</span></a></li>-->
                <li><a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" title="{l s='Мои адреса'}"><i class="fa fa-truck"></i><span>{l s='Мои адреса'}</span></a></li>
                <li><a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" title="{l s='Персональная информация'}"><i class="fa fa-user"></i><span>{l s='Персональная информация'}</span></a></li>
            </ul>
    	</div>
    {if $voucherAllowed || isset($HOOK_CUSTOMER_ACCOUNT) && $HOOK_CUSTOMER_ACCOUNT !=''}
    	<div class="col-xs-12 col-sm-6 col-lg-4">
            <ul class="myaccount-link-list">
                <!--{if $voucherAllowed}
                    <li><a href="{$link->getPageLink('discount', true)|escape:'html':'UTF-8'}" title="{l s='Vouchers'}"><i class="icon-barcode"></i><span>{l s='My vouchers'}</span></a></li>
                {/if}-->
                {$HOOK_CUSTOMER_ACCOUNT}
            </ul>
        </div>
    {/if}
    </div>
    <ul class="footer_links clearfix">
    <li><a class="btn btn-default button button-small" href="{$base_dir}" title="{l s='Главная'}"><span><i class="icon-chevron-left"></i> {l s='Главная'}</span></a></li>
    </ul>
</div>