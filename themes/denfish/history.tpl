<div class="my-account">
	<div class="clearfix">
		{capture name=path}
		<a href="{$link->
			getPageLink('my-account', true)|escape:'html':'UTF-8'}">
				{l s='Личный кабинет'}
		</a>
		<span class="navigation-pipe">{$navigationPipe}</span>
		<span class="navigation_page">{l s='История заказов'}</span>
		{/capture}
		{include file="$tpl_dir./breadcrumb-cart.tpl"}
	    {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
    </div>
	{include file="$tpl_dir./errors.tpl"}
	<h1 class="page-heading bottom-indent">{l s='История заказов'}</h1>
	<p class="info-title">
		{l s='Здесь будут размещены все Ваши заказы, которые Вы сделали после регистрации.'}
	</p>
	{if $slowValidation}
	<p class="alert alert-warning">
		{l s='Если Вы только что разместили заказ, это может занять несколько минут для того, чтобы он был подтвержден. Пожалуйста, обновите страницу, если Ваш заказ отсутствует.'}
	</p>
	{/if}
	<div class="block-center" id="block-history">
		{if $orders && count($orders)}
		<table id="order-list" class="table table-bordered footab">
			<thead>
				<tr>
					<th class="first_item" data-sort-ignore="true">{l s='Код заказа'}</th>
					<th class="item">{l s='Дата'}</th>
					<th data-hide="phone" class="item">{l s='Общая цена'}</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item">{l s='Оплата'}</th>
					<th class="item">{l s='Статус'}</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item">{l s='Счет'}</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{foreach from=$orders item=order name=myLoop}
				<tr class="{if $smarty.foreach.myLoop.first}first_item{elseif $smarty.foreach.myLoop.last}last_item{else}item{/if} {if $smarty.foreach.myLoop.index % 2}alternate_item{/if}">
					<td class="history_link bold">
						{if isset($order.invoice) && $order.invoice && isset($order.virtual) && $order.virtual}
						<img class="icon" src="{$img_dir}icon/download_product.gif"	alt="{l s='Products to download'}" title="{l s='Products to download'}" />
						{/if}
						<a class="color-myaccount" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->
							getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
									{Order::getUniqReferenceOf($order.id_order)}
						</a>
					</td>
					<td data-value="{$order.date_add|regex_replace:"/[\-\:\ ]/":""}" class="history_date bold">{dateFormat date=$order.date_add full=0}</td>
					<td class="history_price" data-value="{$order.total_paid}">
						<span class="price">
							{displayPrice price=$order.total_paid currency=$order.id_currency no_utf8=false convert=false}
						</span>
					</td>
					<td class="history_method">{$order.payment|escape:'html':'UTF-8'}</td>
					<td{if isset($order.order_state)} data-value="{$order.id_order_state}"{/if} class="history_state">
						{if isset($order.order_state)}
						<span class="label{if isset($order.order_state_color) && Tools::getBrightness($order.order_state_color) >
							128} dark{/if}"{if isset($order.order_state_color) && $order.order_state_color} style="background-color:{$order.order_state_color|escape:'html':'UTF-8'}; border-color:{$order.order_state_color|escape:'html':'UTF-8'};"{/if}>
										{$order.order_state|escape:'html':'UTF-8'}
						</span>
						{/if}
					</td>
					<td class="history_invoice">
						{if (isset($order.invoice) && $order.invoice && isset($order.invoice_number) && $order.invoice_number) && isset($invoiceAllowed) && $invoiceAllowed == true}
						<a class="link-button" href="{$link->
							getPageLink('pdf-invoice', true, NULL, "id_order={$order.id_order}")|escape:'html':'UTF-8'}" title="{l s='Invoice'}" target="_blank"> <i class="icon-file-text large"></i>
							{l s='PDF'}
						</a>
						{else}
									-
								{/if}
					</td>
					<td class="history_detail">
						<a class="btn btn-default button button-small" href="javascript:showOrder(1, {$order.id_order|intval}, '{$link->
							getPageLink('order-detail', true)|escape:'html':'UTF-8'}');">
							<span>
								{l s='Деталм заказа'} <i class="icon-chevron-right right"></i>
							</span>
						</a>
						{if isset($opc) && $opc}
						<a class="link-button" href="{$link->
							getPageLink('order-opc', true, NULL, "submitReorder&id_order={$order.id_order|intval}")|escape:'html':'UTF-8'}" title="{l s='Reorder'}">
								{else}
							<a class="link-button" href="{$link->
								getPageLink('order', true, NULL, "submitReorder&id_order={$order.id_order|intval}")|escape:'html':'UTF-8'}" title="{l s='Reorder'}">
								{/if}
									{if isset($reorderingAllowed) && $reorderingAllowed}
								<i class="icon-refresh"></i>
								{l s='Изменить заказ'}
									{/if}
							</a>
						</td>
					</tr>
					{/foreach}
				</tbody>
			</table>
			<div id="block-order-detail" class="unvisible">&nbsp;</div>
			{else}
			<p class="alert alert-warning">{l s='Вы еще не делали заказов'}</p>
			{/if}
		</div>
		<ul class="footer_links clearfix">
			<li>
				<a class="btn btn-default button button-small" href="{$link->
					getPageLink('my-account', true)|escape:'html':'UTF-8'}">
					<span>
						<i class="icon-chevron-left"></i>
						{l s='Личный кабинет'}
					</span>
				</a>
			</li>
			<li>
				<a class="btn btn-default button button-small" href="{$base_dir}">
					<span>
						<i class="icon-chevron-left"></i>
						{l s='Главная'}
					</span>
				</a>
			</li>
		</ul>
	</div>