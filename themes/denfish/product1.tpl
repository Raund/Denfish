<div id="content_newproduct">
    <div class="clearfix">
        {include file="$tpl_dir./breadcrumb-cart.tpl"}
                        {include file="$tpl_dir./modules/blocksearch/blocksearch-top.tpl"}
        <!-- /Я підключив-->
        {include file="$tpl_dir./errors.tpl"}
                        {if $errors|@count == 0}
                        {if !isset($priceDisplayPrecision)}
                            {assign var='priceDisplayPrecision' value=2}
                        {/if}
                        {if !$priceDisplay || $priceDisplay == 2}
                            {assign var='productPrice' value=$product->getPrice(true, $smarty.const.NULL, $priceDisplayPrecision)}
                            {assign var='productPriceWithoutReduction' value=$product->getPriceWithoutReduct(false, $smarty.const.NULL)}
                        {elseif $priceDisplay == 1}
                            {assign var='productPrice' value=$product->getPrice(false, $smarty.const.NULL, $priceDisplayPrecision)}
                            {assign var='productPriceWithoutReduction' value=$product->getPriceWithoutReduct(true, $smarty.const.NULL)}
                        {/if}
        <h1 itemprop="name">{$product->name|escape:'html':'UTF-8'}</h1>
    </div>
    <ul class="tabs clearfix">
        <li id="tab_all" class="active">Все о товаре</li>
        <li id="tab_delivery">Доставка и оплата</li>
        <li id="tab_models">Модели</li>
    </ul>

    <script>

        $(function(){

            $('#tab_all').on('click', function(){
                $('#tab_all').addClass("active");
                $('#describe_of_product').show(500);
                $('#tab_delivery').removeClass("active"); 
                $('#tab_models').removeClass("active"); 
                $('#delivery').hide(500); 
                $('#models').hide(500);            
                });
            $('#tab_delivery').on('click', function(){
                $('#tab_delivery').addClass("active");
                $('#delivery').show(500);
                $('#tab_all').removeClass("active"); 
                $('#tab_models').removeClass("active"); 
                $('#describe_of_product').hide(500);
                $('#models').hide(500);            
                });
            $('#tab_models').on('click', function(){
                $('#tab_models').addClass("active");
                $('#models').show(500);
                $('#tab_all').removeClass("active"); 
                $('#tab_delivery').removeClass("active");
                $('#describe_of_product').hide(500); 
                $('#delivery').hide(500);             
                });
        });
    </script>

    <div id="delivery">
        <p style="text-align: justify;"><span style="font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></p>
        <p><span style="font-size: 16pt; font-family: RobotoBold, helvetica, sans-serif;">Способы доставки</span><br /><br /></p>
        <p><span style="font-size: 14pt;"><strong><span style="font-family: RobotoBold, helvetica, sans-serif;"><span style="font-weight: 600;">Мы предлагаем несколько вариантов доставки:</span>&nbsp;&nbsp;</span></strong></span></p>
        <p><strong><span>&nbsp;</span></strong></p>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Оcновным способом доставки заказов является доставка через товарно-транспортную компанию "Новая Почта". Для более удобного способа оформления заказов все возможные представительства&nbsp; ООО "Новая Почта" интегрированы на нашем сайте и список систематически освежается. В случае если вы не можете выбрать нужный город, представительство или же у Вас есть другой вариант доставки товара, следует выбрать любой город/склад, а нужный следует указать это в коментариях к заказу.</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">С помощью доставки "Новой почтой" вы можете получить товар даже в самых отдаленных уголках нашей страны.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">С списком отделений ООО &laquo;Новая Почта&raquo; можно ознакомится по данной <span style="text-decoration: underline; font-size: 14pt;"><a href="http://novaposhta.ua/frontend/brunchoffices/ru">ссылке</a></span>.<span style="color: #3366ff;"><span style="color: #3366ff;">&nbsp;<span style="color: #000000;">Т</span></span></span>акже все представительства интегрированы на нашем сайте и могут быть выбраны при оформлении заказа.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Ознакомится с тарифами основного перевозчика ООО &laquo;Новая Почта&raquo;&nbsp; можно <span style="text-decoration: underline; font-size: 14pt;"><a href="http://novaposhta.ua/pricelists/ua">здесь</a></span>.</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Также к вашему вниманию <span style="text-decoration: underline;"><span style="font-size: 14pt;"><a href="https://novaposhta.ua/uploads/misc/doc/taryfni_zony.pdf">таблица тарифных зон</a></span></span>&nbsp;компании "Новая Почта".</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Приблизительную стоимость доставки можно рассчитать с помощью &nbsp;<span style="text-decoration: underline; font-size: 14pt;"><a href="http://novaposhta.ua/frontend/tracking/ua">тарифного калькулятора</a></span>.</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Отслеживать перемещение своего заказа сможете <span style="text-decoration: underline; font-size: 14pt;"><a href="http://novaposhta.ua/frontend/tracking/ua">тут</a></span>.</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Ознакомится со сроками доставки компании "Нова Почта" можно <span style="text-decoration: underline; font-size: 14pt;"><a href="http://novaposhta.ua/frontend/deliveryschedule/ua">здесь</a></span>.</span></div>
        <div><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Заказы, сделанные после 12-00, мы отправлятся на следующий рабочий день, доставка товара занимает 1-2 дня в зависимости от города назначения. При получения заказа наложенным платежом вы сможете осмотреть, проверить комплектацию, после чего на месте оплатить покупку.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Пожалуйста, обратите внимание, доставленный товар находится в региональном пункте выдачи товара не более 5 дней, после чего отправляется обратно.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Также возможна доставка заказов следующими товарно - транспортными компаниями: Ночной экспресс, Новая Почта, Интайм, Мист Экспресс, Деливери. Для этого следует указать нужный способ и адрес в коментариях к заказу.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Стоимость доставки транспортной компании не входит в цену товара.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt;"><span style="font-family: Robotoregular, helvetica, sans-serif;"><span style="font-family: Robotoregular, helvetica, sans-serif;">Рекомендуемый способ доставки перевозчиком "<span style="text-decoration: underline;"><span style="font-size: 14pt;"><a href="https://novaposhta.ua/">НОВАЯ ПОЧТА</a></span>"</span></span></span></span><span style="text-decoration: underline; color: #0000ff;"><span style="font-size: 14pt; font-family: Robotoregular, helvetica, sans-serif;"><a href="http://novaposhta.ua/"><span style="color: #0000ff; text-decoration: underline;"><br /><br /><br /></span></a></span></span></div>
        <div style="text-align: justify;"></div>
        <p><span style="font-size: 18pt; font-family: RobotoBold, helvetica, sans-serif;"><span style="font-size: 16pt;"><strong>Способы оплаты</strong></span><br /><br /></span></p>
        <p>&nbsp;<span style="font-family: Robotoregular, helvetica, sans-serif;"><strong><span style="font-weight: 600; font-size: 14pt; font-family: Robotobold;">В цену товара не входит доставка.</span>&nbsp;</strong><span style="font-size: 12pt;">За доставку вы оплачиваете самостоятельно при получении Вашего заказа по тарифам транспортной компании. Наиболее часто сумма доставки среднего заказа будет составлять 19грн - 35грн. в зависимости от стоимости, габаритов и пункта доставки.</span></span></p>
        <div style="text-align: justify;"><strong><span style="font-size: 14pt; font-family: Robotobold, monaco;">&nbsp;</span></strong></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;"><strong><span style="font-weight: 600; font-size: 14pt; font-family: RobotoBold;">При получении товара (наложенный платеж)</span>&nbsp;</strong>- стоимость заказа и доставки оплачивается при получении на представительстве компании - перевозчика ООО "Новая Почта", после проверки посылки на содержание и на отсутствие возможных повреждений при доставке заказа. В этом случае вы оплачиваете доставку товара согласно стандартных тарифов ООО "Новая Почта" + 2% от стоимости наложенного платежа (от стоимости заказа) +16грн (одноразовая комиссия).</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;"><strong>&nbsp;</strong></span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;"><strong><span style="font-weight: 600; font-size: 14pt; font-family: RobotoBold;">Предоплата на карту "Приват Банк" согласно выставленному счету</span> -&nbsp;</strong>Так же в нашем магазине возможна оплата на карточку "ПРИВАТ БАНК". В данном случае счет на оплату выставляется нашим менеджером после согласования заказа в телефонном режиме. Товар передается в службу доставки сразу после поступления денег на наш расчетный счет. В данном случае комиссия за оплату заказа составит всего 0,5% от суммы заказа.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: arial, helvetica, sans-serif;">Выбрав один из способов оплаты, что будет означать, что Вы согласны с правилами работы интернет-магазина. С Вами свяжется наш менеджер (по рабочим дням с 9:00 до 18:00 для уточнения заказа и времени доставки заказа. Заказ считается принятым только после подтверждения его нашим специалистом.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">После отправки заказа, на Ваш контактный телефон&nbsp; будет отправлено сообщение с номером декларации, по которому Вы сможете получить товар в представительстве транспортной компании в Вашем городе.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Полная распечатка по заказу прилагается к посылке и дублируется на ваш электронный адрес!</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Стоимость доставки формируется компанией перевозчиком, исходя из габаритов, веса, а также места назначения. Услуги этих транспортных компаний оплачивает клиент в момент получения товара в своем городе.</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-size: 12pt; font-family: Robotoregular, helvetica, sans-serif;">Оплата услуг транспортной компании происходит при получении заказа в офисе, складе транспортной компании.</span></div>
        <div style="text-align: justify;"><span style="font-size: 14pt; font-family: Robotoregular, helvetica, sans-serif;">&nbsp;</span></div>
    </div>
    {if isset($accessories) && $accessories}
        <div id="models">
                        <h2>Модели</h2>
                        {foreach from=$accessories item=accessory name=accessories_list}
                            {if ($accessory.allow_oosp || $accessory.quantity_all_versions > 0 || $accessory.quantity > 0) && $accessory.available_for_order && !isset($restricted_country_mode)}
                                {assign var='accessoryLink' value=$link->getProductLink($accessory.id_product, $accessory.link_rewrite, $accessory.category)}
                                <div  class="product-container mt0 item product-box ajax_block_product{if $smarty.foreach.accessories_list.first} first_item{elseif $smarty.foreach.accessories_list.last} last_item{else} item{/if} product_accessories_description">
                                    <h1>
                                        <a href="{$accessoryLink|escape:'html':'UTF-8'}">
                                            {$accessory.name|truncate:50:'...':true|escape:'html':'UTF-8'}
                                        </a>
                                    </h1>                    
                                    <div class="clearfix">
                                        <div class="right">
                                            <h1 class="models_price">
                                                {if $priceDisplay != 1}
                                                        {displayWtPrice p=$accessory.price}{else}{displayWtPrice p=$accessory.price_tax_exc}
                                                    {/if}
                                            </h1>
                                            <div class="many_product" style="display:none">
                                                <!--Счетчик для количества товаров-->
                                                <form id="buy_block"{if $PS_CATALOG_MODE && !isset($groups) && $product->
                                                    quantity > 0} class="hidden"{/if} action="{$link->getPageLink('cart')|escape:'html':'UTF-8'}" method="post">
                                                    <!-- hidden datas -->
                                                    <p class="hidden">
                                                        <input type="hidden" name="token" value="{$static_token}" />
                                                        <input type="hidden" name="id_product" value="{$product->
                                                        id|intval}" id="product_page_product_id" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
                                                    </p>
                                                    <div class="box-info-product">
                                                        <div class="product_attributes">
                                                            <!-- quantity wanted -->
                                                            {if !$PS_CATALOG_MODE}
                                                                <p id="quantity_wanted_p"{if (!$allow_oosp && $product->
                                                                    quantity
                                                                    <= 0) || !$product->
                                                                        available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
                                                                        <div class="many_product">
                                                                            <a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down">
                                                                                <i class="fa fa-angle-left"></i>
                                                                            </a>
                                                                            <input type="text" name="qty" id="quantity_wanted" class="text" value="{if isset($quantityBackup)}{$quantityBackup|intval}{else}{if $product->
                                                                            minimal_quantity > 1}{$product->minimal_quantity}{else}1{/if}{/if}" />
                                                                            <a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up">
                                                                                <i class="fa fa-angle-right"></i>
                                                                            </a>
                                                                        </div>
                                                                </p>
                                                            {/if}
                                                            <!-- minimal quantity wanted -->
                                                            <p id="minimal_quantity_wanted_p"{if $product->
                                                                    minimal_quantity
                                                                    <= 1 || !$product->
                                                                        available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
                                                                    {l s='This product is not sold individually. You must select at least'} <b id="minimal_quantity_label">{$product->minimal_quantity}</b>
                                                                        {l s='quantity for this product.'}
                                                            </p>
                                                            {if isset($groups)}
                                                                        <!-- attributes -->
                                                                        <div id="attributes">
                                                                            <div class="clearfix"></div>
                                                                            {foreach from=$groups key=id_attribute_group item=group}
                                                                                {if $group.attributes|@count}
                                                                                    <fieldset class="attribute_fieldset">
                                                                                        <label class="attribute_label" {if $group.group_type != 'color' && $group.group_type != 'radio'}for="group_{$id_attribute_group|intval}"{/if}>{$group.name|escape:'html':'UTF-8'}&nbsp;
                                                                                        </label>
                                                                                        {assign var="groupName" value="group_$id_attribute_group"}
                                                                                        <div class="attribute_list">
                                                                                            {if ($group.group_type == 'select')}
                                                                                            <select name="{$groupName}" id="group_{$id_attribute_group|intval}" class="form-control attribute_select no-print">
                                                                                                {foreach from=$group.attributes key=id_attribute item=group_attribute}
                                                                                                    <option value="{$id_attribute|intval}"{if (isset($smarty.get.$groupName) && $smarty.get.$groupName|intval == $id_attribute) || $group.default == $id_attribute} selected="selected"{/if} title="{$group_attribute|escape:'html':'UTF-8'}">{$group_attribute|escape:'html':'UTF-8'}
                                                                                                    </option>
                                                                                                {/foreach}
                                                                                            </select>
                                                                                            {elseif ($group.group_type == 'color')}
                                                                                            <ul id="color_to_pick_list" class="clearfix">
                                                                                                {assign var="default_colorpicker" value=""}
                                                                                                {foreach from=$group.attributes key=id_attribute item=group_attribute}
                                                                                                    {assign var='img_color_exists' value=file_exists($col_img_dir|cat:$id_attribute|cat:'.jpg')}
                                                                                                    <li{if $group.default == $id_attribute} class="selected"{/if}>
                                                                                                        <a href="{$link->
                                                                                                            getProductLink($product)|escape:'html':'UTF-8'}" id="color_{$id_attribute|intval}" name="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" class="color_pick{if ($group.default == $id_attribute)} selected{/if}"{if !$img_color_exists && isset($colors.$id_attribute.value) && $colors.$id_attribute.value} style="background:{$colors.$id_attribute.value|escape:'html':'UTF-8'};"{/if} title="{$colors.$id_attribute.name|escape:'html':'UTF-8'}">
                                                                                                                            {if $img_color_exists}
                                                                                                            <img src="{$img_col_dir}{$id_attribute|intval}.jpg" alt="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" title="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" width="20" height="20" />
                                                                                                            {/if}
                                                                                                        </a>
                                                                                                    </li>
                                                                                                    {if ($group.default == $id_attribute)}
                                                                                                                        {$default_colorpicker = $id_attribute}
                                                                                                    {/if}
                                                                                                {/foreach}
                                                                                            </ul>
                                                                                            <input type="hidden" class="color_pick_hidden" name="{$groupName|escape:'html':'UTF-8'}" value="{$default_colorpicker|intval}" />
                                                                                            {elseif ($group.group_type == 'radio')}
                                                                                            <ul>
                                                                                                {foreach from=$group.attributes key=id_attribute item=group_attribute}
                                                                                                    <li>
                                                                                                        <input type="radio" class="attribute_radio" name="{$groupName|escape:'html':'UTF-8'}" value="{$id_attribute}" {if ($group.default == $id_attribute)} checked="checked"{/if} />
                                                                                                        <span>{$group_attribute|escape:'html':'UTF-8'}</span>
                                                                                                    </li>
                                                                                                {/foreach}
                                                                                            </ul>
                                                                                            {/if}
                                                                                        </div>
                                                                                        <!-- end attribute_list --> 
                                                                                    </fieldset>
                                                                                {/if}
                                                                            {/foreach}
                                                                        </div>
                                                                        <!-- end attributes -->
                                                            {/if}
                                                        </div>
                                                        <!-- end product_attributes --> 
                                                    </div>
                                                    <!-- end box-info-product --> 
                                                </form>
                                            </div>
                                            {if !$PS_CATALOG_MODE && ($accessory.allow_oosp || $accessory.quantity > 0)}
                                                        <button class="buy">
                                                            <a class="button ajax_add_to_cart_button btn btn-default" href="{$link->
                                                                getPageLink('cart', true, NULL, "qty=1&amp;id_product={$accessory.id_product|intval}&amp;token={$static_token}&amp;add")|escape:'html':'UTF-8'}" data-id-product="{$accessory.id_product|intval}" title="{l s='Добавить в корзину'}">
                                                            </a>
                                                        </button>
                                            {/if}
                                        </div>
                                    </div>
                                </div>
                            {/if}
                        {/foreach}
        </div>
    {/if}
    <div id="describe_of_product">
        <div itemscope itemtype="http://schema.org/Product">
            <div class="first_block clearfix">
                {if !$content_only}
                    <div class="container">
                        <div class="top-hr"></div>
                    </div>
                {/if}
                {if isset($adminActionDisplay) && $adminActionDisplay}
                    <div id="admin-action">
                        <p>
                            {l s='This product is not visible to your customers.'}
                            <input type="hidden" id="admin-action-product-id" value="{$product->
                            id}" />
                            <input type="submit" value="{l s='Publish'}" name="publish_button" class="exclusive" />
                            <input type="submit" value="{l s='Back'}" name="lnk_view" class="exclusive" />
                        </p>
                        <p id="admin-action-result"></p>
                    </div>
                {/if}
                {if isset($confirmation) && $confirmation}
                    <p class="confirmation">{$confirmation}</p>
                {/if}
                <!-- left infos-->
                {if isset($adminActionDisplay) && $adminActionDisplay}
                    <div id="admin-action">
                        <p>
                            {l s='This product is not visible to your customers.'}
                            <input type="hidden" id="admin-action-product-id" value="{$product->
                            id}" />
                            <input type="submit" value="{l s='Publish'}" name="publish_button" class="exclusive" />
                            <input type="submit" value="{l s='Back'}" name="lnk_view" class="exclusive" />
                        </p>
                        <p id="admin-action-result"></p>
                    </div>
                {/if}
                {if isset($confirmation) && $confirmation}
                    <p class="confirmation">{$confirmation}</p>
                {/if}
                <!-- left infos-->
                <div class="pb-left-column col-xs-12 col-sm-4 col-md-5">
                    <!-- product img-->
                    <div id="image-block" class="clearfix">
                        {if $product->new}
                            <span class="new-box">
                                <span class="new-label">{l s='New'}</span>
                            </span>
                        {/if}
                        {if $product->on_sale}
                            <span class="sale-box no-print">
                                <span class="sale-label"></span>
                            </span>
                        {elseif $product->specificPrice && $product->specificPrice.reduction && $productPriceWithoutReduction > $productPrice}
                            <span class="discount">{l s='Reduced price!'}</span>
                        {/if}
                        {if $have_image}
                        <span id="view_full_size">
                            {if $jqZoomEnabled && $have_image && !$content_only}
                            <a class="jqzoom" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->
                                name|escape:'html':'UTF-8'}{/if}" rel="gal1" href="{$link->getImageLink($product->link_rewrite, $cover.id_image, 'thickbox_default')|escape:'html':'UTF-8'}" itemprop="url">
                                <img itemprop="image" src="{$link->
                                getImageLink($product->link_rewrite, $cover.id_image, 'large_default')|escape:'html':'UTF-8'}" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" alt="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}"/>
                            </a>
                            {else}
                            <img id="bigpic" itemprop="image" src="{$link->
                            getImageLink($product->link_rewrite, $cover.id_image, 'large_default')|escape:'html':'UTF-8'}" title="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" alt="{if !empty($cover.legend)}{$cover.legend|escape:'html':'UTF-8'}{else}{$product->name|escape:'html':'UTF-8'}{/if}" width="{$largeSize.width}" height="{$largeSize.height}"/>
                                {if !$content_only}<!--<span class="span_link no-print">{l s='View larger'}</span>
                            -->
                                {/if}
                            {/if}
                        </span>
                        {else}
                        <span id="view_full_size">
                            <img itemprop="image" src="{$img_prod_dir}{$lang_iso}-default-large_default.jpg" id="bigpic" alt="" title="{$product->
                            name|escape:'html':'UTF-8'}" width="{$largeSize.width}" height="{$largeSize.height}"/>
                            {if !$content_only}
                                <!--<span class="span_link">{l s='View larger'}</span>
                            -->
                            {/if}
                        </span>
                        {/if}
                    </div>
                    <!-- end image-block -->
                    {if isset($images) && count($images) > 0}
                    <!-- thumbnails -->
                    <div id="views_block" class="clearfix {if isset($images) && count($images) < 2}hidden{/if}">
                        {if isset($images) && count($images) > 2}
                            <span class="view_scroll_spacer">
                                <a id="view_scroll_left" class="" title="{l s='Other views'}" href="javascript:{ldelim}{rdelim}">{l s='Previous'}</a>
                            </span>
                        {/if}
                        <div id="thumbs_list">
                            <ul id="thumbs_list_frame">
                                {if isset($images)}
                                    {foreach from=$images item=image name=thumbnails}
                                        {assign var=imageIds value="`$product->id`-`$image.id_image`"}
                                        {if !empty($image.legend)}
                                            {assign var=imageTitle value=$image.legend|escape:'html':'UTF-8'}
                                        {else}
                                            {assign var=imageTitle value=$product->name|escape:'html':'UTF-8'}
                                        {/if}
                                        <li id="thumbnail_{$image.id_image}"{if $smarty.foreach.thumbnails.last} class="last"{/if}>
                                            <a{if $jqZoomEnabled && $have_image && !$content_only} href="javascript:void(0);" rel="{literal}{{/literal}gallery: 'gal1', smallimage: '{$link->
                                                getImageLink($product->link_rewrite, $imageIds, 'large_default')|escape:'html':'UTF-8'}',largeimage: '{$link->getImageLink($product->link_rewrite, $imageIds, 'thickbox_default')|escape:'html':'UTF-8'}'{literal}}{/literal}"{else} href="{$link->getImageLink($product->link_rewrite, $imageIds, 'thickbox_default')|escape:'html':'UTF-8'}"  data-fancybox-group="other-views" class="fancybox{if $image.id_image == $cover.id_image} shown{/if}"{/if} title="{$imageTitle}">
                                                <img class="img-responsive" id="thumb_{$image.id_image}" src="{$link->
                                                getImageLink($product->link_rewrite, $imageIds, 'cart_default')|escape:'html':'UTF-8'}" alt="{$imageTitle}" title="{$imageTitle}" height="{$cartSize.height}" width="{$cartSize.width}" itemprop="image" />
                                            </a>
                                        </li>
                                    {/foreach}
                                {/if}
                            </ul>
                        </div>
                        <!-- end thumbs_list -->
                        {if isset($images) && count($images) > 2}
                        <a id="view_scroll_right" title="{l s='Other views'}" href="javascript:{ldelim}{rdelim}">{l s='Next'}</a>
                        {/if}
                    </div>
                    <!-- end views-block -->
                    <!-- end thumbnails -->
                    {/if}
                    {if isset($images) && count($images) > 1}
                        <p class="resetimg clear no-print">
                            <span id="wrapResetImages" style="display: none;">
                                <a href="{$link->
                                    getProductLink($product)|escape:'html':'UTF-8'}" name="resetImages"> <i class="icon-repeat"></i>
                                    {l s='Display all pictures'}
                                </a>
                            </span>
                        </p>
                    {/if}
                </div>
                <!-- end pb-left-column -->
                <!-- end left infos-->
                <div class="one_block">
                    <h1 class="price_newproduct">{convertPrice price=$productPrice}</h1>
                    <div class="many_product">
                        <form id="buy_block"{if $PS_CATALOG_MODE && !isset($groups) && $product->
                            quantity > 0} class="hidden"{/if} action="{$link->getPageLink('cart')|escape:'html':'UTF-8'}" method="post">
                            <!-- hidden datas -->
                            <p class="hidden">
                                <input type="hidden" name="token" value="{$static_token}" />
                                <input type="hidden" name="id_product" value="{$product->
                                id|intval}" id="product_page_product_id" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="id_product_attribute" id="idCombination" value="" />
                            </p>
                            <div class="box-info-product">
                                <div class="product_attributes">
                                    <!-- quantity wanted -->
                                    {if !$PS_CATALOG_MODE}
                                        <p id="quantity_wanted_p"{if (!$allow_oosp && $product->quantity <= 0) || !$product->
                                                available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
                                            <div class="many_product">
                                                    <a href="#" data-field-qty="qty" class="btn btn-default button-minus product_quantity_down"> <i class="fa fa-angle-left"></i>
                                                    </a>
                                                    <input type="text" name="qty" id="quantity_wanted" class="text" value="{if isset($quantityBackup)}{$quantityBackup|intval}{else}{if $product->
                                                    minimal_quantity > 1}{$product->minimal_quantity}{else}1{/if}{/if}" />
                                                    <a href="#" data-field-qty="qty" class="btn btn-default button-plus product_quantity_up">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                            </div>
                                        </p>
                                    {/if}
                                        <!-- minimal quantity wanted -->
                                    <p id="minimal_quantity_wanted_p"{if $product->minimal_quantity <= 1 || !$product->
                                                available_for_order || $PS_CATALOG_MODE} style="display: none;"{/if}>
                                        {l s='This product is not sold individually. You must select at least'}
                                        <b id="minimal_quantity_label">{$product->minimal_quantity}</b>
                                        {l s='quantity for this product.'}
                                    </p>
                                    {if isset($groups)}
                                        <!-- attributes -->
                                        <div id="attributes">
                                                <div class="clearfix"></div>
                                                {foreach from=$groups key=id_attribute_group item=group}
                                                    {if $group.attributes|@count}
                                                    <fieldset class="attribute_fieldset">
                                                        <label class="attribute_label" {if $group.group_type != 'color' && $group.group_type != 'radio'}for="group_{$id_attribute_group|intval}"{/if}>{$group.name|escape:'html':'UTF-8'}&nbsp;</label>
                                                            {assign var="groupName" value="group_$id_attribute_group"}
                                                        <div class="attribute_list">
                                                                {if ($group.group_type == 'select')}
                                                                <select name="{$groupName}" id="group_{$id_attribute_group|intval}" class="form-control attribute_select no-print">
                                                                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                                                                    <option value="{$id_attribute|intval}"{if (isset($smarty.get.$groupName) && $smarty.get.$groupName|intval == $id_attribute) || $group.default == $id_attribute} selected="selected"{/if} title="{$group_attribute|escape:'html':'UTF-8'}">{$group_attribute|escape:'html':'UTF-8'}</option>
                                                                    {/foreach}
                                                                </select>
                                                                {elseif ($group.group_type == 'color')}
                                                                <ul id="color_to_pick_list" class="clearfix">
                                                                    {assign var="default_colorpicker" value=""}
                                                                        {foreach from=$group.attributes key=id_attribute item=group_attribute}
                                                                            {assign var='img_color_exists' value=file_exists($col_img_dir|cat:$id_attribute|cat:'.jpg')}
                                                                    <li{if $group.default == $id_attribute} class="selected"{/if}>
                                                                        <a href="{$link->
                                                                            getProductLink($product)|escape:'html':'UTF-8'}" id="color_{$id_attribute|intval}" name="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" class="color_pick{if ($group.default == $id_attribute)} selected{/if}"{if !$img_color_exists && isset($colors.$id_attribute.value) && $colors.$id_attribute.value} style="background:{$colors.$id_attribute.value|escape:'html':'UTF-8'};"{/if} title="{$colors.$id_attribute.name|escape:'html':'UTF-8'}">
                                                                                    {if $img_color_exists}
                                                                            <img src="{$img_col_dir}{$id_attribute|intval}.jpg" alt="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" title="{$colors.$id_attribute.name|escape:'html':'UTF-8'}" width="20" height="20" />
                                                                            {/if}
                                                                        </a>
                                                                    </li>
                                                                    {if ($group.default == $id_attribute)}
                                                                                {$default_colorpicker = $id_attribute}
                                                                            {/if}
                                                                        {/foreach}
                                                                </ul>
                                                                <input type="hidden" class="color_pick_hidden" name="{$groupName|escape:'html':'UTF-8'}" value="{$default_colorpicker|intval}" />
                                                                {elseif ($group.group_type == 'radio')}
                                                                <ul>
                                                                    {foreach from=$group.attributes key=id_attribute item=group_attribute}
                                                                    <li>
                                                                        <input type="radio" class="attribute_radio" name="{$groupName|escape:'html':'UTF-8'}" value="{$id_attribute}" {if ($group.default == $id_attribute)} checked="checked"{/if} />
                                                                        <span>{$group_attribute|escape:'html':'UTF-8'}</span>
                                                                    </li>
                                                                    {/foreach}
                                                                </ul>
                                                                {/if}
                                                        </div>
                                                        <!-- end attribute_list --> </fieldset>
                                                    {/if}
                                                {/foreach}
                                        </div>
                                        <!-- end attributes -->
                                    {/if}
                                </div>
                                <!-- end product_attributes -->
                                <div class="box-cart-bottom">
                                            <div{if (!$allow_oosp && $product->quantity <= 0) || !$product->
                                                    available_for_order || (isset($restricted_country_mode) && $restricted_country_mode) || $PS_CATALOG_MODE} class="unvisible"{/if}>
                                                    <p id="add_to_cart" class="buttons_bottom_block no-print">
                                                        <button type="submit" name="Submit" class="buy left">
                                                            <span>
                                                                {if $content_only && (isset($product->customization_required) && $product->customization_required)}{l s='Customize'}{else}{/if}
                                                            </span>
                                                        </button>
                                                    </p>
                                            </div>
                                                {if isset($HOOK_PRODUCT_ACTIONS) && $HOOK_PRODUCT_ACTIONS}{$HOOK_PRODUCT_ACTIONS}{/if} <strong></strong>
                                </div>
                                <!-- end box-cart-bottom --> 
                            </div>
                            <!-- end box-info-product -->
                        </form>
                    </div>
                </div>
                <div id="oosHook"{if $product->quantity > 0} style="display: none;"{/if}>
                        {$HOOK_PRODUCT_OOS}
                </div>

                <table>
                        <tr>
                            <td class="grey">Производитель:</td>
                            <td>{$product_manufacturer->name|escape:'html':'UTF-8'}</td>
                            <!--Змінну производителя--> 
                        </tr>
                        <tr>
                            <td class="grey">Код товара:</td>
                            <td>
                                {if !isset($groups)}{$product->reference|escape:'html':'UTF-8'}{/if}
                            </td>
                        </tr>
                        <tr>
                            <td class="grey">Статус:</td>
                            <td>
                                {if ($product->quantity > 0)}
                                <span>В наличии</span>
                                {else}
                                <span>Нет в наличии</span>
                                {/if}
                            </td>
                        </tr>
                </table>
            </div>
        </div>
        <!-- end primary_block -->
        {if !$content_only}
            {if (isset($quantity_discounts) && count($quantity_discounts) > 0)}
                    <!-- quantity discount -->
                    <section class="page-product-box">
                        <h3 class="page-product-heading">{l s='Volume discounts'}</h3>
                        <div id="quantityDiscount">
                            <table class="std table-product-discounts">
                                <thead>
                                    <tr>
                                        <th>{l s='Quantity'}</th>
                                        <th>
                                            {if $display_discount_price}{l s='Price'}{else}{l s='Discount'}{/if}
                                        </th>
                                        <th>{l s='You Save'}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$quantity_discounts item='quantity_discount' name='quantity_discounts'}
                                        <tr id="quantityDiscount_{$quantity_discount.id_product_attribute}" class="quantityDiscount_{$quantity_discount.id_product_attribute}" data-discount-type="{$quantity_discount.reduction_type}" data-discount="{$quantity_discount.real_value|floatval}" data-discount-quantity="{$quantity_discount.quantity|intval}">
                                            <td>{$quantity_discount.quantity|intval}</td>
                                            <td>
                                                {if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
                                                    {if $display_discount_price}
                                                        {convertPrice price=$productPrice-$quantity_discount.real_value|floatval}
                                                    {else}
                                                        {convertPrice price=$quantity_discount.real_value|floatval}
                                                    {/if}
                                                {else}
                                                    {if $display_discount_price}
                                                        {convertPrice price = $productPrice-($productPrice*$quantity_discount.reduction)|floatval}
                                                    {else}
                                                        {$quantity_discount.real_value|floatval}%
                                                    {/if}
                                                {/if}
                                            </td>
                                            <td>
                                                <span>{l s='Up to'}</span>
                                                {if $quantity_discount.price >= 0 || $quantity_discount.reduction_type == 'amount'}
                                                    {$discountPrice=$productPrice-$quantity_discount.real_value|floatval}
                                                {else}
                                                    {$discountPrice=$productPrice-($productPrice*$quantity_discount.reduction)|floatval}
                                                {/if}
                                                {$discountPrice=$discountPrice*$quantity_discount.quantity}
                                                {$qtyProductPrice = $productPrice*$quantity_discount.quantity}
                                                {convertPrice price=$qtyProductPrice-$discountPrice}
                                            </td>
                                        </tr>
                                    {/foreach}
                                </tbody>
                            </table>
                        </div>
                    </section>
            {/if}
            {if isset($features) && $features}
                    <!-- Data sheet  вивід характеристик-->
                    <div class="block_character">
                        <h2>{l s='Характеристики'}</h2>
                        <table class="table-data-sheet">
                            {foreach from=$features item=feature}
                                <tr class="{cycle values="odd,even"}">
                                    {if isset($feature.value)}
                                    <td>{$feature.name|escape:'html':'UTF-8'}</td>
                                    <td class="ots">{$feature.value|escape:'html':'UTF-8'}</td>
                                    {/if}
                                </tr>
                            {/foreach}
                        </table>
                    </div>
                    <!--end Data sheet вивід характеристик-->
            {/if}
            <!--вставка видеообзора-->
            <section class="page-product-box" id="x-videoBox" style="display: none;">
                        <h3 class="page-product-heading">{l s='Видеообзоры'}</h3>
                        <div id="x-prodVideo" class="rte_"></div>
            </section>
            <!--end вставка видеообзора-->
            {if $product->description}
                    <!-- More info -->
                    <section class="page-product-box" hidden>
                        <h3 class="page-product-heading" hidden>{l s='Описание'}</h3>
            {/if}
            {if isset($product) && $product->description}
                <!-- full description -->
                <div  class="rte_ hidden">{$product->description}</div>
                </section>
                 <!--end  More info -->
            {/if}
        {/if}
                
                <!-- itemscope product wrapper -->
        {strip}
            {if isset($smarty.get.ad) && $smarty.get.ad}
                {addJsDefL name=ad}{$base_dir|cat:$smarty.get.ad|escape:'html':'UTF-8'}{/addJsDefL}
            {/if}
            {if isset($smarty.get.adtoken) && $smarty.get.adtoken}
                {addJsDefL name=adtoken}{$smarty.get.adtoken|escape:'html':'UTF-8'}{/addJsDefL}
            {/if}
            {addJsDef allowBuyWhenOutOfStock=$allow_oosp|boolval}
            {addJsDef availableNowValue=$product->available_now|escape:'quotes':'UTF-8'}
            {addJsDef availableLaterValue=$product->available_later|escape:'quotes':'UTF-8'}
            {addJsDef attribute_anchor_separator=$attribute_anchor_separator|escape:'quotes':'UTF-8'}
            {addJsDef attributesCombinations=$attributesCombinations}
            {addJsDef currencySign=$currencySign|html_entity_decode:2:"UTF-8"}
            {addJsDef currencyRate=$currencyRate|floatval}
            {addJsDef currencyFormat=$currencyFormat|intval}
            {addJsDef currencyBlank=$currencyBlank|intval}
            {addJsDef currentDate=$smarty.now|date_format:'%Y-%m-%d %H:%M:%S'}
            {if isset($combinations) && $combinations}
                {addJsDef combinations=$combinations}
                {addJsDef combinationsFromController=$combinations}
                {addJsDef displayDiscountPrice=$display_discount_price}
                {addJsDefL name='upToTxt'}{l s='Up to' js=1}{/addJsDefL}
            {/if}
            {if isset($combinationImages) && $combinationImages}
                {addJsDef combinationImages=$combinationImages}
            {/if}
            {addJsDef customizationFields=$customizationFields}
            {addJsDef default_eco_tax=$product->ecotax|floatval}
            {addJsDef displayPrice=$priceDisplay|intval}
            {addJsDef ecotaxTax_rate=$ecotaxTax_rate|floatval}
            {addJsDef group_reduction=$group_reduction}
            {if isset($cover.id_image_only)}
                {addJsDef idDefaultImage=$cover.id_image_only|intval}
            {else}
                {addJsDef idDefaultImage=0}
            {/if}
            {addJsDef img_ps_dir=$img_ps_dir}
            {addJsDef img_prod_dir=$img_prod_dir}
            {addJsDef id_product=$product->id|intval}
            {addJsDef jqZoomEnabled=$jqZoomEnabled|boolval}
            {addJsDef maxQuantityToAllowDisplayOfLastQuantityMessage=$last_qties|intval}
            {addJsDef minimalQuantity=$product->minimal_quantity|intval}
            {addJsDef noTaxForThisProduct=$no_tax|boolval}
            {addJsDef customerGroupWithoutTax=$customer_group_without_tax|boolval}
            {addJsDef oosHookJsCodeFunctions=Array()}
            {addJsDef productHasAttributes=isset($groups)|boolval}
            {addJsDef productPriceTaxExcluded=($product->getPriceWithoutReduct(true)|default:'null' - $product->ecotax)|floatval}
            {addJsDef productBasePriceTaxExcluded=($product->base_price - $product->ecotax)|floatval}
            {addJsDef productBasePriceTaxExcl=($product->base_price|floatval)}
            {addJsDef productReference=$product->reference|escape:'html':'UTF-8'}
            {addJsDef productAvailableForOrder=$product->available_for_order|boolval}
            {addJsDef productPriceWithoutReduction=$productPriceWithoutReduction|floatval}
            {addJsDef productPrice=$productPrice|floatval}
            {addJsDef productUnitPriceRatio=$product->unit_price_ratio|floatval}
            {addJsDef productShowPrice=(!$PS_CATALOG_MODE && $product->show_price)|boolval}
            {addJsDef PS_CATALOG_MODE=$PS_CATALOG_MODE}
            {if $product->specificPrice && $product->specificPrice|@count}
                {addJsDef product_specific_price=$product->specificPrice}
            {else}
                {addJsDef product_specific_price=array()}
            {/if}
            {if $display_qties == 1 && $product->quantity}
                {addJsDef quantityAvailable=$product->quantity}
            {else}
                {addJsDef quantityAvailable=0}
            {/if}
            {addJsDef quantitiesDisplayAllowed=$display_qties|boolval}
            {if $product->specificPrice && $product->specificPrice.reduction && $product->specificPrice.reduction_type == 'percentage'}
                {addJsDef reduction_percent=$product->specificPrice.reduction*100|floatval}
            {else}
                {addJsDef reduction_percent=0}
            {/if}
            {if $product->specificPrice && $product->specificPrice.reduction && $product->specificPrice.reduction_type == 'amount'}
                {addJsDef reduction_price=$product->specificPrice.reduction|floatval}
            {else}
                {addJsDef reduction_price=0}
            {/if}
            {if $product->specificPrice && $product->specificPrice.price}
                {addJsDef specific_price=$product->specificPrice.price|floatval}
            {else}
                {addJsDef specific_price=0}
            {/if}
            {addJsDef specific_currency=($product->specificPrice && $product->specificPrice.id_currency)|boolval} {* TODO: remove if always false *}
            {addJsDef stock_management=$stock_management|intval}
            {addJsDef taxRate=$tax_rate|floatval}
            {addJsDefL name=doesntExist}{l s='This combination does not exist for this product. Please select another combination.' js=1}{/addJsDefL}
            {addJsDefL name=doesntExistNoMore}{l s='This product is no longer in stock' js=1}{/addJsDefL}
            {addJsDefL name=doesntExistNoMoreBut}{l s='with those attributes but is available with others.' js=1}{/addJsDefL}
            {addJsDefL name=fieldRequired}{l s='Please fill in all the required fields before saving your customization.' js=1}{/addJsDefL}
            {addJsDefL name=uploading_in_progress}{l s='Uploading in progress, please be patient.' js=1}{/addJsDefL}
            {addJsDefL name='product_fileDefaultHtml'}{l s='No file selected' js=1}{/addJsDefL}
            {addJsDefL name='product_fileButtonHtml'}{l s='Choose File' js=1}{/addJsDefL}
        {/strip}
    {/if}
    </div>
</div>