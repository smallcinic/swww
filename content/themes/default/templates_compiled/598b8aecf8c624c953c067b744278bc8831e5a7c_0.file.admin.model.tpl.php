<?php
/* Smarty version 3.1.31, created on 2018-02-21 18:59:13
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.model.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8dc181acc010_01103730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '598b8aecf8c624c953c067b744278bc8831e5a7c' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.model.tpl',
      1 => 1519239553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8dc181acc010_01103730 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-flag pr5 panel-icon"></i>
        <strong><?php echo __("Models");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_model") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_model") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "map") {?> &rsaquo; <strong><?php echo __("Map");?>
</strong><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/model/add_model" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Model");?>

                </a>
            </div>
        <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "map") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/model/add_map" class="btn btn-primary">
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="model" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/model/edit_model/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_model") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=add_model">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="model_name">
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_model") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=edit_model&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="model_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
			    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="model_map" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/model.php?do=add_map">
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
                        <?php echo __("Models");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="model_id">
				            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows_model']->value, 'row_model');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row_model']->value) {
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['row_model']->value['id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row_model']->value['name'];?>

                                </option>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        </select>
						<span class="help-block">
                            <?php echo __("Select model from added before. You may add new on this psge:");?>
 <a target="_blank" href="/admincp/model/add_model"><?php echo __("Click Here");?>
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
