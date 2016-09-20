<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:26
         compiled from "D:\OpenServer\domains\denfish.my\modules\wnnews\views\templates\hook\wnnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:334957dfd62a65cb16-74848726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e7bb0e478c2ceca1bfa8fc262914edcd2b5be1a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\modules\\wnnews\\views\\templates\\hook\\wnnews.tpl',
      1 => 1470841480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '334957dfd62a65cb16-74848726',
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
  'unifunc' => 'content_57dfd62a676870_40142313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd62a676870_40142313')) {function content_57dfd62a676870_40142313($_smarty_tpl) {?><div class="advice" id="xAdvices">
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
