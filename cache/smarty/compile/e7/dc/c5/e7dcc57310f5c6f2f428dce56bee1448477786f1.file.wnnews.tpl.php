<?php /* Smarty version Smarty-3.1.19, created on 2016-09-20 14:44:55
         compiled from "D:\Webserver\domains\denfish.my\modules\wnnews\views\templates\hook\wnnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:904757e12137330706-93205936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7dcc57310f5c6f2f428dce56bee1448477786f1' => 
    array (
      0 => 'D:\\Webserver\\domains\\denfish.my\\modules\\wnnews\\views\\templates\\hook\\wnnews.tpl',
      1 => 1474371405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904757e12137330706-93205936',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'images' => 0,
    'image' => 0,
    'img_dir' => 0,
    'news_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57e12137376c15_29100523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e12137376c15_29100523')) {function content_57e12137376c15_29100523($_smarty_tpl) {?><div class="advice" id="xAdvices">
    <h3>Советы от DEN<span>FISH</span></h3>
    <?php if ($_smarty_tpl->tpl_vars['images']->value) {?>
        <div class="advice_block clearfix">
            <?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
                <div class="advice_text x-advice" style="display: none">
                    <i class="fa fa-info-circle fa-lg"></i><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['image']->value['caption']),205,'...');?>

                </div>
            <?php } ?>
            <ul class="adv">
                <li><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
more_adv.png" alt=""><a href="#" class="x-next-advice">Еще совет</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['news_dir']->value;?>
">Смотреть все</a></li>
            </ul>

        </div>
    <?php }?>
</div>
<?php }} ?>
