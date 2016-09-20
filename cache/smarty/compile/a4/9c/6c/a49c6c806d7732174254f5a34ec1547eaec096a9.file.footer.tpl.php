<?php /* Smarty version Smarty-3.1.19, created on 2016-09-02 18:01:59
         compiled from "/home/denfish/denfish.com/www/themes/denfish/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74705852357c82fe1ed5d31-64939769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a49c6c806d7732174254f5a34ec1547eaec096a9' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/footer.tpl',
      1 => 1472828512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74705852357c82fe1ed5d31-64939769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe1ef2d92_56551531',
  'variables' => 
  array (
    'img_dir' => 0,
    'base_dir' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe1ef2d92_56551531')) {function content_57c82fe1ef2d92_56551531($_smarty_tpl) {?></div>
<!--/контейнер для відображення даних по центру вікна-->
<!--/наповнення сайту-->

<!--footer-->
    <div id="footer">
        <!--контейнер для відображення даних по центру вікна-->
        <div class="container">
            <!--лого футера-->
            <div class="logo_ft left"><a href="#"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
/ft_logo.png" alt=""></a>
                        <div class="copyright">&copy; Copyright denfish</div>

            </div>
            <!--/лого футера-->
            <ul class="ft_nav left">
               <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/4-about-us">О нас</a></li> тимчасово за бажанням клієнта-->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/1-delivery">Доставка и оплата</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
smartblog.html">Статьи DENFISH</a></li>
               <!--<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
manufacturers">Производители</a></li>-->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/9-akcii-i-skidki">Акции и скидки</a></li>
                <li> <a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
index.php?fc=module&module=azgallery&controller=gallery">Фотогалерея DenFish</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
/11-kontakty">Контакты</a></li>
            </ul>
        <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>


            <!--блок контактів-->
            <div class="kontakt left">
                <h4>Звоните!</h4>
                <h1><span>+3 8050</span> 548 11 59</h1>
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
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--footer-->
</body>
</html><?php }} ?>
