<?php
/* Smarty version 3.1.31, created on 2018-02-28 20:23:27
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/root.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a970fbf5d3657_36634176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7e530b87bad6afc0e1cc717352df1600f1b8e5d' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/root.tpl',
      1 => 1519849406,
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
function content_5a970fbf5d3657_36634176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar mt20">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- left panel -->

        <!-- right panel -->
		<div class="col-sm-8 col-md-10 offcanvas-mainbar mt20">
			<div class="row">
				<div class="col-xs-12">
					<div class="panel panel-default">
					
						<!-- tabs -->
						<div class="panel-heading with-nav">
							<ul class="nav nav-tabs">
								<li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
									<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/root/"><?php echo __("FAQ");?>
</a>
								</li>
								<?php if (count($_smarty_tpl->tpl_vars['user_net']->value) > 0) {?>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_net']->value, 'net');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['net']->value) {
?>
										<li <?php if ($_smarty_tpl->tpl_vars['view']->value == $_smarty_tpl->tpl_vars['net']->value['id']) {?>class="active"<?php }?>>
											<a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/root/<?php echo $_smarty_tpl->tpl_vars['net']->value['id'];?>
/">
												<?php echo $_smarty_tpl->tpl_vars['net']->value['name'];?>

											</a>
										</li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

								<?php }?>
							</ul>
						</div>
						<!-- tabs -->
				
						<!-- content -->
						
						<div class="panel-body">
							<?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
								<p class="text-center text-muted mt10">
									<?php echo __("Select network");?>

								</p>
							<?php } else { ?>
                                <ul class="side-nav metismenu js_metisMenu">

    								<!-- Servers -->
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_servers']->value, 'user_server');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user_server']->value) {
?>
									    <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/root/<?php echo $_smarty_tpl->tpl_vars['view']->value;?>
">
                                                <i class="fa fa-desktop fa-fw fa-lg pr10"></i><?php echo $_smarty_tpl->tpl_vars['user_server']->value['name'];?>

                                                <span class="fa arrow"></span>
                                            </a>

											<ul>
                                                <!-- Records-->

													    <li>
                                                            <form class="js_ajax-forms form-horizontal" data-url="models/database.php?do=add_record">
															    <div class="form-group">
   															    	<div class="col-sm-9 col-sm-offset-1">
																	    <input type="hidden" name="server_id" value="<?php echo $_smarty_tpl->tpl_vars['user_server']->value['id'];?>
">
                                                                    	<span class="help-block">
                                                                            <?php echo __("Text name of this record");?>

                                                                        </span>
                                                                        <input class="form-control" name="name">
                                                                    </div>

                                                                    <div class="col-sm-9 col-sm-offset-1">
                                                                        <span class="help-block">
                                                                            <?php echo __("The text of this new record");?>

                                                                        </span>
    																	<textarea class="form-control" name="text" rows="3"></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <div class="col-sm-9 col-sm-offset-3">
                                                                        <button type="submit" class="btn btn-primary"><?php echo __("Add Record");?>
</button>
                                                                    </div>
                                                                </div>

                                                                <!-- success -->
                                                                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                                                                <!-- success -->

                                                                <!-- error -->
                                                                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                                                <!-- error -->
                                                            </form>
														</li>

			    								<!-- Records-->
                                            </ul>
											
                                        </li>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


										<!-- Servers -->

								</ul>						
							<?php }?>
						</div>
						<!-- content -->

					</div>
				</div>
			</div>
		</div>
		<!-- right panel -->
	</div>
</div>
<!-- page content -->



<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
