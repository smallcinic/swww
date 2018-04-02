<?php
/* Smarty version 3.1.31, created on 2018-02-02 17:53:56
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.events.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a74a5b43e95b5_47816136',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766c14a8292c93d8343e4eb12e565c09cfd5c499' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.events.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a74a5b43e95b5_47816136 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_event") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['data']->value['event_id'];?>
" class="btn btn-info">
                    <i class="fa fa-television fa-fw mr5"></i><?php echo __("View Event");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/events/add_category" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Category");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-calendar pr5 panel-icon"></i>
        <strong><?php echo __("Events");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_event") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['event_title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?> &rsaquo; <strong><?php echo __("Categories");?>
</strong> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
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
                            <th><?php echo __("Event");?>
</th>
                            <th><?php echo __("Admin");?>
</th>
                            <th><?php echo __("Privacy");?>
</th>
                            <th><?php echo __("Interested");?>
</th>
                            <th><?php echo __("Going");?>
</th>
                            <th><?php echo __("Invited");?>
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
                            <td>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['row']->value['event_id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['event_id'];?>
</a>
                            </td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['row']->value['event_id'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['event_title'];?>

                                </a>
                            </td>
                            <td>
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['user_lastname'];?>

                                </a>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['event_privacy'] == "public") {?>
                                    <i class="fa fa-globe fa-fw fa-lg"></i>
                                    <?php echo __("Public");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['event_privacy'] == "closed") {?>
                                    <i class="fa fa-unlock-alt fa-fw fa-lg"></i>
                                    <?php echo __("Closed");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['event_privacy'] == "secret") {?>
                                    <i class="fa fa-lock fa-fw fa-lg"></i>
                                    <?php echo __("Secret");?>

                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['event_interested'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['event_going'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['event_invited'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="event" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['event_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/events/edit_event/<?php echo $_smarty_tpl->tpl_vars['row']->value['event_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_event") {?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['event_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['event_id'];?>
</span>
                            <?php echo __("Event ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge">
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['event_privacy'] == "public") {?>
                                    <i class="fa fa-globe fa-fw fa-lg"></i>
                                    <?php echo __("Public");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['event_privacy'] == "closed") {?>
                                    <i class="fa fa-unlock-alt fa-fw fa-lg"></i>
                                    <?php echo __("Closed");?>

                                <?php } elseif ($_smarty_tpl->tpl_vars['data']->value['event_privacy'] == "secret") {?>
                                    <i class="fa fa-lock fa-fw fa-lg"></i>
                                    <?php echo __("Secret");?>

                                <?php }?>
                            </span>
                            <?php echo __("Privacy");?>

                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['event_interested'];?>
</span>
                            <?php echo __("Interested");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['event_going'];?>
</span>
                            <?php echo __("Going");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['event_invited'];?>
</span>
                            <?php echo __("Invited");?>

                        </li>
                    </ul>
                </div>
            </div>
            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#basic" data-toggle="tab">
                        <i class="fa fa-cog fa-fw mr5"></i><strong class="pr5"><?php echo __("Event Info");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- basic tab -->
                <div class="tab-pane active" id="basic">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/events.php?do=edit_event&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['event_id'];?>
">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Admin");?>

                            </label>
                            <div class="col-sm-9 mt5">
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>

                                </a> <a target="_blank" data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
" class="btn btn-xs btn-default ml10">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Name Your Event");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['event_title'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Location");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="location" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['event_location'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Start Date");?>

                            </label>
                            <div class="col-sm-9">
                                <div class='input-group date js_datetimepicker'>
                                    <input type='text' class="form-control" name="start_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['data']->value['event_start_date']);?>
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
                                    <input type='text' class="form-control" name="end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['data']->value['event_end_date']);?>
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
                                <?php echo __("Select Privacy");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control selectpicker" name="privacy">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['event_privacy'] == "public") {?>selected<?php }?> value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __('Public Event');?>
</b><br><?php echo __('Anyone can see the event, its users and posts');?>
.
                                    </div></div>"><?php echo __("Public Event");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['event_privacy'] == "closed") {?>selected<?php }?> value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __('Closed Event');?>
</b><br><?php echo __('Only event users can see posts');?>
.
                                    </div></div>"><?php echo __("Closed Event");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['event_privacy'] == "secret") {?>selected<?php }?> value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __('Secret Event');?>
</b><br><?php echo __('Only invited users and event users can find the event');?>
.
                                    </div></div>"><?php echo __("Secret Event");?>
</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Category");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['categories'], 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                                        <option <?php if ($_smarty_tpl->tpl_vars['data']->value['event_category'] == $_smarty_tpl->tpl_vars['category']->value['category_id']) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("About");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['event_description'];?>
</textarea>
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
            </div>
            <!-- tabs content -->
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "categories") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['category_name'];?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="event_category" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/events/edit_category/<?php echo $_smarty_tpl->tpl_vars['row']->value['category_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add_category") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/events.php?do=add_category">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="category_name">
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit_category") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/events.php?do=edit_category&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['category_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="category_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['category_name'];?>
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
    <?php }?>
</div><?php }
}
