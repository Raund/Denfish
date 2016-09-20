<?php /* Smarty version Smarty-3.1.19, created on 2016-09-19 15:12:26
         compiled from "D:\OpenServer\domains\denfish.my\themes\denfish\modules\blockcontactinfos\blockcontactinfos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3096757dfd62ab52921-40997242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9a8d95734f91946689659c7b8d042f4bb22bb68' => 
    array (
      0 => 'D:\\OpenServer\\domains\\denfish.my\\themes\\denfish\\modules\\blockcontactinfos\\blockcontactinfos.tpl',
      1 => 1470841584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3096757dfd62ab52921-40997242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blockcontactinfos_company' => 0,
    'blockcontactinfos_address' => 0,
    'blockcontactinfos_company1' => 0,
    'blockcontactinfos_address1' => 0,
    'blockcontactinfos_phone' => 0,
    'blockcontactinfos_email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57dfd62aba2323_33479884',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57dfd62aba2323_33479884')) {function content_57dfd62aba2323_33479884($_smarty_tpl) {?><?php if (!is_callable('smarty_function_mailto')) include 'D:\\OpenServer\\domains\\denfish.my\\tools\\smarty\\plugins\\function.mailto.php';
?><!--блок адреси-->
<div class="addres left">
        <h4><?php echo smartyTranslate(array('s'=>'Адреса наших магазинов:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
</h4>
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value!='') {?>
            	<li class="gorod">
            		<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company']->value, ENT_QUOTES, 'UTF-8', true);?>

            	</li>
                <li class="ulica"><?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value!='') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                </li>
            <?php }?>

        </ul>
             <ul>
                 <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_company1']->value!='') {?>
                     <li class="gorod">
                         <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_company1']->value, ENT_QUOTES, 'UTF-8', true);?>

                     </li>
                     <li class="ulica"><?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_address1']->value!='') {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_address1']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
                     </li>
                 <?php }?>
             </ul>
           <!-- <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value!='') {?>
            	<li>
            		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_phone']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
            	</li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value!='') {?>
            	<li>
            		<i class="icon-envelope-alt"></i><?php echo smartyTranslate(array('s'=>'Email:','mod'=>'blockcontactinfos'),$_smarty_tpl);?>
 
            		<span><?php echo smarty_function_mailto(array('address'=>htmlspecialchars($_smarty_tpl->tpl_vars['blockcontactinfos_email']->value, ENT_QUOTES, 'UTF-8', true),'encode'=>"hex"),$_smarty_tpl);?>
</span>
            	</li>
            <?php }?>-->


        </ul>
    </div>
<!--/блок адреси-->



<?php }} ?>
