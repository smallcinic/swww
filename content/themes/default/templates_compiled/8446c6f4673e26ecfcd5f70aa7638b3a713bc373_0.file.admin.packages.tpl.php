<?php
/* Smarty version 3.1.31, created on 2017-12-27 18:42:57
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.packages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43e9b12c9808_23861682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8446c6f4673e26ecfcd5f70aa7638b3a713bc373' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.packages.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43e9b12c9808_23861682 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.date_format.php';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Package");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-cubes pr5 panel-icon"></i>
        <strong><?php echo __("Pro Packages");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?> &rsaquo; <strong><?php echo __("Subscribers");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?> &rsaquo; <strong><?php echo __("Earnings");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="alert alert-info">
                <div class="icon">
                    <i class="fa fa-info-circle fa-2x"></i>
                </div>
                <div class="text pt5">
                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/payments"><?php echo __("Payments Settings");?>
</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Price");?>
</th>
                            <th><?php echo __("Period");?>
</th>
                            <th><?php echo __("Boost Posts");?>
</th>
                            <th><?php echo __("Boost Pages");?>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
</td>
                                <td>
                                    <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                                        <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
">
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

                                    </a>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['row']->value['price'];?>
</td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['period'] == 'life') {?>
                                        <?php echo __("Life Time");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['row']->value['period_num'];?>
 <?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value['period']);?>

                                    <?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['boost_posts'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value['boost_pages'];?>
</td>
                                <td>
                                    <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="package" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                    <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
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
            <form class="js_ajax-forms form-horizontal" data-url="admin/packages.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['package_id'];?>
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

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="price" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Paid Every");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-4">
                                <input class="form-control" name="period_num" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['period_num'];?>
">
                            </div>
                            <div class="col-xs-8">
                                <select class="form-control" name="period">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "day") {?>selected<?php }?> value="day"><?php echo __("Day");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "week") {?>selected<?php }?> value="week"><?php echo __("Week");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "month") {?>selected<?php }?> value="month"><?php echo __("Month");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "year") {?>selected<?php }?> value="year"><?php echo __("Year");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "life") {?>selected<?php }?> value="life"><?php echo __("Life Time");?>
</option>
                                </select>
                            </div>
                        </div>
                        <span class="help-block">
                            <?php echo __("For example every 15 days, 2 Months, 1 Year");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Color");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="input-group colorpicker-component js_colorpicker">
                            <input type="text" class="form-control" name="color" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['color'];?>
" />
                            <span class="input-group-addon"><i></i></span>
                        </div>
                        <span class="help-block">
                            <?php echo __("The theme color for this package");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Icon");?>

                    </label>
                    <div class="col-sm-9">
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['icon'] == '') {?>
                            <div class="x-image">
                                <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="icon" value="">
                            </div>
                        <?php } else { ?>
                            <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
')">
                                <button type="button" class="close js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                    <span>×</span>
                                </button>
                                <div class="loader loader_small x-hidden"></div>
                                <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                                <input type="hidden" class="js_x-image-input" name="icon" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['icon'];?>
">
                            </div>
                        <?php }?>
                        <span class="help-block">
                            <?php echo __("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Boost Posts Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="boost_posts_enabled">
                            <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['boost_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable boost posts feature");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Posts Boosts");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="boost_posts" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_posts'];?>
">
                        <span class="help-block">
                            <?php echo __("Max posts boosts allowed");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Boost Pages Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="boost_pages_enabled">
                            <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled" <?php if ($_smarty_tpl->tpl_vars['data']->value['boost_pages_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable boost pages feature");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Pages Boosts");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="boost_pages" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_pages'];?>
">
                        <span class="help-block">
                            <?php echo __("Max pages boosts allowed");?>

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
            <form class="js_ajax-forms form-horizontal" data-url="admin/packages.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Name");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="price">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Paid Every");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-xs-4">
                                <input class="form-control" name="period_num">
                            </div>
                            <div class="col-xs-8">
                                <select class="form-control" name="period">
                                    <option value="day"><?php echo __("Day");?>
</option>
                                    <option value="week"><?php echo __("Week");?>
</option>
                                    <option value="month"><?php echo __("Month");?>
</option>
                                    <option value="year"><?php echo __("Year");?>
</option>
                                    <option value="life"><?php echo __("Life Time");?>
</option>
                                </select>
                            </div>
                        </div>
                        <span class="help-block">
                            <?php echo __("For example every 15 days, 2 Months, 1 Year");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Color");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="input-group colorpicker-component js_colorpicker">
                            <input type="text" class="form-control" name="color" />
                            <span class="input-group-addon"><i></i></span>
                        </div>
                        <span class="help-block">
                            <?php echo __("The theme color for this package");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Icon");?>

                    </label>
                    <div class="col-sm-9">
                        <div class="x-image">
                            <button type="button" class="close x-hidden js_x-image-remover" title='<?php echo __("Remove");?>
'>
                                <span>×</span>
                            </button>
                            <div class="loader loader_small x-hidden"></div>
                            <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
                            <input type="hidden" class="js_x-image-input" name="icon" value="">
                        </div>
                        <span class="help-block">
                            <?php echo __("The perfect size for icon should be (wdith: 60px & height: 60px)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Boost Posts Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="boost_posts_enabled">
                            <input type="checkbox" name="boost_posts_enabled" id="boost_posts_enabled">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable boost posts feature");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Posts Boosts");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="boost_posts">
                        <span class="help-block">
                            <?php echo __("Max posts boosts allowed");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Boost Pages Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="boost_pages_enabled">
                            <input type="checkbox" name="boost_pages_enabled" id="boost_pages_enabled">
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable boost pages feature");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Pages Boosts");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="boost_pages">
                        <span class="help-block">
                            <?php echo __("Max pages boosts allowed");?>

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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "subscribers") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("User");?>
</th>
                            <th><?php echo __("Package");?>
</th>
                            <th><?php echo __("Subscription Date");?>
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
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
</a></td>
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
                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['package_id'];?>
">
                                    <img class="tbl-image" src="<?php echo $_smarty_tpl->tpl_vars['row']->value['icon'];?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

                                </a>
                            </td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['user_subscription_date'],"%e %B %Y");?>
</td>
                            <td>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "earnings") {?>
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="stat-panel primary">
                        <div class="stat-cell">
                            <i class="fa fa-usd bg-icon"></i>
                            <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['total_earnings']->value,2);?>
</span><br>
                            <span class="text-lg"><?php echo __("Total earnings");?>
</span><br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="stat-panel info">
                        <div class="stat-cell">
                            <i class="fa fa-usd bg-icon"></i>
                            <span class="text-xlg"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['month_earnings']->value,2);?>
</span><br>
                            <span class="text-lg"><?php echo __("This month earnings");?>
</span><br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("Package");?>
</th>
                            <th><?php echo __("Total Sales");?>
</th>
                            <th><?php echo __("Total Earnings");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['value']->value['sales'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['value']->value['earnings'],2);?>
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

            <div id="admin-chart-earnings" class="admin-chart mt20"></div>
        </div>
    <?php }?>
</div><?php }
}
