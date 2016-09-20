<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 15:46:52
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:457257e12137f2b050-09132392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c064911e5d20da457b4c0dd8bb462659d27d285' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\header.tpl',
      1 => 1474375609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '457257e12137f2b050-09132392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e121381c1741_23665656',
  'variables' => 
  array (
    'lang_iso' => 0,
    'img_dir' => 0,
    'css_dir' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'media' => 0,
    'js_defer' => 0,
    'js_files' => 0,
    'js_def' => 0,
    'js_uri' => 0,
    'base_dir' => 0,
    'HOOK_HEADER' => 0,
    'header' => 0,
    'page_name' => 0,
    'shop_name' => 0,
    'HOOK_TOP' => 0,
    'cart_qties' => 0,
    'logo_url' => 0,
    'logo_image_width' => 0,
    'logo_image_height' => 0,
    'currentCategory' => 0,
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'HOOK_LEFT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e121381c1741_23665656')) {function content_57e121381c1741_23665656($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
">


<head>
    <meta charset="utf-8" />
    <title>DenFish</title>
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=0.7" />
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
denfish16x16.png" />
        <!-- Include CSS Files (in particular our global.css file -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
fonts.css"  type="text/css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
font-awesome.min.css"  type="text/css"/>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css_dir']->value;?>
media.css"  type="text/css"/>
 <?php  $_smarty_tpl->tpl_vars['media'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['media']->_loop = false;
 $_smarty_tpl->tpl_vars['css_uri'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['css_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['media']->key => $_smarty_tpl->tpl_vars['media']->value) {
$_smarty_tpl->tpl_vars['media']->_loop = true;
 $_smarty_tpl->tpl_vars['css_uri']->value = $_smarty_tpl->tpl_vars['media']->key;
?>
    <link href="<?php echo $_smarty_tpl->tpl_vars['css_uri']->value;?>
" rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value;?>
" />
 <?php } ?>

 <!-- End Include CSS Files -->
 <?php if (isset($_smarty_tpl->tpl_vars['js_defer']->value)&&!$_smarty_tpl->tpl_vars['js_defer']->value&&isset($_smarty_tpl->tpl_vars['js_files']->value)&&isset($_smarty_tpl->tpl_vars['js_def']->value)) {?>
	<?php echo $_smarty_tpl->tpl_vars['js_def']->value;?>

	<?php  $_smarty_tpl->tpl_vars['js_uri'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js_uri']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_files']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js_uri']->key => $_smarty_tpl->tpl_vars['js_uri']->value) {
$_smarty_tpl->tpl_vars['js_uri']->_loop = true;
?>
	<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js_uri']->value, ENT_QUOTES, 'UTF-8', true);?>
"></script>
	<?php } ?>

<?php }?>

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
        var search_url = '<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
search';
        var static_token = 'c285297d019d2ea6e805d3d873441647';
        var token = '69dfce60675a0ca76506162b2b932547';*/
    </script>


 <!--Include the Hook Header.  This is the area where modules in the hook known as header are outputed -->

 <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

 <!-- End Include Hook Header -->

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
         <?php if ((isset($_smarty_tpl->tpl_vars['header']->value)&&$_smarty_tpl->tpl_vars['header']->value=='dark')||($_smarty_tpl->tpl_vars['page_name']->value!='index'&&$_smarty_tpl->tpl_vars['page_name']->value!='order-opc'&&$_smarty_tpl->tpl_vars['page_name']->value!='manufacturer')) {?>
             <!--Подключение темнего хедера-->
                <div id="header"><!--хедер-->
                     <div class="container clearfix">
                     <ul class="left_nav left">
                        <!-- <li>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/4-about-us">О нас</a>
                         </li>
                         <li>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
manufacturers">Производители</a>
                         </li>-->
                         <li>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/9-akcii-i-skidki">Акции и скидки</a>
                         </li>
                         <li>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a>
                         </li>
                         <li>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/11-kontakty">Контакты</a>
                         </li>
                     </ul>
                     <div class="social_top">
                         <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySocialSharing"),$_smarty_tpl);?>

                     </div>
                     <div class="top_phone"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayRightColumn"),$_smarty_tpl);?>
</div>
                     </div>
                </div>
                <div id="home_vnutr1">
                    <div class="container clearfix">
                        <a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/logo_black.jpg" alt=""></a>
                        <div class="lozung_vnutr1 clearfix">
                            <div class="str1_vnutr1">все что нужно</div>
                            <div class="str2_vnutr1">для рыболовного счастья</div>
                            <div class="str3_vnutr1">в одном месте!</div>
                        </div>
                        <ul class="cart_vnutr1 right">
                            <li class="cartimg_vnutr1">
                                <?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

                            </li>
                            <li class="price clerfix">
                                <span class=" price ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> unvisible<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span><!--для відображення кількості товарів (в файлі blockcart вона hidden-->
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
quick-order"> <button>Оформить заказ</button></a>
                            </li>
                        </ul>
                        <ul class="reg_vnutr1 right">
                            <li class="key_vnutr1">
                                <a href="#" class="x-show-register">Регистрация</a>
                            </li>
                            <li class="lock_vnutr1">
                                <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

                            </li>
                        </ul>
                    </div>
                </div><!--/хедер-->
         <?php } else { ?><!--Подключение светлого хедера-->
         <div id="header"><!--хедер светлый-->
           <div class="container clearfix">
             <ul class="left_nav left">
                <!-- <li>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/4-about-us">О нас</a>
                 </li>
                 <li>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
manufacturers">Производители</a>
                 </li>-->
                 <li>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/9-akcii-i-skidki">Акции и скидки</a>
                 </li>
                 <li>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a>
                 </li>
                 <li>
                     <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/11-kontakty">Контакты</a>
                 </li>
             </ul>
             <ul class="right_nav right">
                 <li class="key">
                     <a href="#" class="x-show-register">Регистрация</a>
                 </li>
                 <li class="lock">
                     <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayNav"),$_smarty_tpl);?>

                 </li>
                 <li class="cart">
                     <?php echo $_smarty_tpl->tpl_vars['HOOK_TOP']->value;?>

                 <li class="price">
                     <span class=" price ajax_cart_quantity<?php if ($_smarty_tpl->tpl_vars['cart_qties']->value==0) {?> unvisible<?php }?>"><?php echo $_smarty_tpl->tpl_vars['cart_qties']->value;?>
</span><!--для відображення кількості товарів (в файлі blockcart вона hidden-->
                 </li>
             </ul>
         </div>
         <!--Include the Top Hook.
    This is the area where modules in the hook known as top are outputed -->

         <!-- End Include Top Hook -->
     </div>
<div id="home">
    <div class="container clearfix">
        <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
            <img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['logo_url']->value;?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop_name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['logo_image_width']->value)&&$_smarty_tpl->tpl_vars['logo_image_width']->value) {?> width="<?php echo $_smarty_tpl->tpl_vars['logo_image_width']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['logo_image_height']->value)&&$_smarty_tpl->tpl_vars['logo_image_height']->value) {?> height="<?php echo $_smarty_tpl->tpl_vars['logo_image_height']->value;?>
"<?php }?>/>
        </a>
        <div class="lozung clearfix">
            <div class="str1">все что нужно</div>
            <div class="str2">для рыболовного счастья</div>
            <div class="str3">в одном месте!</div>
        </div>
        <div class="social">
            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySocialSharing"),$_smarty_tpl);?>

        </div>
        <div class="catalog_name">Kаталог товаров</div>
        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayRightColumn"),$_smarty_tpl);?>

       <!-- <div class="phone"><span>+3 8050</span> 548 11 59</div>-->
    </div>
</div><!--/хедер светлый-->
<?php }?>

            <!--Include the Left Hook.  This is the area where modules in the hook known as left are outputed -->
        <div class="container clearfix">
                    <div id="sidebar">
                    <?php if ((isset($_smarty_tpl->tpl_vars['header']->value)&&$_smarty_tpl->tpl_vars['header']->value=='dark')||($_smarty_tpl->tpl_vars['page_name']->value=='manufacturer'&&$_smarty_tpl->tpl_vars['page_name']->value=='product')) {?>
                    <ul class="catalog_vnutr1">
                        <li class="catalog_product">Каталог товаров</li>
                        <li class="back_to_product"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true));?>
">Назад к Фильтрам</a></li>
                    </ul>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['page_name']->value=='product')) {?>
                    <!--<div id="disable_menu">-->
                    <ul class="catalog_vnutr1">
                        <li class="catalog_product" style="background-color:#c3043a">Каталог товаров</li>
                        <li class="back_to_product"><a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true));?>
