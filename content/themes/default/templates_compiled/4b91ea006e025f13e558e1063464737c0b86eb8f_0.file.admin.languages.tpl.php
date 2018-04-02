<?php
/* Smarty version 3.1.31, created on 2018-02-02 17:54:21
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.languages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a74a5cd2c1344_28540116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b91ea006e025f13e558e1063464737c0b86eb8f' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.languages.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a74a5cd2c1344_28540116 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/languages/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Language");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-globe pr5 panel-icon"></i>
        <strong><?php echo __("Languages");?>
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
                            <th><?php echo __("Code");?>
</th>
                            <th><?php echo __("Flag");?>
</th>
                            <th><?php echo __("Dir");?>
</th>
                            <th><?php echo __("Default");?>
</th>
                            <th><?php echo __("Enabled");?>
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
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['code'];?>
</td>
                            <td><span class="flag-icon flag-icon-<?php echo $_smarty_tpl->tpl_vars['row']->value['flag_icon'];?>
"></span></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dir'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['default']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['enabled']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="language" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/languages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['language_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/languages.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['language_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="default">
                            <input type="checkbox" name="default" id="default" <?php if ($_smarty_tpl->tpl_vars['data']->value['default']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Make it the default language of the site");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="enabled">
                            <input type="checkbox" name="enabled" id="enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Make it enbaled so the user can translate the site to it");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="code" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
">
                        <span class="help-block">
                            <?php echo __("Language country_code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Native Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                        <span class="help-block">
                            <?php echo __("The native name of this language");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Flag Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="flag_icon" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['flag_icon'];?>
">
                        <span class="help-block">
                            <?php echo __("The country flag code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_3166-1"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Direction");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="dir">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['dir'] == "LTR") {?>selected<?php }?> value="LTR">LTR</option>
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['dir'] == "RTL") {?>selected<?php }?> value="RTL">RTL</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("The direction of this language 'Left To Right' or 'Right To Left'");?>

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
            <form class="js_ajax-forms form-horizontal" data-url="admin/languages.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Default");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="default">
                            <input type="checkbox" name="default" id="default">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Make it the default language of the site");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="enabled">
                            <input type="checkbox" name="enabled" id="enabled">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Make it enbaled so the user can translate the site to it");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="code">
                        <span class="help-block">
                            <?php echo __("Language country_code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://msdn.microsoft.com/en-us/library/ee825488(v=cs.20).aspx"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Native Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                        <span class="help-block">
                            <?php echo __("The native name of this language");?>

                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Flag Code");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="flag_icon">
                        <span class="help-block">
                            <?php echo __("The country flag code");?>
 <?php echo __("For Example:");?>
 <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_3166-1"><?php echo __("Click Here");?>
</a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Direction");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control" name="dir">
                            <option value="LTR">LTR</option>
                            <option value="RTL">RTL</option>
                        </select>
                        <span class="help-block">
                            <?php echo __("The direction of this language 'Left To Right' or 'Right To Left'");?>

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
