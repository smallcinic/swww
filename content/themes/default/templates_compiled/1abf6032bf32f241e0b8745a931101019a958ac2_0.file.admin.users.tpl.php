<?php
/* Smarty version 3.1.31, created on 2017-12-27 18:12:20
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43e284839558_49222782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1abf6032bf32f241e0b8745a931101019a958ac2' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.users.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43e284839558_49222782 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.capitalize.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.date_format.php';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
            <div class="pull-right flip">
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" class="btn btn-info">
                    <i class="fa fa-television fa-fw mr5"></i><?php echo __("View Profile");?>

                </a>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/banned_ips" class="btn btn-danger">
                    <i class="fa fa-user-times"></i> <?php echo __("Manage Banned IPs");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-user pr5 panel-icon"></i>
        <strong><?php echo __("Users");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value != '' && $_smarty_tpl->tpl_vars['sub_view']->value != "edit") {?> &rsaquo; <strong><?php echo __(smarty_modifier_capitalize($_smarty_tpl->tpl_vars['sub_view']->value));?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '' || $_smarty_tpl->tpl_vars['sub_view']->value == "admins" || $_smarty_tpl->tpl_vars['sub_view']->value == "moderators" || $_smarty_tpl->tpl_vars['sub_view']->value == "online" || $_smarty_tpl->tpl_vars['sub_view']->value == "banned") {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Name");?>
</th>
                            <th><?php echo __("Username");?>
</th>
                            <th><?php echo __("Joined");?>
</th>
                            <th><?php echo __("Activated");?>
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
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>
" target="_blank">
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value['user_name'];?>

                                </a>
                            </td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['user_registered'],"%e %B %Y");?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['user_activated']) {?>
                                    <span class="label label-success"><?php echo __("Yes");?>
</span>
                                <?php } else { ?>
                                    <span class="label label-danger"><?php echo __("No");?>
</span>
                                <?php }?>
                            </td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
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
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-offset-3 col-xs-6 col-sm-offset-0 col-sm-2 mb10">
                    <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_picture'];?>
">
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
</span>
                            <?php echo __("User ID");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_registered'],"%e %B %Y");?>
</span>
                            <?php echo __("Joined");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_last_login'],"%e %B %Y");?>
</span>
                            <?php echo __("Last Login");?>

                        </li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-5 mb10">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['friends'];?>
</span>
                            <?php echo __("Friends");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['followings'];?>
</span>
                            <?php echo __("Followings");?>

                        </li>
                        <li class="list-group-item">
                            <span class="badge"><?php echo $_smarty_tpl->tpl_vars['data']->value['followers'];?>
</span>
                            <?php echo __("Followers");?>

                        </li>
                    </ul>
                </div>
            </div>

            <!-- tabs nav -->
            <ul class="nav nav-tabs mb20">
                <li class="active">
                    <a href="#account" data-toggle="tab">
                        <i class="fa fa-cog fa-fw mr5"></i><strong class="pr5"><?php echo __("Account");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#profile" data-toggle="tab">
                        <i class="fa fa-user fa-fw mr5"></i><strong class="pr5"><?php echo __("Profile");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#privacy" data-toggle="tab">
                        <i class="fa fa-lock fa-fw mr5"></i><strong class="pr5"><?php echo __("Privacy");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#security" data-toggle="tab">
                        <i class="fa fa-shield fa-fw mr5"></i><strong class="pr5"><?php echo __("Security");?>
</strong>
                    </a>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                    <li>
                        <a href="#membership" data-toggle="tab">
                            <i class="fa fa-id-card-o fa-fw mr5"></i><strong class="pr5"><?php echo __("Membership");?>
</strong>
                        </a>
                    </li>
                <?php }?>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- account tab -->
                <div class="tab-pane active" id="account">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_account">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Verified User");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="user_verified">
                                    <input type="checkbox" name="user_verified" id="user_verified" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_verified']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Banned");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="user_banned">
                                    <input type="checkbox" name="user_banned" id="user_banned" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_banned']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Email Activated");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="user_activated">
                                    <input type="checkbox" name="user_activated" id="user_activated" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_activated']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("User Group");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="user_group">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '1') {?>selected<?php }?>>
                                        <?php echo __("Administrators");?>

                                    </option>
                                    <option value="2" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '2') {?>selected<?php }?>>
                                        <?php echo __("Moderators");?>

                                    </option>
                                    <option value="3" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_group'] == '3') {?>selected<?php }?>>
                                        <?php echo __("Users");?>

                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Username");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/</span>
                                    <input type="text" class="form-control" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Email Address");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_email'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Password");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="user_password">
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
                <!-- account tab -->

                <!-- profile tab -->
                <div class="tab-pane" id="profile">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_profile">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("First Name");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="user_firstname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_firstname'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Last Name");?>

                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" name="user_lastname" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_lastname'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("I am");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="user_gender">
                                    <option value="none"><?php echo __("Select Sex");?>
:</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_gender'] == "male") {?>selected<?php }?> value="male">
                                        <?php echo __("Male");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_gender'] == "female") {?>selected<?php }?> value="female">
                                        <?php echo __("Female");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Birthdate");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="row">
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_month">
                                            <option value="none"><?php echo __("Select Month");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
</option>
                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_day">
                                            <option value="none"><?php echo __("Select Day");?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                            <?php }
}
?>

                                        </select>
                                    </div>
                                    <div class="col-xs-4">
                                        <select class="form-control" name="birth_year">
                                            <option value="none"><?php echo __("Select Year");?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2015+1 - (1905) : 1905-(2015)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1905, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</option>
                                            <?php }
}
?>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Relationship Status");?>

                            </label>
                            <div class="col-sm-9">
                                <select name="user_relationship" class="form-control">
                                    <option value="none"><?php echo __("Select Relationship");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo __("Single");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo __("In a relationship");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo __("Married");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo __("It's complicated");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo __("Separated");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo __("Divorced");?>
</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo __("Widowed");?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("About Me");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="user_biography"><?php echo $_smarty_tpl->tpl_vars['data']->value['user_biography'];?>
</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Website");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_website" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_website'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Work Title");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_work_title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_title'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Work Place");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_work_place" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_work_place'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Current City");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_current_city" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_current_city'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Hometown");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_hometown" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_hometown'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Major");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_major" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_major'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("School");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_school" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_school'];?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Class");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="user_edu_class" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_edu_class'];?>
">
                            </div>
                        </div>
                        <div class="divider"></div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-facebook-square fa-2x" style="color: #3B579D"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_facebook'];?>
" placeholder="<?php echo __('Facebook Profile URL');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-twitter-square fa-2x" style="color: #55ACEE"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_twitter'];?>
" placeholder="<?php echo __('Twitter Profile URL');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-google-plus-square fa-2x" style="color: #DC4A38"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="google" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_google'];?>
" placeholder="<?php echo __('Google+ Profile URL');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-youtube fa-2x" style="color: #E62117"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_youtube'];?>
" placeholder="<?php echo __('YouTube Profile URL');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-instagram fa-2x" style="color: #3f729b"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_instagram'];?>
" placeholder="<?php echo __('Instagram Profile URL');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-linkedin-square fa-2x" style="color: #1A84BC"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_linkedin'];?>
" placeholder="<?php echo __('LinkedIn Profile URL');?>
">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-vk fa-2x" style="color: #527498"></i>
                            </label>
                            <div class="col-sm-9 mt5">
                                <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_social_vkontakte'];?>
" placeholder="<?php echo __('Vkontakte Profile URL');?>
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
                <!-- profile tab -->

                <!-- privacy tab -->
                <div class="tab-pane" id="privacy">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_privacy">
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_chat">
                                <?php echo __("Chat");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_chat" id="privacy_chat">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_chat_enabled'] == 0) {?>selected<?php }?> value="0">
                                        <?php echo __("Offline");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_chat_enabled'] == 1) {?>selected<?php }?> value="1">
                                        <?php echo __("Online");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_wall">
                                <?php echo __("Who can post on your wall");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_wall" id="privacy_wall">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_wall'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_wall'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_wall'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_birthdate">
                                <?php echo __("Who can see your");?>
 <?php echo __("birthdate");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_birthdate" id="privacy_birthdate">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_birthdate'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_relationship">
                                <?php echo __("Who can see your");?>
 <?php echo __("relationship");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_relationship" id="privacy_relationship">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_relationship'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_relationship'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_relationship'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_basic">
                                <?php echo __("Who can see your");?>
 <?php echo __("basic info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_basic" id="privacy_basic">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_basic'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_basic'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_basic'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_work">
                                <?php echo __("Who can see your");?>
 <?php echo __("work info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_work" id="privacy_work">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_work'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_location">
                                <?php echo __("Who can see your");?>
 <?php echo __("location info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_location" id="privacy_location">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_location'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_education">
                                <?php echo __("Who can see your");?>
 <?php echo __("education info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_education" id="privacy_education">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_education'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_other">
                                <?php echo __("Who can see your");?>
 <?php echo __("other info");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_other" id="privacy_other">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_other'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_other'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_other'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_friends">
                                <?php echo __("Who can see your");?>
 <?php echo __("friends");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_friends" id="privacy_friends">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_photos">
                                <?php echo __("Who can see your");?>
 <?php echo __("photos");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_photos" id="privacy_photos">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_photos'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_photos'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_photos'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_pages">
                                <?php echo __("Who can see your");?>
 <?php echo __("liked pages");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_pages" id="privacy_pages">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_groups">
                                <?php echo __("Who can see your");?>
 <?php echo __("joined groups");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_groups" id="privacy_groups">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-5 control-label" for="privacy_events">
                                <?php echo __("Who can see your");?>
 <?php echo __("joined events");?>

                            </label>
                            <div class="col-sm-3">
                                <select class="form-control" name="privacy_events" id="privacy_events">
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_events'] == "public") {?>selected<?php }?> value="public">
                                        <?php echo __("Everyone");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_events'] == "friends") {?>selected<?php }?> value="friends">
                                        <?php echo __("Friends");?>

                                    </option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['data']->value['user_privacy_events'] == "me") {?>selected<?php }?> value="me">
                                        <?php echo __("Just Me");?>

                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-7 col-sm-offset-5">
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
                <!-- privacy tab -->

                <!-- security tab -->
                <div class="tab-pane" id="security">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover js_dataTable">
                            <thead>
                                <tr>
                                    <th><?php echo __("ID");?>
</th>
                                    <th><?php echo __("Browser");?>
</th>
                                    <th><?php echo __("OS");?>
</th>
                                    <th><?php echo __("Date");?>
</th>
                                    <th><?php echo __("IP");?>
</th>
                                    <th><?php echo __("Actions");?>
</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['sessions'], 'session');
$_smarty_tpl->tpl_vars['session']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->iteration++;
$__foreach_session_1_saved = $_smarty_tpl->tpl_vars['session'];
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['session']->iteration;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_browser'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_os'];?>
</td>
                                        <td>
                                            <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
"><?php echo $_smarty_tpl->tpl_vars['session']->value['session_date'];?>
</span>
                                        </td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_ip'];?>
</td>
                                        <td>
                                            <button data-toggle="tooltip" data-placement="top" title='<?php echo __("End Session");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="session" data-id="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_id'];?>
">
                                                <i class="fa fa-trash-o"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php
$_smarty_tpl->tpl_vars['session'] = $__foreach_session_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- security tab -->

                <!-- membership tab -->
                <div class="tab-pane" id="membership">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/users.php?id=<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
&do=edit_membership">
                        
                        <?php if ($_smarty_tpl->tpl_vars['data']->value['user_subscribed']) {?>
                            <div class="form-group mb0">
                                <label class="col-sm-3 control-label text-left">
                                    <?php echo __("Package");?>

                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['data']->value['price'];?>
 
                                        <?php if ($_smarty_tpl->tpl_vars['data']->value['period'] == "life") {
echo __("Life Time");
} else {
echo __("per");?>
 <?php if ($_smarty_tpl->tpl_vars['data']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['data']->value['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['data']->value['period']));
}?>)
                                    </p>
                                </div>
                            </div>
                            <div class="form-group mb0">
                                <label class="col-sm-3 control-label text-left">
                                    <?php echo __("Subscription Date");?>

                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['user_subscription_date'],"%e %B %Y");?>

                                    </p>
                                </div>
                            </div>
                            <div class="form-group mb0">
                                <label class="col-sm-3 control-label text-left">
                                    <?php echo __("Expiration Date");?>

                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['data']->value['subscription_timeleft'] > 0) {
echo __("Remining");?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value['subscription_timeleft'];?>
 <?php echo __("Days");
} else {
echo __("Expired");
}?>)
                                    </p>
                                </div>
                            </div>
                            <div class="form-group mb0">
                                <label class="col-sm-3 control-label text-left">
                                    <?php echo __("Boosted Posts");?>

                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_posts'];?>

                                    </p>
                                    
                                    <div class="progress mb5">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['data']->value['user_boosted_posts']/$_smarty_tpl->tpl_vars['data']->value['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['data']->value['user_boosted_posts']/$_smarty_tpl->tpl_vars['data']->value['boost_pages'])*100;?>
%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label text-left">
                                    <?php echo __("Boosted Pages");?>

                                </label>
                                <div class="col-sm-9">
                                    <p class="form-control-static">
                                        <?php echo $_smarty_tpl->tpl_vars['data']->value['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->tpl_vars['data']->value['boost_pages'];?>

                                    </p>
                                    
                                    <div class="progress mb5">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['data']->value['user_boosted_pages']/$_smarty_tpl->tpl_vars['data']->value['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['data']->value['user_boosted_pages']/$_smarty_tpl->tpl_vars['data']->value['boost_pages'])*100;?>
%"></div>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Upgrade Package");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="package">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packages']->value, 'package');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['package']->value) {
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['package']->value['package_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['user_package'] == $_smarty_tpl->tpl_vars['package']->value['package_id']) {?>selected<?php }?>>
                                            <?php echo $_smarty_tpl->tpl_vars['package']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['package']->value['price'];?>
 
                                            <?php if ($_smarty_tpl->tpl_vars['package']->value['period'] == "life") {
echo __("Life Time");
} else {
echo __("per");?>
 <?php if ($_smarty_tpl->tpl_vars['package']->value['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['package']->value['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['package']->value['period']));
}?>)
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
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                <?php if ($_smarty_tpl->tpl_vars['data']->value['user_subscribed']) {?>
                                    <button type="button" class="btn btn-danger js_admin-deleter" data-handle="user_package" data-id="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_id'];?>
">
                                        <i class="fa fa-trash-o"></i> <?php echo __("Remove Package");?>

                                    </button>
                                <?php }?>
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
                <!-- membership tab -->
            </div>
            <!-- tabs content -->
        </div>
    <?php }?>
</div>
<?php }
}
