<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:49
         compiled from "/home/denfish/denfish.com/www/themes/denfish/breadcrumb-cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:66320458357c82fe1bd7630-72824848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c2eb9d0fb7da3b1716b07e2e2daf6b2e959a9c' => 
    array (
      0 => '/home/denfish/denfish.com/www/themes/denfish/breadcrumb-cart.tpl',
      1 => 1470841513,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '66320458357c82fe1bd7630-72824848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe1c6c0e9_98421556',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe1c6c0e9_98421556')) {function content_57c82fe1c6c0e9_98421556($_smarty_tpl) {?>
<!-- Breadcrumb-cart -->

<?php if (($_smarty_tpl->tpl_vars['page_name']->value=='product')) {?>

    <?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb clearfix" style="width:500px; margin-left:40px">
    <a class="home_page" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'На главную'),$_smarty_tpl);?>
">Главная</a><span class="navigation-pipe"> -</span>
    <?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
        <span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>></span>
        <?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>
            <span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

        <?php }?>
    <?php }?>
</div>
<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
<div class="pull-right">
    <strong>
        <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true);?>
" name="back">
            <i class="icon-chevron-left left"></i> <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

        </a>
    </strong>
</div>
<?php }?>

<?php } else { ?>

    <?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb clearfix">
    <a class="home_page" href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
">Главная</a><span class="navigation-pipe"> -</span>
    <?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
        <span class="navigation-pipe" <?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==1) {?>style="display:none;"<?php }?>></span>
        <?php if (!strpos($_smarty_tpl->tpl_vars['path']->value,'span')) {?>
            <span class="navigation_page"><?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span>
        <?php } else { ?>
            <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

        <?php }?>
    <?php }?>
</div>
<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
<div class="pull-right">
    <strong>
        <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true);?>
" name="back">
            <i class="icon-chevron-left left"></i> <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

        </a>
    </strong>
</div>
<?php }?>

<?php }?>

<!-- /Breadcrumb-cart-->
<?php }} ?>
