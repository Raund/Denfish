<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang_iso}">


<head>
    <meta charset="utf-8" />
    <title>DenFish</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=0.7" />
    <link rel="icon" type="image/png" href="{$img_dir}denfish16x16.png" />
        <!-- Include CSS Files (in particular our global.css file -->
    <link rel="stylesheet" href="{$css_dir}fonts.css"  type="text/css"/>
    <link rel="stylesheet" href="{$css_dir}font-awesome.min.css"  type="text/css"/>
    <link rel="stylesheet" href="{$css_dir}media.css"  type="text/css"/>
 {foreach from=$css_files key=css_uri item=media}
    <link href="{$css_uri}" rel="stylesheet" type="text/css" media="{$media}" />
 {/foreach}

 <!-- End Include CSS Files -->
 {if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
	{$js_def}
	{foreach from=$js_files item=js_uri}
	<script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
	{/foreach}

{/if}

    <script>
        var FancyboxI18nClose = 'Close';
        var FancyboxI18nNext = 'Next';
        var FancyboxI18nPrev = 'Previous';
        var added_to_wishlist = 'Добавлено в избранное.';
        var ajaxsearch = true;
        /*var baseDir = '/';
        var baseUri = '/';
        var blocksearch_type = 'top';
        var contentOnly = false;
        var displayList = false;
        var instantsearch = false;
        var max_item = 'You cannot add more than 3 product(s) to the product comparison';
        var min_item = 'Please select at least one product';
        var param_product_url = '#';
        var placeholder_blocknewsletter = 'Введите ваш e-mail';
        var priceDisplayMethod = 0;
        var priceDisplayPrecision = 2;
        var quickView = true;
        var removingLinkText = 'удалить товар из корзины';
        var request = 'http://prestaden.loc/ru/3-women';
        var roundMode = 2;
        var search_url = '{$base_dir}search';
        var static_token = 'c285297d019d2ea6e805d3d873441647';
        var token = '69dfce60675a0ca76506162b2b932547';*/
    </script>


 <!--Include the Hook Header.  This is the area where modules in the hook known as header are outputed -->

 {$HOOK_HEADER}
 <!-- End Include Hook Header -->
{literal}
    <!-- Start SiteHeart code -->
    <script>
        (function(){
            var widget_id = 816183;
            _shcp =[{widget_id : widget_id}];
            var lang =("ru")
                    .substr(0,2).toLowerCase();
            var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
            var hcc = document.createElement("script");
            hcc.type ="text/javascript";
            hcc.async =true;
            hcc.src =("https:"== document.location.protocol ?"https":"http")
                    +"://"+ url;
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hcc, s.nextSibling);
        })();
    </script>
    <!-- End SiteHeart code -->
{/literal}
</head>
 
<body>



<script>

$(function(){


    $('.catalog li').hover(function(){
        var $subMenu = $(this).find('.ob .sub_menu');
        if ($subMenu.index() != 0){
            $subMenu.css('top', '-85px');
        }
        $subMenu.fadeIn(100);
    }, function(){
        $(this).find('.ob .sub_menu').fadeOut(100);
    });

});

</script>

<script>
//<!--для зникнення каталогу-->
$(function(){
//для виводу на сторінці товару каталогу поверх всього
if($('#content_newproduct').length){
     $('#categories_block_left').addClass('cat_abs');
}
//для сторінок з темним хедером
if(!$('.catalog_vnutr1 li.catalog_product').length){
     $('#categories_block_left').slideDown(0);
}
//для галереї
else if($('#gallery').length){
      $('#categories_block_left').slideDown(0);
}
//для cms сторінок
else if($('#forcat').length){
      $('#categories_block_left').slideDown(0);
}
//для статей
else if($('#smartblogcat').length){
      $('#categories_block_left').slideDown(0);
}
else if($('#news').length){
      $('#categories_block_left').slideDown(0);
}

else{
    //$('.catalog_vnutr1 li.catalog_product').click(function(){
    //    $('#categories_block_left').slideDown(500);
   // });
    var closeTimeout;
    $('.catalog_vnutr1 li.catalog_product').hover(
        function() { 
            // Отображаем скрытый блок 
            clearTimeout(closeTimeout);

                $('#categories_block_left').fadeIn(0); // fadeIn - плавное появление
                $('#categories_block_left').addClass('absol');
                $(this).addClass('catalog_product_up');

            
            
        }); // end of toggle()

    $('#categories_block_left .block_content').hover(
        function() { 
            // Отображаем скрытый блок 
            clearTimeout(closeTimeout);

                $('#categories_block_left').fadeIn(0); // fadeIn - плавное появление
                $('#categories_block_left').addClass('absol');
                $(this).addClass('catalog_product_up');

            
            
        }); // end of toggle()

    $('.catalog_vnutr1 li.catalog_product').mouseleave(    
        function() { 
            closeTimeout = setTimeout(function(){
                $('#categories_block_left').fadeOut(0); 
                $('#categories_block_left').removeClass('absol');
                $('.catalog_vnutr1 li.catalog_product').removeClass('catalog_product_up');                      
            }, 600);   
        });

    $('#categories_block_left .block_content').mouseleave( 

        function() { 
            closeTimeout = setTimeout(function(){
                $('#categories_block_left').fadeOut(0); 
                $('#categories_block_left').removeClass('absol');
                $('.catalog_vnutr1 li.catalog_product').removeClass('catalog_product_up');                      
            }, 600);        
        });
    
    }
});

</script>






<script>

$(function(){

$('.adv li:first-child a').on('click', function(){
    $('.adv li img').addClass("raun_adv");
        setTimeout(function(){   
            $('.adv li img').removeClass('raun_adv')  
            }, 1500);

                /*//for firefox
                "-moz-animation-name":"rotatebox",
                "-moz-animation-duration":"2.0s",
                "-moz-animation-iteration-count":"1",
                "-moz-animation-fill-mode":"forwards",

                //for safari & chrome
                "-webkit-animation-name":"rotatebox",
                "-webkit-animation-duration":"2.0s",
                "-webkit-animation-iteration-count":"1",
                "-webkit-animation-fill-mode" : "forwards"
*/
           
})






//вирівняв підменю з Каталог товара на зеленому хедері
if(!$('#home_vnutr1').length){
    $('.catalog .sub_menu').css('top', '-145px');
    }
//вирівняв підменю з Каталог товара на темному хедері
if($('#home_vnutr1').length){
        $('.catalog .sub_menu').css('top', '-85px');
    }
//вирівняв підменю з Каталог товара на сторінці продукту
if($('#content_newproduct').length){
        $('.catalog .sub_menu').css('top', '-130px');  
    }
//вирівняв підменю з Каталог товара на сторінці продуктів
//по категоріям
if($('#content_vnutr1 .rozd').length){
        $('.catalog .sub_menu').css('top', '-130px');  
    }
//<!--для зникнення пошуку зліва-->
if(!$('#home_vnutr1').length){
     $('.search_form').slideDown(500);
    }
});

</script>

<script>
    //<!--скрипт підключення блоку fb-->
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<!--форма реєстрації-->
<div class="reg">
    <!--блок заповнення форми-->
    <div class="reg_info">
        <h1>Регистрация покупателя</h1>
        <form action="#" method="POST" id="form">
            <div id="form-fields-container">
                <ul>
                    <li>
                        <input type="text" name="name" id="name" placeholder="ФИО">
                        <span>Укажите Вашу фамилию и имя</span>
                    </li>
                    <li>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                        <span>Укажите e-mail, мы вышлем запрос подтверждения</span>
                    </li>
                    <li>
                        <input type="text" name="phone" id="phone" placeholder="Номер телефона">
                        <span>Укажите Ваш номер телефона</span>
                    </li>
                    <li>
                        <input type="password" name="pass" id="pass" placeholder="Пароль">
                        <span>Не менее 4 символов</span>
                    </li>
                    <li>
                        <input type="password" name="pass-repeat" id="pass-repeat" placeholder="Повторите пароль">
                        <span>Не менее 4 символов</span>
                    </li>
                </ul>
            </div>
            <span id="message">Нажимая кнопку "Зарегистрироваться",<br> Вы принимаете условия <a href="#">пользовательского соглашения</a></span>
            <input type="submit" id="submit" value="Зарегистрироваться">
        </form>
    </div>
    <!--/блок заповнення форми-->
    <!--блок інформації форми-->
    <div class="reg_descr">
        <h1 class="red">Преимущества регистрации</h1>
        <div class="block_descr">
            <ul>
                <li>История покупок</li>
                <li>Краткое описание преимущества.<br>Так далее и так далее</li>
                <li>Карта клиента</li>
                <li>Краткое описание преимущества.<br>Так далее и так далее</li>
                <li>Скидка клиента</li>
                <li>Краткое описание преимущества.<br>Так далее и так далее</li>
                <li>Возможность оставлять отзывы</li>
                <li>Краткое описание преимущества.<br>Так далее и так далее</li>
            </ul>
        </div>
    </div>
    <!--блок інформації форми-->
</div>
<!--end форма реєстрації-->
<!--форма входу-->
<div class="enter">
    <!--блок заповнення форми-->
    <div class="enter_info">
        <h1>Вход</h1>
        <form action="#" method="POST" id="form">
            <div id="form-fields-container">
                <ul>
                    <li>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                        <span>Укажите e-mail</span>
                    </li>
                    <li>
                        <input type="password" name="pass" id="pass" placeholder="Пароль">
                        <span>Укажите Ваш пароль</span>
                    </li>
                </ul>
            </div>
            <input type="submit" id="submit" value="Войти">
        </form>
    </div>
    <!--/блок заповнення форми-->
</div>
<!--end форма входу-->


<div class="order-form" id="x-order-form">
    <div class="x-change-type-box change-type-box">
        <a class="change x-change-type left active" data-type="with_reg" href="#"><i class="fa fa-check"></i> Покупка с регистрацией</a>
        <a class="change x-change-type right" data-type="without_reg" href="#"><i class="fa fa-check"></i> Покупка без регистрации</a>
    </div>
    <div class="reg_info us_info">
        <h1><i class="fa fa-user"></i> Ваши данные</h1>
        <form action="#" method="POST">
            <div id="form-fields-container">
                <ul>
                    <li class="logged">
                        <select name="template">
                        </select>
                        <span>Вы можете выбрать ранее созданный шаблон</span>
                    </li>
                    <li>
                        <input type="text" name="name" placeholder="ФИО">
                        <span>Укажите Вашу фамилию и имя</span>
                    </li>
                    <li class="without_reg">
                        <input type="email" name="email" placeholder="E-mail">
                        <span>Укажите e-mail, мы вышлем запрос подтверждения</span>
                    </li>
                    <li>
                        <input type="text" name="phone" placeholder="Номер телефона">
                        <span>Укажите Ваш номер телефона</span>
                    </li>
                    <li class="with_reg">
                        <input type="password" name="pass" placeholder="Пароль">
                        <span>Не менее 4 символов</span>
                    </li>
                    <li class="with_reg">
                        <input type="password" name="pass-repeat" placeholder="Повторите пароль">
                        <span>Не менее 4 символов</span>
                    </li>
                </ul>
            </div>

        </form>
    </div>

    <div class="reg_info dost_info">
        <form action="#" method="POST">
            <div>
                <ul>
                    <li class="subtitle">
                        <h1><i class="fa fa-truck"></i> Доставка</h1>
                        <p>Осуществляем доставку Новой Почтой</p>
                    </li>
                    <li>
                        <input type="text" name="city" placeholder="Населенный пункт">
                        <span>Укажите населенный пункт для доставки</span>
                    </li>
                    <li>
                        <input type="text" name="post_office" placeholder="Номер отделения Новой Почты">
                        <span>Укажите номер отделения Новой Почты</span>
                    </li>
                    <li class="subtitle">
                        <h1><i class="fa fa-credit-card"></i> Оплата</h1>
                        <p>Укажите предпочитаемый способ оплаты</p>
                    </li>
                    <li>
                        <select name="payment_method">
                            <option>Оплата при доставке наложенным платежом</option>
                            <option>Перевод средств на карту приват банка</option>
                        </select>
                        <span>При оплате на карту ПБ доставка дешевле</span>
                    </li>
                </ul>
            </div>
            <input type="submit" id="submit" value="Отправить">
        </form>
    </div>
</div>

     <div id="wrapper">
         {if (isset($header) && $header == 'dark') || ($page_name!='index' && $page_name !='order-opc' && $page_name !='manufacturer') }
             <!--Подключение темнего хедера-->
                <div id="header"><!--хедер-->
                     <div class="container clearfix">
                     <ul class="left_nav left">
                        <!-- <li>
                             <a href="{$base_dir}/4-about-us">О нас</a>
                         </li>
                         <li>
                             <a href="{$base_dir}manufacturers">Производители</a>
                         </li>-->
                         <li>
                             <a href="{$base_dir}/9-akcii-i-skidki">Акции и скидки</a>
                         </li>
                         <li>
                             <a href="{$base_dir}index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a>
                         </li>
                         <li>
                             <a href="{$base_dir}/11-kontakty">Контакты</a>
                         </li>
                     </ul>
                     <div class="social_top">
                         {hook h="displaySocialSharing"}
                     </div>
                     <div class="top_phone">{hook h="displayRightColumn"}</div>
                     </div>
                </div>
                <div id="home_vnutr1">
                    <div class="container clearfix">
                        <a class="logo" href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}"><img src="{$img_dir}/logo_black.jpg" alt=""></a>
                        <div class="lozung_vnutr1 clearfix">
                            <div class="str1_vnutr1">все что нужно</div>
                            <div class="str2_vnutr1">для рыболовного счастья</div>
                            <div class="str3_vnutr1">в одном месте!</div>
                        </div>
                        <ul class="cart_vnutr1 right">
                            <li class="cartimg_vnutr1">
                                {$HOOK_TOP}
                            </li>
                            <li class="price clerfix">
                                <span class=" price ajax_cart_quantity{if $cart_qties == 0} unvisible{/if}">{$cart_qties}</span><!--для відображення кількості товарів (в файлі blockcart вона hidden-->
                            </li>
                            <li>
                                <a href="{$base_dir}quick-order"> <button>Оформить заказ</button></a>
                            </li>
                        </ul>
                        <ul class="reg_vnutr1 right">
                            <li class="key_vnutr1">
                                <a href="#" class="x-show-register">Регистрация</a>
                            </li>
                            <li class="lock_vnutr1">
                                {hook h="displayNav"}
                            </li>
                        </ul>
                    </div>
                </div><!--/хедер-->
         {else}<!--Подключение светлого хедера-->
         <div id="header"><!--хедер светлый-->
           <div class="container clearfix">
             <ul class="left_nav left">
                <!-- <li>
                     <a href="{$base_dir}/4-about-us">О нас</a>
                 </li>
                 <li>
                     <a href="{$base_dir}manufacturers">Производители</a>
                 </li>-->
                 <li>
                     <a href="{$base_dir}/9-akcii-i-skidki">Акции и скидки</a>
                 </li>
                 <li>
                     <a href="{$base_dir}index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a>
                 </li>
                 <li>
                     <a href="{$base_dir}/11-kontakty">Контакты</a>
                 </li>
             </ul>
             <ul class="right_nav right">
                 <li class="key">
                     <a href="#" class="x-show-register">Регистрация</a>
                 </li>
                 <li class="lock">
                     {hook h="displayNav"}
                 </li>
                 <li class="cart">
                     {$HOOK_TOP}
                 <li class="price">
                     <span class=" price ajax_cart_quantity{if $cart_qties == 0} unvisible{/if}">{$cart_qties}</span><!--для відображення кількості товарів (в файлі blockcart вона hidden-->
                 </li>
             </ul>
         </div>
         <!--Include the Top Hook.
    This is the area where modules in the hook known as top are outputed -->

         <!-- End Include Top Hook -->
     </div>
<div id="home">
    <div class="container clearfix">
        <a href="{$base_dir}" title="{$shop_name|escape:'html':'UTF-8'}">
            <img class="logo" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
        </a>
        <div class="lozung clearfix">
            <div class="str1">все что нужно</div>
            <div class="str2">для рыболовного счастья</div>
            <div class="str3">в одном месте!</div>
        </div>
        <div class="social">
            {hook h="displaySocialSharing"}
        </div>
        <div class="catalog_name">Kаталог товаров</div>
        {hook h="displayRightColumn"}
       <!-- <div class="phone"><span>+3 8050</span> 548 11 59</div>-->
    </div>
</div><!--/хедер светлый-->
{/if}

            <!--Include the Left Hook.  This is the area where modules in the hook known as left are outputed -->
        <div class="container clearfix">
                    <div id="sidebar">
                    {if (isset($header) && $header == 'dark') || ($page_name =='manufacturer' && $page_name =='product') }
                    <ul class="catalog_vnutr1">
                        <li class="catalog_product">Каталог товаров</li>
                        <li class="back_to_product"><a href="{$smarty.server.HTTP_REFERER|escape:'html':'UTF-8'|secureReferrer}">Назад к Фильтрам</a></li>
                    </ul>
                    {/if}
                    {if ($page_name =='product') }
                    <!--<div id="disable_menu">-->
                    <ul class="catalog_vnutr1">
                        <li class="catalog_product" style="background-color:#c3043a">Каталог товаров</li>
                        <li class="back_to_product"><a href="{$smarty.server.HTTP_REFERER|escape:'html':'UTF-8'|secureReferrer}">Назад к Фильтрам</a></li>
                    </ul>
                    {/if}
                    {if ($page_name =='category') || ($page_name =='my-account') || ($page_name =='history') || ($page_name =='addresses') || ($page_name =='identity') || ($page_name =='module-blockwishlist-mywishlist') || ($page_name =='address') || ($page_name =='cms') || ($page_name =='module-azgallery-gallery') || ($page_name =='module-smartblog-category') || ($page_name =='module-smartblog-details') || ($page_name =='module-wnnews-news') || ($page_name =='search')}
                    <!--<div id="disable_menu">-->
                    <ul class="catalog_vnutr1">
                        <li class="catalog_product" style="background-color:#1E2121">Каталог товаров</li>
                    </ul>
                    {/if}
                    {if ($page_name =='quick-order') }
                    <!--<div id="disable_menu">-->
                    <ul class="catalog">
    <div id="categories_block_left" style="display:none" class="block">
    <!--<h2 class="title_block" hidden>
        {if isset($currentCategory)}
            {$currentCategory->name|escape}
        {else}
            {l s='Categories' mod='blockcategories'}
        {/if}
    </h2>-->

        <div class="block_content">
            <ul class="catalog {if $isDhtml}dhtml{/if}">
                {foreach from=$blockCategTree.children item=child name=blockCategTree}
                {if $smarty.foreach.blockCategTree.last}
                    {include file="$branche_tpl_path" node=$child last='true'}
                {else}
                    {include file="$branche_tpl_path" node=$child}
                {/if}
                {/foreach}
            </ul>
        </div>

</div>
    </ul>
                    {/if}
                <!--Подключение хука LeftColumn-->
                     {$HOOK_LEFT_COLUMN}
                    </div>


                 <!-- End Include left Hook -->

  <!-- End left column Div-->