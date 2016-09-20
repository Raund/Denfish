<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 15:42:55
         compiled from "D:\Webserver\domains\denfish.my\themes\denfish\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2263557e12138505703-52516043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb1a95fd6485aed78df3441dbd9eef116bd9748' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\themes\\denfish\\footer.tpl',
      1 => 1474375373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2263557e12138505703-52516043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12138547d94_38385958',
  'variables' => 
  array (
    'img_dir' => 0,
    'base_dir' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12138547d94_38385958')) {function content_57e12138547d94_38385958($_smarty_tpl) {?></div>
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
                <h1><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displayRightColumn"),$_smarty_tpl);?>
</h1>
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
