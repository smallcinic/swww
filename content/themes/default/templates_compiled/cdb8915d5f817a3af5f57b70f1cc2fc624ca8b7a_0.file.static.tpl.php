<?php
/* Smarty version 3.1.31, created on 2017-12-28 15:16:28
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/static.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a450acc402e21_70134105',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb8915d5f817a3af5f57b70f1cc2fc624ca8b7a' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/static.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a450acc402e21_70134105 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="page-title">
    <?php echo $_smarty_tpl->tpl_vars['static']->value['page_title'];?>

</div>

<div class="container offcanvas">
    <div class="row">

	    <!-- side panel -->
	    <div class="col-xs-12 visible-xs-block offcanvas-sidebar mt20">
	        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	    </div>
	    <!-- side panel -->

	    <div class="col-xs-12 offcanvas-mainbar">
			<div class="row">
		        <div class="col-xs-10 col-xs-offset-1 text-readable ptb10">
		            <?php echo $_smarty_tpl->tpl_vars['static']->value['page_text'];?>

		        </div>
		    </div>
	    </div>
	    
	</div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
