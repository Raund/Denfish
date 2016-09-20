<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 16:40:48
         compiled from "/home/denfish/denfish.com/www/modules/prosearch/prosearch_instant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99241599157c82fe0cce4d1-06895817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f55b64628655c42b80170d644537dde9498dff2' => 
    array (
      0 => '/home/denfish/denfish.com/www/modules/prosearch/prosearch_instant.tpl',
      1 => 1470841115,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99241599157c82fe0cce4d1-06895817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instantsearch' => 0,
    'prosearchmod' => 0,
    'ajaxsearch' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c82fe0cf21e7_67314978',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c82fe0cf21e7_67314978')) {function content_57c82fe0cf21e7_67314978($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['instantsearch']->value) {?>
	<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '<?php echo $_smarty_tpl->tpl_vars['prosearchmod']->value;?>
',{
						minChars: 3,
						max: 10,
						width: 270,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value:' <img src="'+ data[i].ajaxsearchimage + '" />' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ajaxsearch']->value) {?>
	<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '<?php echo $_smarty_tpl->tpl_vars['prosearchmod']->value;?>
',{
						minChars: 3,
						max: 10,
						width: 270,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value:' <img src="'+ data[i].ajaxsearchimage + '" />' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_lang;?>

						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>
<?php }?>

<?php }} ?>
