<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:49
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/mailalerts/views/templates/hook/product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107162058457c82fe1408939-51944805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '208f5551bd9ca85ee3df30ddafd1622087f2fca9' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/mailalerts/views/templates/hook/product.tpl',
      1 => 1470841643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107162058457c82fe1408939-51944805',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe144cd34_57203588',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe144cd34_57203588')) {function content_57c82fe144cd34_57203588($_smarty_tpl) {?>

<!-- MODULE MailAlerts -->
<!--<script type="text/javascript">
    $(document).ready(function(){
        $('.spoiler-title').click(function(){
            $(this).parent().children('.spoiler-body').slideToggle();
            return false;
        });
    });
</script>-->

    <script type="text/javascript">
        $('.popup .close_window, .overlay').click(function (){
            $('.popup, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
        });
        $('button.spoiler-title').click(function (e){
            $('.popup, .overlay').css({'opacity': 1, 'visibility': 'visible'});
            e.preventDefault();
        });
    </script>



<div class="not_available_block">
        <h2>нет вналичии</h2>

        <button class="spoiler-title">Сообщить<br> когда появится</button>


        <!--<div class="spoiler-body">
        <div class="text_mailalert"> Введите свой адрес эл.почты и мы вас оповестим, когда товар появится в наличии</div>
        <p class="form-group">
            <input type="text" id="oos_customer_email" name="customer_email" size="20" value="<?php echo smartyTranslate(array('s'=>'your@email.com','mod'=>'mailalerts'),$_smarty_tpl);?>
" class="mailalerts_oos_email form-control" hidden />
        </p>
        <div class="saver"><a href="#" title="<?php echo smartyTranslate(array('s'=>'Сохранить','mod'=>'mailalerts'),$_smarty_tpl);?>
" id="mailalert_link" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Сохранить','mod'=>'mailalerts'),$_smarty_tpl);?>
</a></div>

        </div>-->

          <div class="overlay">

          </div>
                <div class="popup">
                    <div class="close_window"><i class="fa fa-times-circle fa-2x"></i></div>
                    <p>Введите свой адрес эл.почты и мы вас оповестим, когда товар появится в наличии</p>
                    <div class="put_email">Эл. почта</div>
                    <p class="form-group">
                        <input type="text" id="oos_customer_email" name="customer_email" size="20" value="<?php echo smartyTranslate(array('s'=>'your@email.com','mod'=>'mailalerts'),$_smarty_tpl);?>
" class="mailalerts_oos_email form-control" hidden />
                    </p>
                    <div class="saver">
                        <a href="#" title="<?php echo smartyTranslate(array('s'=>'Сохранить','mod'=>'mailalerts'),$_smarty_tpl);?>
" id="mailalert_link" rel="nofollow"><?php echo smartyTranslate(array('s'=>'Сохранить','mod'=>'mailalerts'),$_smarty_tpl);?>
</a>
                    </div>
                    <span id="oos_customer_email_result" style="display:none; display: block;"></span>
                </div>




</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('oosHookJsCodeFunctions'=>array('oosHookJsCodeMailAlert')),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mailalerts_url_check'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'check'))),$_smarty_tpl);?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('mailalerts_url_add'=>$_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','actions',array('process'=>'add'))),$_smarty_tpl);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'mailalerts_placeholder')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_placeholder'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'your@email.com','mod'=>'mailalerts','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_placeholder'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'mailalerts_registered')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_registered'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Request notification registered','mod'=>'mailalerts','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_registered'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'mailalerts_already')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_already'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You already have an alert for this product','mod'=>'mailalerts','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_already'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'mailalerts_invalid')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_invalid'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Your e-mail address is invalid','mod'=>'mailalerts','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'mailalerts_invalid'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<!-- END : MODULE MailAlerts --><?php }} ?>
