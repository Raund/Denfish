<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:34:50
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2883457dfda828bf286-89896975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad7f3c1d8f8a57473d1ef404ca53ff39d4b27496' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\my-account.tpl',
      1 => 1474288488,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2883457dfda828bf286-89896975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfda82964f85_74634678',
  'variables' => 
  array (
    'account_created' => 0,
    'has_customer_an_address' => 0,
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_CUSTOMER_ACCOUNT' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfda82964f85_74634678')) {function content_57dfda82964f85_74634678($_smarty_tpl) {?><div class="my-account">
    <div class="clearfix">
    <?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Личный кабинет'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <!--<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</h1>-->
    <?php if (isset($_smarty_tpl->tpl_vars['account_created']->value)) {?>
    	<p class="alert alert-success">
    		<?php echo smartyTranslate(array('s'=>'Личный кабинет успешно создан.'),$_smarty_tpl);?>

    	</p>
    <?php }?>
    <p class="info-account"><?php echo smartyTranslate(array('s'=>'Добро пожаловать в личный кабинет. Здесь Вы можите менять свою личную информацию и информацию о покупках.'),$_smarty_tpl);?>
</p>
    <div class="row addresses-lists">
    	<div class="col-xs-12 col-sm-6 col-lg-4">
    		<ul class="myaccount-link-list">
                <?php if ($_smarty_tpl->tpl_vars['has_customer_an_address']->value) {?>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('address',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Добавить адресс доставки'),$_smarty_tpl);?>
"><i class="fa fa-home"></i><span><?php echo smartyTranslate(array('s'=>'Добавить первый адрес'),$_smarty_tpl);?>
</span></a></li>
                <?php }?>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'История заказов'),$_smarty_tpl);?>
"><i class="fa fa-list-alt"></i><span><?php echo smartyTranslate(array('s'=>'История заказов'),$_smarty_tpl);?>
</span></a></li>
                <?php if ($_smarty_tpl->tpl_vars['returnAllowed']->value) {?>
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Merchandise returns'),$_smarty_tpl);?>
"><i class="icon-refresh"></i><span><?php echo smartyTranslate(array('s'=>'My merchandise returns'),$_smarty_tpl);?>
</span></a></li>
                <?php }?>
                <!--<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-slip',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Credit slips'),$_smarty_tpl);?>
"><i class="icon-ban-circle"></i><span><?php echo smartyTranslate(array('s'=>'My credit slips'),$_smarty_tpl);?>
</span></a></li>-->
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Мои адреса'),$_smarty_tpl);?>
"><i class="fa fa-truck"></i><span><?php echo smartyTranslate(array('s'=>'Мои адреса'),$_smarty_tpl);?>
</span></a></li>
                <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Персональная информация'),$_smarty_tpl);?>
"><i class="fa fa-user"></i><span><?php echo smartyTranslate(array('s'=>'Персональная информация'),$_smarty_tpl);?>
</span></a></li>
            </ul>
    	</div>
    <?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value||isset($_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value)&&$_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value!='') {?>
    	<div class="col-xs-12 col-sm-6 col-lg-4">
            <ul class="myaccount-link-list">
                <!--<?php if ($_smarty_tpl->tpl_vars['voucherAllowed']->value) {?>
                    <li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('discount',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Vouchers'),$_smarty_tpl);?>
"><i class="icon-barcode"></i><span><?php echo smartyTranslate(array('s'=>'My vouchers'),$_smarty_tpl);?>
</span></a></li>
                <?php }?>-->
                <?php echo $_smarty_tpl->tpl_vars['HOOK_CUSTOMER_ACCOUNT']->value;?>

            </ul>
        </div>
    <?php }?>
    </div>
    <ul class="footer_links clearfix">
    <li><a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Главная'),$_smarty_tpl);?>
"><span><i class="icon-chevron-left"></i> <?php echo smartyTranslate(array('s'=>'Главная'),$_smarty_tpl);?>
</span></a></li>
    </ul>
</div><?php }} ?>
