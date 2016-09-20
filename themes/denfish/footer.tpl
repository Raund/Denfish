</div>
<!--/контейнер для відображення даних по центру вікна-->
<!--/наповнення сайту-->

<!--footer-->
    <div id="footer">
        <!--контейнер для відображення даних по центру вікна-->
        <div class="container">
            <!--лого футера-->
            <div class="logo_ft left"><a href="#"><img src="{$img_dir}/ft_logo.png" alt=""></a>
                        <div class="copyright">&copy; Copyright denfish</div>

            </div>
            <!--/лого футера-->
            <ul class="ft_nav left">
               <!--<li><a href="{$base_dir}/4-about-us">О нас</a></li> тимчасово за бажанням клієнта-->
                <li><a href="{$base_dir}/1-delivery">Доставка и оплата</a></li>
                <li><a href="{$base_dir}smartblog.html">Статьи DENFISH</a></li>
               <!--<li><a href="{$base_dir}manufacturers">Производители</a></li>-->
                <li><a href="{$base_dir}/9-akcii-i-skidki">Акции и скидки</a></li>
                <li> <a href="{$base_dir}index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a></li>
                <li><a href="{$base_dir}/11-kontakty">Контакты</a></li>
            </ul>
        {$HOOK_FOOTER}

            <!--блок контактів-->
            <div class="kontakt left">
                <h4>Звоните!</h4>
                <h1>{hook h="displayRightColumn"}</h1>
                <div class="ft_social">
                    <a href="https://www.instagram.com/denfish2016/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                    <a href="http://vk.com/public111928645" target="_blank"><i class="fa fa-vk fa-2x"></i></a>
                    <a href="https://www.facebook.com/Denfishcom-1675193942721378/?fref=ts" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                </div>
                <!--блок контактів-->
             </div>
        </div>
    </div>
    <!--/контейнер для відображення даних по центру вікна-->
</div>
{include file="$tpl_dir./global.tpl"}
<!--footer-->
</body>
</html>