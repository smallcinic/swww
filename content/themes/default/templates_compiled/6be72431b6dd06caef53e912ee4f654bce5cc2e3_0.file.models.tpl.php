<?php
/* Smarty version 3.1.31, created on 2018-02-26 16:59:07
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/models.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a943cdbb0fcb4_44923886',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be72431b6dd06caef53e912ee4f654bce5cc2e3' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/models.tpl',
      1 => 1519664346,
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
function content_5a943cdbb0fcb4_44923886 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">

    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">
        <div class="posts-filter"><span>Models</span></div>

		<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
            <!-- tabs -->
			<div class="box-tabs-wrapper clearfix">
    			<?php if (count($_smarty_tpl->tpl_vars['models']->value) > 0) {?>
                    <ul class="nav pull-left flip">
					    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['models']->value, 'model');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == ((string)$_smarty_tpl->tpl_vars['model']->value['name'])) {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/models/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['model']->value['name'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>
</a>
                            </li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
		        <?php } else { ?>
			        <p class="text-center text-muted">
                        <?php echo __("No models to show");?>

                    </p>
			    <?php }?>
			</div>
			<!-- tabs -->
         
		<?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'database') {?>
		    <div class="panel-body">
			<!-- tabs -->
			
			<div class="box-tabs-wrapper clearfix">
    			<?php if (count($_smarty_tpl->tpl_vars['user_net']->value) > 0) {?>
                    <ul class="nav pull-left flip">
					    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_net']->value, 'net');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['net']->value) {
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == ((string)$_smarty_tpl->tpl_vars['net']->value)."['id']") {?>class="active"<?php }?>>
							    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/models/database/<?php echo $_smarty_tpl->tpl_vars['net']->value['id'];?>
/">
                                    <strong class="pr5"><?php echo $_smarty_tpl->tpl_vars['sub_view']->value;
echo $_smarty_tpl->tpl_vars['net']->value['id'];
echo $_smarty_tpl->tpl_vars['net']->value['name'];?>
</strong>
								</a>
                            </li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
		        <?php } else { ?>
			        <p class="text-center text-muted">
                        <?php echo __("No databases to show");?>

                    </p>
			    <?php }?>
			</div>
			<!-- tabs -->
			<!-- content -->
			<div class="tab-content">
			    <?php $_prefixVariable1 = '';
$_smarty_tpl->_assignInScope('sub_view', $_prefixVariable1);
if ($_prefixVariable1) {?>
				    <p class="text-center text-muted">
                        <?php echo __("Select database");?>

                    </p>
			    <?php }?>
			</div>
			<!-- content -->
			</div>
		<?php }?>
            
            <!-- content -->
            <div>

            </div>
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->
</div>
<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
