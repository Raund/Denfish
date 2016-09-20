<?php /* Smarty version Smarty-3.1.19, created on 2016-09-02 04:24:55
         compiled from "/home/denfish/denfish.com/www/modules/smartblog/views/templates/front/category_loop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137087982457c8d4e7400890-99218734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d88470d936daf7e872108e7eb2cf13e2bfdda97' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/smartblog/views/templates/front/category_loop.tpl',
      1 => 1470841471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137087982457c8d4e7400890-99218734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'options' => 0,
    'smartshowauthor' => 0,
    'smartshowauthorstyle' => 0,
    'catlink' => 0,
    'title_category' => 0,
    'smartshowviewed' => 0,
    'smartshownoimg' => 0,
    'activeimgincat' => 0,
    'modules_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c8d4e7499478_14191885',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c8d4e7499478_14191885')) {function content_57c8d4e7499478_14191885($_smarty_tpl) {?><div itemtype="#" itemscope="" class="sdsarticleCat clearfix">
    <div id="smartblogpost-<?php echo $_smarty_tpl->tpl_vars['post']->value['id_post'];?>
">
    <div class="sdsarticleHeader">
         <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                            <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?> 
                            <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
                            <p class='sdstitle_block'><a title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" href='<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
'><?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
</a></p>
             <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>
               <?php $_smarty_tpl->tpl_vars["catlink"] = new Smarty_variable(null, null, 0);?>
                            <?php $_smarty_tpl->createLocalArrayVariable('catlink', null, 0);
$_smarty_tpl->tpl_vars['catlink']->value['id_category'] = $_smarty_tpl->tpl_vars['post']->value['id_category'];?>
                            <?php $_smarty_tpl->createLocalArrayVariable('catlink', null, 0);
$_smarty_tpl->tpl_vars['catlink']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['cat_link_rewrite'];?>
         <span><?php echo smartyTranslate(array('s'=>'Автор: DenFish','mod'=>'smartblog'),$_smarty_tpl);?>
 <span itemprop="author"><?php if ($_smarty_tpl->tpl_vars['smartshowauthor']->value==1) {?>&nbsp;<i class="icon icon-user"></i>&nbsp; <?php if ($_smarty_tpl->tpl_vars['smartshowauthorstyle']->value!=0) {?><?php echo $_smarty_tpl->tpl_vars['post']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['lastname'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['post']->value['lastname'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['firstname'];?>
<?php }?></span><?php }?> &nbsp;&nbsp;<i class="icon icon-tags"></i>&nbsp; <!--<span itemprop="articleSection"><a href="<?php echo smartblog::GetSmartBlogLink('smartblog_category',$_smarty_tpl->tpl_vars['catlink']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['title_category']->value!='') {?><?php echo $_smarty_tpl->tpl_vars['title_category']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['post']->value['cat_name'];?>
<?php }?></a></span> &nbsp;--><span class="comment"> &nbsp;<i class="icon icon-comments"></i>&nbsp; <a title="<?php echo $_smarty_tpl->tpl_vars['post']->value['totalcomment'];?>
 Comments" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
#articleComments"><?php echo $_smarty_tpl->tpl_vars['post']->value['totalcomment'];?>
 <?php echo smartyTranslate(array('s'=>' Комментарии','mod'=>'smartblog'),$_smarty_tpl);?>
</a></span><?php if ($_smarty_tpl->tpl_vars['smartshowviewed']->value==1) {?>&nbsp; <i class="icon icon-eye-open"></i><?php echo smartyTranslate(array('s'=>' просмотры','mod'=>'smartblog'),$_smarty_tpl);?>
 (<?php echo $_smarty_tpl->tpl_vars['post']->value['viewed'];?>
)<?php }?></span>
    </div>
    <div class="articleContent">
          <a itemprop="url" title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" class="imageFeaturedLink">
                    <?php $_smarty_tpl->tpl_vars["activeimgincat"] = new Smarty_variable('0', null, 0);?>
                    <?php $_smarty_tpl->tpl_vars['activeimgincat'] = new Smarty_variable($_smarty_tpl->tpl_vars['smartshownoimg']->value, null, 0);?> 
                    <?php if (($_smarty_tpl->tpl_vars['post']->value['post_img']!="no"&&$_smarty_tpl->tpl_vars['activeimgincat']->value==0)||$_smarty_tpl->tpl_vars['activeimgincat']->value==1) {?>
              <img itemprop="image" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
/smartblog/images/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_img'];?>
-single-default.jpg" class="imageFeatured">
                    <?php }?>
          </a>
    </div>
           <div class="sdsarticle-des">
          <span itemprop="description" class="clearfix"><div id="lipsum">
	<?php echo $_smarty_tpl->tpl_vars['post']->value['short_description'];?>
</div></span>
         </div>
        <div class="sdsreadMore">
                  <?php $_smarty_tpl->tpl_vars["options"] = new Smarty_variable(null, null, 0);?>
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['id_post'] = $_smarty_tpl->tpl_vars['post']->value['id_post'];?>  
                        <?php $_smarty_tpl->createLocalArrayVariable('options', null, 0);
$_smarty_tpl->tpl_vars['options']->value['slug'] = $_smarty_tpl->tpl_vars['post']->value['link_rewrite'];?>  
                         <span class="more"><a title="<?php echo $_smarty_tpl->tpl_vars['post']->value['meta_title'];?>
" href="<?php echo smartblog::GetSmartBlogLink('smartblog_post',$_smarty_tpl->tpl_vars['options']->value);?>
" class="r_more"><?php echo smartyTranslate(array('s'=>'Читать дальше...','mod'=>'smartblog'),$_smarty_tpl);?>
 </a></span>
        </div>
   </div>
</div><?php }} ?>
