{*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @version  Release: $Revision$
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<!-- MODULE MailAlerts -->
<!--<script type="text/javascript">
    $(document).ready(function(){
        $('.spoiler-title').click(function(){
            $(this).parent().children('.spoiler-body').slideToggle();
            return false;
        });
    });
</script>-->
{literal}
    <script type="text/javascript">
        $('.popup .close_window, .overlay').click(function (){
            $('.popup, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
        });
        $('button.spoiler-title').click(function (e){
            $('.popup, .overlay').css({'opacity': 1, 'visibility': 'visible'});
            e.preventDefault();
        });
    </script>
{/literal}


<div class="not_available_block">
        <h2>нет вналичии</h2>

        <button class="spoiler-title">Сообщить<br> когда появится</button>


        <!--<div class="spoiler-body">
        <div class="text_mailalert"> Введите свой адрес эл.почты и мы вас оповестим, когда товар появится в наличии</div>
        <p class="form-group">
            <input type="text" id="oos_customer_email" name="customer_email" size="20" value="{l s='your@email.com' mod='mailalerts'}" class="mailalerts_oos_email form-control" hidden />
        </p>
        <div class="saver"><a href="#" title="{l s='Сохранить' mod='mailalerts'}" id="mailalert_link" rel="nofollow">{l s='Сохранить' mod='mailalerts'}</a></div>

        </div>-->

          <div class="overlay">

          </div>
                <div class="popup">
                    <div class="close_window"><i class="fa fa-times-circle fa-2x"></i></div>
                    <p>Введите свой адрес эл.почты и мы вас оповестим, когда товар появится в наличии</p>
                    <div class="put_email">Эл. почта</div>
                    <p class="form-group">
                        <input type="text" id="oos_customer_email" name="customer_email" size="20" value="{l s='your@email.com' mod='mailalerts'}" class="mailalerts_oos_email form-control" hidden />
                    </p>
                    <div class="saver">
                        <a href="#" title="{l s='Сохранить' mod='mailalerts'}" id="mailalert_link" rel="nofollow">{l s='Сохранить' mod='mailalerts'}</a>
                    </div>
                    <span id="oos_customer_email_result" style="display:none; display: block;"></span>
                </div>




</div>


{strip}
{addJsDef oosHookJsCodeFunctions=array('oosHookJsCodeMailAlert')}
{addJsDef mailalerts_url_check=$link->getModuleLink('mailalerts', 'actions', ['process' => 'check'])}
{addJsDef mailalerts_url_add=$link->getModuleLink('mailalerts', 'actions', ['process' => 'add'])}

{addJsDefL name='mailalerts_placeholder'}{l s='your@email.com' mod='mailalerts' js=1}{/addJsDefL}
{addJsDefL name='mailalerts_registered'}{l s='Request notification registered' mod='mailalerts' js=1}{/addJsDefL}
{addJsDefL name='mailalerts_already'}{l s='You already have an alert for this product' mod='mailalerts' js=1}{/addJsDefL}
{addJsDefL name='mailalerts_invalid'}{l s='Your e-mail address is invalid' mod='mailalerts' js=1}{/addJsDefL}
{/strip}
<!-- END : MODULE MailAlerts -->