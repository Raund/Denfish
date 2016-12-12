</div>
<!--/контейнер для відображення даних по центру вікна-->
<!--/наповнення сайту-->

<!--footer-->
    <div id="footer">

        <!--контейнер для відображення даних по центру вікна-->
        <div class="container">

            <!--лого футера-->
            <div class="logo_ft"><a href="#"><img src="{$img_dir}ft_logo.png" alt=""></a>
                <div class="copyright">&copy; Copyright denfish</div>
            </div>
            <!--/лого футера-->

            <ul class="ft_nav">
               <!--<li><a href="{$base_dir}/4-about-us">О нас</a></li> тимчасово за бажанням клієнта-->
                <li><a href="{$base_dir}1-delivery">Доставка и оплата</a></li>
                <li><a href="{$base_dir}smartblog.html">Статьи DENFISH</a></li>
               <!--<li><a href="{$base_dir}manufacturers">Производители</a></li>-->
                <li><a href="{$base_dir}9-akcii-i-skidki">Акции и скидки</a></li>
                <li><a href="{$base_dir}index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a></li>
                <li><a href="{$base_dir}11-kontakty">Контакты</a></li>
            </ul>

            {$HOOK_FOOTER}

            <!--блок контактів-->
            <div class="kontakt">
                <h4>Звоните!</h4>
                <div class="footer-phones">{hook h="displayRightColumn"}</div>
                <div class="ft_social">
                    <a href="https://www.instagram.com/denfish2016/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="http://vk.com/public111928645" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
                    <a href="https://www.facebook.com/Denfishcom-1675193942721378/?fref=ts" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                </div>
             </div>
            <!--блок контактів-->

        </div>

    </div>
    <!--/контейнер для відображення даних по центру вікна-->
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter41337964 = new Ya.Metrika({
                    id:41337964,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true,
                    ecommerce:"dataLayer"
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/41337964" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
    (function(i,s,o,g,r,a,m){
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function(){
            ( i[r].q = i[r].q || [] ).push(arguments)},
        i[r].l = 1*new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a,m)
    })(window, document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-88363071-1', 'auto');
    ga('send', 'pageview');

</script>
{include file="$tpl_dir./global.tpl"}

<!--footer-->
</body>
</html>