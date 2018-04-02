<?php
/* Smarty version 3.1.31, created on 2018-02-02 17:55:11
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.widgets.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a74a5ff12c2e3_44672704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30ed9002d3c5ffbe4640dd628ba554f010d0274e' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.widgets.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a74a5ff12c2e3_44672704 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New widget");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-puzzle-piece pr5 panel-icon"></i>
        <strong><?php echo __("Widgets");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
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
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Place");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {?><i class='fa fa-home fa-fw mr5'></i><?php echo __("Home  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "search") {?><i class='fa fa-search fa-fw mr5'></i><?php echo __("Search  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "people") {?><i class='fa fa-users fa-fw mr5'></i><?php echo __("Discover People  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {?><i class='fa fa-bell fa-fw mr5'></i><?php echo __("Notifications  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {?><i class='fa fa-file-powerpoint-o fa-fw mr5'></i><?php echo __("Post  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {?><i class='fa fa-picture-o fa-fw mr5'></i><?php echo __("Photo  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "directory") {?><i class='fa fa-th-list fa-fw mr5'></i><?php echo __("Directory  Page");
}?>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="widget" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/widgets/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['widget_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['widget_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home" data-content="<div class='option'><div class='icon'><i class='fa fa-home fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Home');?>
</b><br><?php echo __('Appears on the right panel of home page');?>
.
                            </div></div>"><?php echo __("Home");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "search") {?>selected<?php }?> value="search" data-content="<div class='option'><div class='icon'><i class='fa fa-search fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Search');?>
</b><br><?php echo __('Appears on the right panel of search page');?>
.
                            </div></div>"><?php echo __("Search");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "people") {?>selected<?php }?> value="people" data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Discover People');?>
</b><br><?php echo __('Appears on the right panel of discover people page');?>
.
                            </div></div>"><?php echo __("Discover People");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications" data-content="<div class='option'><div class='icon'><i class='fa fa-bell fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Notifications');?>
</b><br><?php echo __('Appears on the right panel of notifications page');?>
.
                            </div></div>"><?php echo __("Notifications");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post" data-content="<div class='option'><div class='icon'><i class='fa fa-file-powerpoint-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Post');?>
</b><br><?php echo __('Appears on the right panel of post page');?>
.
                            </div></div>"><?php echo __("Post");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo" data-content="<div class='option'><div class='icon'><i class='fa fa-picture-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Photo');?>
</b><br><?php echo __('Appears on the right panel of photo page');?>
.
                            </div></div>"><?php echo __("Photo");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "directory") {?>selected<?php }?> value="directory" data-content="<div class='option'><div class='icon'><i class='fa fa-th-list fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Directory');?>
</b><br><?php echo __('Appears on the right panel of directory');?>
.
                            </div></div>"><?php echo __("Directory");?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/widgets.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="place">
                            <option value="home" data-content="<div class='option'><div class='icon'><i class='fa fa-home fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Home');?>
</b><br><?php echo __('Appears on the right panel of home page');?>
.
                            </div></div>"><?php echo __("Home");?>
</option>

                            <option value="search" data-content="<div class='option'><div class='icon'><i class='fa fa-search fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Search');?>
</b><br><?php echo __('Appears on the right panel of search page');?>
.
                            </div></div>"><?php echo __("Search");?>
</option>

                            <option value="people" data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Discover People');?>
</b><br><?php echo __('Appears on the right panel of discover people page');?>
.
                            </div></div>"><?php echo __("Discover People");?>
</option>

                            <option value="notifications" data-content="<div class='option'><div class='icon'><i class='fa fa-bell fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Notifications');?>
</b><br><?php echo __('Appears on the right panel of notifications page');?>
.
                            </div></div>"><?php echo __("Notifications");?>
</option>

                            <option value="post" data-content="<div class='option'><div class='icon'><i class='fa fa-file-powerpoint-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Post');?>
</b><br><?php echo __('Appears on the right panel of post page');?>
.
                            </div></div>"><?php echo __("Post");?>
</option>

                            <option value="photo" data-content="<div class='option'><div class='icon'><i class='fa fa-picture-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Photo');?>
</b><br><?php echo __('Appears on the right panel of photo page');?>
.
                            </div></div>"><?php echo __("Photo");?>
</option>

                            <option value="directory" data-content="<div class='option'><div class='icon'><i class='fa fa-th-list fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Directory');?>
</b><br><?php echo __('Appears on the right panel of directory');?>
.
                            </div></div>"><?php echo __("Directory");?>
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
