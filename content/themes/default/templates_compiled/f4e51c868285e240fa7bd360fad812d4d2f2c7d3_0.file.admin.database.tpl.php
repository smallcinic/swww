<?php
/* Smarty version 3.1.31, created on 2018-02-21 15:11:00
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.database.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8d8c0485ea14_94988951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4e51c868285e240fa7bd360fad812d4d2f2c7d3' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.database.tpl',
      1 => 1519225855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8d8c0485ea14_94988951 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("Databases");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?> &rsaquo; <strong><?php echo __("Networks");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "server") {?> &rsaquo; <strong><?php echo __("Servers");?>
</strong><?php }?>
	    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "record") {?> &rsaquo; <strong><?php echo __("Records");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/add_network" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Network");?>

                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "server") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/add_server" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Server");?>

                </a>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "record") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/add_record" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Record");?>

                </a>
            </div>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_record" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_record") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/record" class="btn btn-primary">
                    <i class="fa fa-backward"></i> <?php echo __("Return");?>

                </a>
            </div>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_server" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_server") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/server" class="btn btn-primary">
                    <i class="fa fa-backward"></i> <?php echo __("Return");?>

                </a>
            </div>
        <?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_network" || $_smarty_tpl->tpl_vars['sub_view']->value == "add_network") {?>
			<div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database" class="btn btn-primary">
                    <i class="fa fa-backward"></i> <?php echo __("Return");?>

                </a>
            </div>
        <?php }?>

    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
							<th><?php echo __("Admin");?>
</th>
							<th><?php echo __("Protect");?>
</th>
            			    <th><?php echo __("Availability");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['admin'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['protect'];?>
</td>
		            	    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['available']) {?> <?php echo __("Yes");?>
 <?php } else { ?> <?php echo __("No");?>
 <?php }?></td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="network" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/edit_network/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_network") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=add_network">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                    </div>
                </div>

				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Admin");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="user_id">
			            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
			                <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                            </option>
				        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			        </select>
					<span class="help-block">
                        <?php echo __("Select user from list");?>

                    </span>
                </div>

				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Protect");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="protect_id">
					<option value="0" selected>
                         No protect
                    </option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                            </option>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	            </select>
					<span class="help-block">
                        <?php echo __("Select protect from list");?>

                    </span>
                </div>
				
                <label class="col-sm-3 control-label text-left">
                    <?php echo __("Available");?>

                </label>
                <div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this network available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Add New");?>
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
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_network") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=edit_network&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                    </div>
                </div>
				
    			<label class="col-sm-3 control-label text-left">
                    <?php echo __("Admin");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="user_id">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
		                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_users']->value['user_id'] == $_smarty_tpl->tpl_vars['data']->value['admin_id']) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                            </option>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	            </select>
					<span class="help-block">
                        <?php echo __("Select user from list");?>

                    </span>
                </div>
				
				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Protect");?>

                </label>
                <div class="col-sm-9">
                    <select class="form-control selectpicker" name="protect_id">
					    <option value="0" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == '0') {?>selected<?php }?>>
                            No protect
                        </option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['protect_id']) {?>selected<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                            </option>
			            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	            </select>
					<span class="help-block">
                        <?php echo __("Select protect from list");?>

                    </span>
                </div>

				<label class="col-sm-3 control-label text-left">
                    <?php echo __("Available");?>

                </label>
                <div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" <?php if ($_smarty_tpl->tpl_vars['data']->value['available']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this network available for players");?>

                    </span>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "server") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
			                <th><?php echo __("Network");?>
</th>
							<th><?php echo __("Admin");?>
</th>
							<th><?php echo __("Protect");?>
</th>
							<th><?php echo __("Availability");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['network'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['admin'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['protect'];?>
</td>
                            <td><?php if ($_smarty_tpl->tpl_vars['row']->value['available']) {?> <?php echo __("Yes");?>
 <?php } else { ?> <?php echo __("No");?>
 <?php }?></td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="server" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/edit_server/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_server") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=add_server">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            <?php echo __("Text name of this server");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Admin");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="user_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
					
    				<label class="col-sm-3 control-label text-left">
                        <?php echo __("Protect");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="protect_id">
		    	    		<option value="0" selected>
                                No protect
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                        <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                                </option>
		                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	                </select>
					    <span class="help-block">
                            <?php echo __("Select protect from list");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Network");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_network']->value, 'row_network');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_network']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_network']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_network']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
				
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this network available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Add New");?>
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
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_server") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=edit_server&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
						<span class="help-block">
                            <?php echo __("Text name of this server");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Admin");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="user_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_users']->value, 'row_users');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_users']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_users']->value['user_id'] == $_smarty_tpl->tpl_vars['data']->value['admin_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_users']->value['user_name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Protect");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="protect_id">
					        <option value="0" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == '0') {?>selected<?php }?>>
                                No protect
                            </option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_protect']->value, 'row_protect');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_protect']->value) {
?>
		                        <option value="<?php echo $_smarty_tpl->tpl_vars['row_protect']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_protect']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['protect_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_protect']->value['name'];?>

                                </option>
			                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

    	                </select>
					    <span class="help-block">
                            <?php echo __("Select protect from list");?>

                        </span>
                    </div>
					
					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Network");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="net_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_network']->value, 'row_network');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_network']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_network']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['row_network']->value['id'] == $_smarty_tpl->tpl_vars['data']->value['net_id']) {?>selected<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row_network']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select user from list");?>

                        </span>
                    </div>
				
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" <?php if ($_smarty_tpl->tpl_vars['data']->value['available']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this network available for players");?>

                    </span>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "record") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
							<th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Server");?>
</th>
							<th><?php echo __("Text");?>
</th>
			                <th><?php echo __("Availability");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['server'];?>
</td>
							<td><?php echo $_smarty_tpl->tpl_vars['row']->value['text'];?>
</td>
			                <td><?php if ($_smarty_tpl->tpl_vars['row']->value['available']) {?> <?php echo __("Yes");?>
 <?php } else { ?> <?php echo __("No");?>
 <?php }?></td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="record" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/database/edit_record/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_record") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=add_record">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
						<span class="help-block">
                            <?php echo __("Text name of this server");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Server");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="server_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_server']->value, 'row_server');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_server']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_server']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_server']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select server from list");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        <?php echo __("Text");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3"></textarea>
                        <span class="help-block">
                            <?php echo __("The text of this new record");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available">
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this network available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Add New");?>
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
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_record") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/database.php?do=edit_record&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
						<span class="help-block">
                            <?php echo __("Text name of this server");?>

                        </span>
                    </div>

					<label class="col-sm-3 control-label text-left">
                        <?php echo __("Server");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="server_id">
			                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_server']->value, 'row_server');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_server']->value) {
?>
			                    <option value="<?php echo $_smarty_tpl->tpl_vars['row_server']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_server']->value['name'];?>

                                </option>
				            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			            </select>
						<span class="help-block">
                            <?php echo __("Select server from list");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label">
                        <?php echo __("Text");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="text" rows="3"><?php echo $_smarty_tpl->tpl_vars['data']->value['text'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("The text of this record");?>

                        </span>
                    </div>
					
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Available");?>

                    </label>

					<div class="col-sm-9">
                    <label class="switch" for="available">
                        <input type="checkbox" name="available" id="available" <?php if ($_smarty_tpl->tpl_vars['data']->value['available']) {?>checked<?php }?>>
                        <span class="slider round"></span>
                    </label>
                    <span class="help-block">
                        <?php echo __("Make this record available for players");?>

                    </span>
                </div>


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
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
        </div>
    <?php }?>
</div>
<?php }
}
