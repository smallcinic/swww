<?php
/* Smarty version 3.1.31, created on 2017-12-27 18:46:51
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.announcements.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43ea9b0c52e1_70256533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b62ae2197aff843adf983e17ac81e3dbda4a05b' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.announcements.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43ea9b0c52e1_70256533 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/announcements/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Announcement");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-bullhorn pr5 panel-icon"></i>
        <strong><?php echo __("Announcements");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
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
                            <th><?php echo __("Type");?>
</th>
                            <th><?php echo __("Start Date");?>
</th>
                            <th><?php echo __("End Date");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['announcement_id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['type'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['start_date'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['end_date'];?>
</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="announcement" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['announcement_id'];?>
">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/announcements/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['announcement_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/announcements.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['announcement_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
                        <span class="help-block">
                            <?php echo __("Announcement name will appear only in the admin panel (mandatory)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                        <span class="help-block">
                            <?php echo __("Announcement title will appear on the announcement block");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Type");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="type">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "success") {?>selected<?php }?> value="success" class="alert-success"><?php echo __("Success");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "warning") {?>selected<?php }?> value="warning" class="alert-warning"><?php echo __("Warning");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "danger") {?>selected<?php }?> value="danger" class="alert-danger"><?php echo __("Danger");?>
</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['type'] == "info") {?>selected<?php }?> value="info" class="alert-info"><?php echo __("Info");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Start Date");?>

                    </label>
                    <div class="col-sm-9">
                        <div class='input-group date js_datetimepicker'>
                            <input type='text' class="form-control" name="start_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['data']->value['start_date']);?>
" />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <span class="help-block">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("End Date");?>

                    </label>
                    <div class="col-sm-9">
                        <div class='input-group date js_datetimepicker'>
                            <input type='text' class="form-control" name="end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['data']->value['end_date']);?>
" />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <span class="help-block">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/announcements.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                        <span class="help-block">
                            <?php echo __("Announcement name will appear only in the admin panel");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                        <span class="help-block">
                            <?php echo __("Announcement title will appear on the announcement block");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Type");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="type">
                            <option value="success" class="alert-success"><?php echo __("Success");?>
</option>
                            <option value="warning" class="alert-warning"><?php echo __("Warning");?>
</option>
                            <option value="danger" class="alert-danger"><?php echo __("Danger");?>
</option>
                            <option value="info" class="alert-info"><?php echo __("Info");?>
</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="8"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Start Date");?>

                    </label>
                    <div class="col-sm-9">
                        <div class='input-group date js_datetimepicker'>
                            <input type='text' class="form-control" name="start_date" />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <span class="help-block">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("End Date");?>

                    </label>
                    <div class="col-sm-9">
                        <div class='input-group date js_datetimepicker'>
                            <input type='text' class="form-control" name="end_date" />
                            <span class="input-group-addon">
                                <span class="fa fa-calendar"></span>
                            </span>
                        </div>
                        <span class="help-block">
                            <?php echo __("Your current server datetime is");?>
: <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 (UTC)
                        </span>
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
    <?php }?>
</div><?php }
}
