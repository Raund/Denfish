<?php /* Smarty version Smarty-3.1.19, created on 2016-09-02 15:19:32
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/blockviewed/blockviewed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17612616157c96e54a1e9e1-12016807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21c2c4640a12f8f1b8098433b2ae240fa2385f63' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/blockviewed/blockviewed.tpl',
      1 => 1470841591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17612616157c96e54a1e9e1-12016807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'productsViewedObj' => 0,
    'viewedProduct' => 0,
    'link' => 0,
    'img_prod_dir' => 0,
    'lang_iso' => 0,
    'homeSize' => 0,
    'product' => 0,
    'static_token' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c96e54b04ba7_28257724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c96e54b04ba7_28257724')) {function content_57c96e54b04ba7_28257724($_smarty_tpl) {?><!--Accessories -->
<div id="viewed-products_block_left" class="block">
    <h1 class="you_see"><?php echo smartyTranslate(array('s'=>'Еще вы смотрели:','mod'=>'blockviewed'),$_smarty_tpl);?>
</h1>
    <div class="block_content products-block">
        <ul id="bxslider" class="bxslider clearfix">
            <?php  $_smarty_tpl->tpl_vars['viewedProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['viewedProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productsViewedObj']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['viewedProduct']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['viewedProduct']->iteration=0;
 $_smarty_tpl->tpl_vars['viewedProduct']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['viewedProduct']->key => $_smarty_tpl->tpl_vars['viewedProduct']->value) {
$_smarty_tpl->tpl_vars['viewedProduct']->_loop = true;
 $_smarty_tpl->tpl_vars['viewedProduct']->iteration++;
 $_smarty_tpl->tpl_vars['viewedProduct']->index++;
 $_smarty_tpl->tpl_vars['viewedProduct']->first = $_smarty_tpl->tpl_vars['viewedProduct']->index === 0;
 $_smarty_tpl->tpl_vars['viewedProduct']->last = $_smarty_tpl->tpl_vars['viewedProduct']->iteration === $_smarty_tpl->tpl_vars['viewedProduct']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['viewedProduct']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['viewedProduct']->last;
?>
                <li class="product-container item product-box ajax_block_product<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']) {?> last_item<?php } elseif ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']) {?> first_item<?php } else { ?> item<?php }?> product_accessories_description">

                    <div class="product_desc">

                        <div class="product-image-container">
                                <a class="product_img_link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
" >
                                    <img class="replace-2x img-responsive" src="<?php if (isset($_smarty_tpl->tpl_vars['viewedProduct']->value->id_image)&&$_smarty_tpl->tpl_vars['viewedProduct']->value->id_image) {?><?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['viewedProduct']->value->link_rewrite,$_smarty_tpl->tpl_vars['viewedProduct']->value->cover,'home_default');?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['img_prod_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-medium_default.jpg<?php }?>"
                                    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->legend, ENT_QUOTES, 'UTF-8', true);?>
"  <?php if (isset($_smarty_tpl->tpl_vars['homeSize']->value)) {?> width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
"<?php }?> itemprop="image" />
                                </a>
                        </div>

                        <div class="s_title_block">
                            <h4 class="product-name">
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'More about %s','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
">
                                        <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['viewedProduct']->value->name,45,'...'), ENT_QUOTES, 'UTF-8', true);?>

                               </a>
                           </h4>
                       </div>
                            <span itemprop="offers" itemscope itemtype="http://schema.org/Offer" class="availability">


                                        <?php if (($_smarty_tpl->tpl_vars['viewedProduct']->value->quantity>0)) {?>
                                            <span>В наличии</span>
                                        <?php } else { ?>
                                            <span class="out-of-stock">Нет в наличии</span>
                                        <?php }?>
                            </span>
                                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->product_link, ENT_QUOTES, 'UTF-8', true);?>
"
                                   title="<?php echo smartyTranslate(array('s'=>'Подробнее','mod'=>'blockviewed','sprintf'=>array(htmlspecialchars($_smarty_tpl->tpl_vars['viewedProduct']->value->name, ENT_QUOTES, 'UTF-8', true))),$_smarty_tpl);?>
">
                                    <span><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['customization_required'])&&$_smarty_tpl->tpl_vars['product']->value['customization_required'])) {?><?php echo smartyTranslate(array('s'=>'Customize'),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'Подробнее'),$_smarty_tpl);?>
<?php }?></span>
                                </a>

                                <!-- <div class="block_description"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['viewedProduct']->value->description_short),40);?>
</div>-->
                            <div class="button-container">

                            <?php if (($_smarty_tpl->tpl_vars['viewedProduct']->value->quantity>0)) {?>

                                <a class="button ajax_add_to_cart_button btn btn-default" href="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value->id);?>
<?php $_tmp31=ob_get_clean();?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".$_tmp31."&amp;token=".((string)$_smarty_tpl->tpl_vars['static_token']->value)."&amp;add"), ENT_QUOTES, 'UTF-8', true);?>
" data-id-product="<?php echo intval($_smarty_tpl->tpl_vars['viewedProduct']->value->id);?>
" title="<?php echo smartyTranslate(array('s'=>'Добавить в корзину'),$_smarty_tpl);?>
">
                                    <span class="price_acc">
                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=1) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price),$_smarty_tpl);?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price_tax_exc),$_smarty_tpl);?>

                                        <?php }?>
                                    </span>

                                </a>

                            <?php } else { ?>
                                <!--забрав з класу ajax_add_to_cart_button-->
                                <span class="button btn btn-default">
                                    <span class="price_acc" style="    width: 190px;
                                display: block;
                                height: 40px;
                                margin: -10px 0 0 -18px;
                                padding: 10px 0 0 14px;
                                background: rgba(255,255,255,0.8);">
                                        <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value!=1) {?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price),$_smarty_tpl);?>

                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayWtPrice'][0][0]->displayWtPrice(array('p'=>$_smarty_tpl->tpl_vars['viewedProduct']->value->price_tax_exc),$_smarty_tpl);?>

                                        <?php }?>
                                    </span>

                                </span>
                            <?php }?>
                            </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>
<!--end Accessories --><?php }} ?>
