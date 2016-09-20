<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:31:25
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1560057dfda9d092d85-26101947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '678d4a6eb3da3107f284154ef2105b741e62d6f8' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\history.tpl',
      1 => 1470841516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1560057dfda9d092d85-26101947',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'slowValidation' => 0,
    'orders' => 0,
    'order' => 0,
    'img_dir' => 0,
    'invoiceAllowed' => 0,
    'opc' => 0,
    'reorderingAllowed' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfda9d23a107_53060848',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfda9d23a107_53060848')) {function content_57dfda9d23a107_53060848($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_regex_replace')) include 'D:\\OpenServer\\domains\\denfish.my\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?><div class="my-account">
	<div class="clearfix">
		<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
				<?php echo smartyTranslate(array('s'=>'Личный кабинет'),$_smarty_tpl);?>

		</a>
		<span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
		<span class="navigation_page"><?php echo smartyTranslate(array('s'=>'История заказов'),$_smarty_tpl);?>
</span>
		<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./modules/blocksearch/blocksearch-top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<h1 class="page-heading bottom-indent"><?php echo smartyTranslate(array('s'=>'История заказов'),$_smarty_tpl);?>
</h1>
	<p class="info-title">
		<?php echo smartyTranslate(array('s'=>'Здесь будут размещены все Ваши заказы, которые Вы сделали после регистрации.'),$_smarty_tpl);?>

	</p>
	<?php if ($_smarty_tpl->tpl_vars['slowValidation']->value) {?>
	<p class="alert alert-warning">
		<?php echo smartyTranslate(array('s'=>'Если Вы только что разместили заказ, это может занять несколько минут для того, чтобы он был подтвержден. Пожалуйста, обновите страницу, если Ваш заказ отсутствует.'),$_smarty_tpl);?>

	</p>
	<?php }?>
	<div class="block-center" id="block-history">
		<?php if ($_smarty_tpl->tpl_vars['orders']->value&&count($_smarty_tpl->tpl_vars['orders']->value)) {?>
		<table id="order-list" class="table table-bordered footab">
			<thead>
				<tr>
					<th class="first_item" data-sort-ignore="true"><?php echo smartyTranslate(array('s'=>'Код заказа'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Дата'),$_smarty_tpl);?>
</th>
					<th data-hide="phone" class="item"><?php echo smartyTranslate(array('s'=>'Общая цена'),$_smarty_tpl);?>
</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Оплата'),$_smarty_tpl);?>
</th>
					<th class="item"><?php echo smartyTranslate(array('s'=>'Статус'),$_smarty_tpl);?>
</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item"><?php echo smartyTranslate(array('s'=>'Счет'),$_smarty_tpl);?>
</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['order']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['order']->iteration=0;
 $_smarty_tpl->tpl_vars['order']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
 $_smarty_tpl->tpl_vars['order']->iteration++;
 $_smarty_tpl->tpl_vars['order']->index++;
 $_smarty_tpl->tpl_vars['order']->first = $_smarty_tpl->tpl_vars['order']->index === 0;
 $_smarty_tpl->tpl_vars['order']->last = $_smarty_tpl->tpl_vars['order']->iteration === $_smarty_tpl->tpl_vars['order']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['order']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['index']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['order']->last;
?>
				<tr class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?>first_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?>last_item<?php } else { ?>item<?php }?> <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['index']%2) {?>alternate_item<?php }?>">
					<td class="history_link bold">
						<?php if (isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['virtual'])&&$_smarty_tpl->tpl_vars['order']->value['virtual']) {?>
						<img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/download_product.gif"	alt="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" title="<?php echo smartyTranslate(array('s'=>'Products to download'),$_smarty_tpl);?>
" />
						<?php }?>
						<a class="color-myaccount" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
');">
									<?php echo Order::getUniqReferenceOf($_smarty_tpl->tpl_vars['order']->value['id_order']);?>

						</a>
					</td>
					<td data-value="<?php echo smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['order']->value['date_add'],"/[\-\:\ ]/",'');?>
" class="history_date bold"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['order']->value['date_add'],'full'=>0),$_smarty_tpl);?>
</td>
					<td class="history_price" data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['total_paid'];?>
">
						<span class="price">
							<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['order']->value['total_paid'],'currency'=>$_smarty_tpl->tpl_vars['order']->value['id_currency'],'no_utf8'=>false,'convert'=>false),$_smarty_tpl);?>

						</span>
					</td>
					<td class="history_method"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['payment'], ENT_QUOTES, 'UTF-8', true);?>
