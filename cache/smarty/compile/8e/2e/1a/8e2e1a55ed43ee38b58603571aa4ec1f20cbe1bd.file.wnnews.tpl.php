<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:54
         compiled from "/home/denfish/denfish.com/www/modules/wnnews/views/templates/hook/wnnews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27757752157c82fe609e0d8-18721707%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2e1a55ed43ee38b58603571aa4ec1f20cbe1bd' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/wnnews/views/templates/hook/wnnews.tpl',
      1 => 1470841480,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27757752157c82fe609e0d8-18721707',
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
  'unifunc' => 'content_57c82fe60b2075_48344849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe60b2075_48344849')) {function content_57c82fe60b2075_48344849($_smarty_tpl) {?><div class="advice" id="xAdvices">
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
