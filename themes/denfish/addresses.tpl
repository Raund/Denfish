<div class="my-account">
    <div class="clearfix">
        {capture name=path}
        <a href="{$link->
            getPageLink('my-account', true)|escape:'html':'UTF-8'}">{l s='Личный кабинет'}
        </a>
        <span class="navigation-pipe">{$navigationPipe}</span>
        <span class="navigation_page">{l s='Мои адреса доставки'}</span>
        {/capture}
        {include file="$tpl_dir./breadcrumb-cart.tpl"}
        {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
    </div>
    <h1 class="page-heading">{l s='Мои адреса доставки'}</h1>
    <p>
        {l s='Пожалуйста, настройте ваши адреса доставки при размещении заказа . Вы также можете добавить дополнительные адреса , которые могут быть полезны для отправки подарков или получения заказа в офисе.'}
    </p>
    {if isset($multipleAddresses) && $multipleAddresses}
    <div class="addresses">
        <p> <strong class="dark">{l s='Список адресов размещен ниже.'}</strong>
        </p>
        <p class="p-indent">
            {l s='Убедитесь в актуальности Вашей личной информации, перед внесением измений.'}
        </p>
        {assign var="adrs_style" value=$addresses_style}
        <div class="bloc_adresses row">
            {foreach from=$multipleAddresses item=address name=myLoop}
            <div class="col-xs-12 col-sm-6 address">
                <ul class="{if $smarty.foreach.myLoop.last}last_item{elseif $smarty.foreach.myLoop.first}first_item{/if}{if $smarty.foreach.myLoop.index % 2} alternate_item{else} item{/if} box">
                    <li>
                        <h3 class="page-subheading">{$address.object.alias}</h3>
                    </li>
                    {foreach from=$address.ordered name=adr_loop item=pattern}
                        {assign var=addressKey value=" "|explode:$pattern}
                    <li>
                        {foreach from=$addressKey item=key name="word_loop"}
                        <span {if isset($addresses_style[$key])} class="{$addresses_style[$key]}"{/if}>
                            {$address.formated[$key|replace:',':'']|escape:'html':'UTF-8'}
                        </span>
                        {/foreach}
                    </li>
                    {/foreach}
                    <li class="address_update clearfix">
                        <a class="btn btn-default button button-small" href="{$link->
                            getPageLink('address', true, null, "id_address={$address.object.id|intval}")|escape:'html':'UTF-8'}" title="{l s='Обновить'}">
                            <span>{l s='Обновить'}<i class="fa fa-upload fa-2x"></i>
                            </span>
                        </a>
                        <a class="btn btn-default button button-small" href="{$link->
                            getPageLink('address', true, null, "id_address={$address.object.id|intval}&delete")|escape:'html':'UTF-8'}" onclick="return confirm('{l s='Вы уверенны?' js=1}');" title="{l s='Удалить'}">
                            <span>{l s='Удалить'}<i class="fa fa-eraser fa-2x"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
            {if $smarty.foreach.myLoop.index % 2 && !$smarty.foreach.myLoop.last}
        </div>
        <div class="bloc_adresses row">
            {/if}
        {/foreach}
        </div>
    </div>
    {else}
    <p class="alert alert-warning">
        {l s='Нет доступных адресов.'}&nbsp;
        <!--<a href="{$link->
            getPageLink('address', true)|escape:'html':'UTF-8'}">{l s='Add a new address'}
        </a>-->
    </p>
    {/if}
    <div class="clearfix main-page-indent">
        <a href="{$link->
            getPageLink('address', true)|escape:'html':'UTF-8'}" title="{l s='Добавить новый адрес'}" class="btn btn-default button button-medium">
            <span>
                {l s='Добавить новый адрес'}
                <i class="icon-chevron-right right"></i>
            </span>
        </a>
    </div>
    <ul class="footer_links clearfix">
        <li>
            <a class="btn btn-defaul button button-small" href="{$link->
                getPageLink('my-account', true)|escape:'html':'UTF-8'}">
                <span>
                    <i class="icon-chevron-left"></i>
                    {l s='Личный кабинет'}
                </span>
            </a>
        </li>
        <li>
            <a class="btn btn-defaul button button-small" href="{$base_dir}">
                <span>
                    <i class="icon-chevron-left"></i>
                    {l s='Главная'}
                </span>
            </a>
        </li>
    </ul>
</div>