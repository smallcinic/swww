<?php
/* Smarty version 3.1.31, created on 2018-02-20 16:44:58
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.permissions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8c508a11f371_81002050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95b69b77efbc0c56afeb760453cedf7d4ce6735b' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.permissions.tpl',
      1 => 1519138850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8c508a11f371_81002050 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("Permissions");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_permission") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['permission_name'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_permission") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "map") {?> &rsaquo; <strong><?php echo __("Map");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/permissions/add_permission" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Permission");?>

                </a>
            </div>
        <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "map") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/permissions/add_map" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Map");?>

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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['permission_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['permission_name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="permissions" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['permission_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/permissions/edit_permission/<?php echo $_smarty_tpl->tpl_vars['row']->value['permission_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_permission") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/permissions.php?do=add_permission">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="permission_name">
                    </div>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_permission") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/permissions.php?do=edit_permission&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['permission_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="permission_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['permission_name'];?>
">
                    </div>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "map") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
			    <th><?php echo __("User");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['map_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['permission_name'];?>
</td>
			    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="permissions_map" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['map_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_map") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/permissions.php?do=add_map">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("User");?>

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
                            <?php echo __("Select from users list");?>

                        </span>
                    </div>
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Permission");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="permission_id">
				            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_permissions']->value, 'row_permissions');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_permissions']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row_permissions']->value['permission_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_permissions']->value['permission_name'];?>

                                </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </select>
						<span class="help-block">
                            <?php echo __("Select permission from added before. You may add new on this psge:");?>
 <a target="_blank" href="/admincp/permissions/add_permission"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
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
 
    <?php }?>
</div>
<?php }
}