</td>
					<td<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])) {?> data-value="<?php echo $_smarty_tpl->tpl_vars['order']->value['id_order_state'];?>
"<?php }?> class="history_state">
						<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state'])) {?>
						<span class="label<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])&&Tools::getBrightness($_smarty_tpl->tpl_vars['order']->value['order_state_color'])>128) {?> dark<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['order']->value['order_state_color'])&&$_smarty_tpl->tpl_vars['order']->value['order_state_color']) {?> style="background-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
; border-color:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state_color'], ENT_QUOTES, 'UTF-8', true);?>
;"<?php }?>>
										<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['order_state'], ENT_QUOTES, 'UTF-8', true);?>

						</span>
						<?php }?>
					</td>
					<td class="history_invoice">
						<?php if ((isset($_smarty_tpl->tpl_vars['order']->value['invoice'])&&$_smarty_tpl->tpl_vars['order']->value['invoice']&&isset($_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&$_smarty_tpl->tpl_vars['order']->value['invoice_number'])&&isset($_smarty_tpl->tpl_vars['invoiceAllowed']->value)&&$_smarty_tpl->tpl_vars['invoiceAllowed']->value==true) {?>
						<a class="link-button" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('pdf-invoice',true,null,"id_order=".((string)$_smarty_tpl->tpl_vars['order']->value['id_order'])), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Invoice'),$_smarty_tpl);?>
" target="_blank"> <i class="icon-file-text large"></i>
							<?php echo smartyTranslate(array('s'=>'PDF'),$_smarty_tpl);?>

						</a>
						<?php } else { ?>
									-
								<?php }?>
					</td>
					<td class="history_detail">
						<a class="btn btn-default button button-small" href="javascript:showOrder(1, <?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-detail',true), ENT_QUOTES, 'UTF-8', true);?>
');">
							<span>
								<?php echo smartyTranslate(array('s'=>'Деталм заказа'),$_smarty_tpl);?>
 <i class="icon-chevron-right right"></i>
							</span>
						</a>
						<?php if (isset($_smarty_tpl->tpl_vars['opc']->value)&&$_smarty_tpl->tpl_vars['opc']->value) {?>
						<a class="link-button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-opc',true,null,"submitReorder&id_order=".$_tmp1), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
">
								<?php } else { ?>
							<a class="link-button" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true,null,"submitReorder&id_order=".$_tmp2), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Reorder'),$_smarty_tpl);?>
">
								<?php }?>
									<?php if (isset($_smarty_tpl->tpl_vars['reorderingAllowed']->value)&&$_smarty_tpl->tpl_vars['reorderingAllowed']->value) {?>
								<i class="icon-refresh"></i>
								<?php echo smartyTranslate(array('s'=>'Изменить заказ'),$_smarty_tpl);?>

									<?php }?>
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<div id="block-order-detail" class="unvisible">&nbsp;</div>
			<?php } else { ?>
			<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'Вы еще не делали заказов'),$_smarty_tpl);?>
</p>
			<?php }?>
		</div>
		<ul class="footer_links clearfix">
			<li>
				<a class="btn btn-default button button-small" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
">
					<span>
						<i class="icon-chevron-left"></i>
						<?php echo smartyTranslate(array('s'=>'Личный кабинет'),$_smarty_tpl);?>

					</span>
				</a>
			</li>
			<li>
				<a class="btn btn-default button button-small" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
">
					<span>
						<i class="icon-chevron-left"></i>
						<?php echo smartyTranslate(array('s'=>'Главная'),$_smarty_tpl);?>

					</span>
				</a>
			</li>
		</ul>
	</div><?php }} ?>
