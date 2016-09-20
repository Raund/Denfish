<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:49
         compiled from "/home/denfish/denfish.com/www/themes/denfish/modules/blocksocial/blocksocial.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192858820957c82fe1e41764-54095706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4712cb9c31d61e08622af897624b0f88ae03b15f' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/modules/blocksocial/blocksocial.tpl',
      1 => 1470841589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192858820957c82fe1e41764-54095706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instagram_url' => 0,
    'pinterest_url' => 0,
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
    'youtube_url' => 0,
    'google_plus_url' => 0,
    'vimeo_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe1e98024_76907383',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe1e98024_76907383')) {function content_57c82fe1e98024_76907383($_smarty_tpl) {?>

		
		<?php if ($_smarty_tpl->tpl_vars['instagram_url']->value!='') {?><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['instagram_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-instagram"></i></a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['pinterest_url']->value!='') {?><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pinterest_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-vk"></i></a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['facebook_url']->value!='') {?><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebook_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><i class="fa fa-facebook"></i></a><?php }?>
		<!--<?php if ($_smarty_tpl->tpl_vars['twitter_url']->value!='') {?><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['twitter_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Twitter','mod'=>'blocksocial'),$_smarty_tpl);?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['rss_url']->value!='') {?><li class="rss"><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rss_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'RSS','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['youtube_url']->value!='') {?><li class="youtube"><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['youtube_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'YouTube','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['google_plus_url']->value!='') {?><li class="google_plus"><a class="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['google_plus_url']->value, ENT_QUOTES, 'UTF-8', true);?>
" rel="publisher"><?php echo smartyTranslate(array('s'=>'Google+','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['vimeo_url']->value!='') {?><li class="vimeo"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vimeo_url']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'Vimeo','mod'=>'blocksocial'),$_smarty_tpl);?>
</a></li><?php }?>-->
	

<?php }} ?>
