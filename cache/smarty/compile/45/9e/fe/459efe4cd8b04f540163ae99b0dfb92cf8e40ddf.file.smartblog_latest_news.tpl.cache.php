<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 19:09:23
         compiled from "/home/denfish/denfish.com/www/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72376447257c852b30a1ec3-94221528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459efe4cd8b04f540163ae99b0dfb92cf8e40ddf' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/smartbloghomelatestnews/views/templates/front/smartblog_latest_news.tpl',
      1 => 1470841473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72376447257c852b30a1ec3-94221528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view_data' => 0,
    'post' => 0,
    'modules_dir' => 0,
    'options' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c852b3107be6_94367395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c852b3107be6_94367395')) {function content_57c852b3107be6_94367395($_smarty_tpl) {?>﻿<div class="article">
    <h3><a href="<?php echo smartblog::GetSmartBlogLink('smartblog');?>
"><?php echo smartyTranslate(array('s'=>'Статьи от DEN','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
<span><?php echo smartyTranslate(array('s'=>'FISH','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</span></a></h3>
    
        <?php if (isset($_smarty_tpl->tpl_vars['view_data']->value)&&!empty($_smarty_tpl->tpl_vars['view_data']->value)) {?>
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
            <ul>
            <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['view_data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
               
                    <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                    <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id'];?>
                    <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                    
                        <li class="article_box">
                           <img alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-home-default.jpg">                                             
                           <!-- <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a>   -->                      
                               <div class="article_text">
                                <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['short_description'],220), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

                                </div>
                            <a href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
" ><?php echo smartyTranslate(array('s'=>'Детальнее','mod'=>'smartbloghomelatestnews'),$_smarty_tpl);?>
</a>
                        </li>
                    
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php } ?>
            </ul>
        <?php }?>
    
</div><?php }} ?>