">Назад к Фильтрам</a></li>
                    </ul>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['page_name']->value=='category')||($_smarty_tpl->tpl_vars['page_name']->value=='my-account')||($_smarty_tpl->tpl_vars['page_name']->value=='history')||($_smarty_tpl->tpl_vars['page_name']->value=='addresses')||($_smarty_tpl->tpl_vars['page_name']->value=='identity')||($_smarty_tpl->tpl_vars['page_name']->value=='module-blockwishlist-mywishlist')||($_smarty_tpl->tpl_vars['page_name']->value=='address')||($_smarty_tpl->tpl_vars['page_name']->value=='cms')||($_smarty_tpl->tpl_vars['page_name']->value=='module-azgallery-gallery')||($_smarty_tpl->tpl_vars['page_name']->value=='module-smartblog-category')||($_smarty_tpl->tpl_vars['page_name']->value=='module-smartblog-details')||($_smarty_tpl->tpl_vars['page_name']->value=='module-wnnews-news')||($_smarty_tpl->tpl_vars['page_name']->value=='search')) {?>
                    <!--<div id="disable_menu">-->
                    <ul class="catalog_vnutr1">
                        <li class="catalog_product" style="background-color:#1E2121">Каталог товаров</li>
                    </ul>
                    <?php }?>
                    <?php if (($_smarty_tpl->tpl_vars['page_name']->value=='quick-order')) {?>
                    <!--<div id="disable_menu">-->
                    <ul class="catalog">
    <div id="categories_block_left" style="display:none" class="block">
    <!--<h2 class="title_block" hidden>
        <?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {?>
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentCategory']->value->name, ENT_QUOTES, 'UTF-8', true);?>

        <?php } else { ?>
            <?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>

        <?php }?>
    </h2>-->

        <div class="block_content">
            <ul class="catalog <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

                <?php }?>
                <?php } ?>
            </ul>
        </div>

</div>
    </ul>
                    <?php }?>
                <!--Подключение хука LeftColumn-->
                     <?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

                    </div>


                 <!-- End Include left Hook -->

  <!-- End left column Div--><?php }} ?>
