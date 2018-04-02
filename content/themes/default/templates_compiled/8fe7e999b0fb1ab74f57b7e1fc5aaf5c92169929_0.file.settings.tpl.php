<?php
/* Smarty version 3.1.31, created on 2017-12-28 12:42:54
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a44e6cea73209_75041414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe7e999b0fb1ab74f57b7e1fc5aaf5c92169929' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/settings.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__custom_fields.tpl' => 5,
    'file:__feeds_user.tpl' => 2,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a44e6cea73209_75041414 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-3 offcanvas-sidebar">
            <div class="panel panel-default">
                <div class="panel-body with-nav">
                    <ul class="side-nav">
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings"><i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Account Settings");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile"><i class="fa fa-user fa-fw fa-lg pr10"></i> <?php echo __("Edit Profile");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy"><i class="fa fa-lock fa-fw fa-lg pr10"></i> <?php echo __("Privacy Settings");?>
</a>
                        </li>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "security") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/security"><i class="fa fa-shield fa-fw fa-lg pr10"></i> <?php echo __("Security Settings");?>
</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['email_notifications']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes'] || $_smarty_tpl->tpl_vars['system']->value['email_post_comments'] || $_smarty_tpl->tpl_vars['system']->value['email_post_shares'] || $_smarty_tpl->tpl_vars['system']->value['email_wall_posts'] || $_smarty_tpl->tpl_vars['system']->value['email_mentions'] || $_smarty_tpl->tpl_vars['system']->value['email_profile_visits'] || $_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "notifications") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/notifications"><i class="fa fa-envelope-open-o fa-fw fa-lg pr10"></i> <?php echo __("Email Notifications");?>
</a>
                                </li>
                            <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['google_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled'] || $_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                                <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>class="active"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/linked"><i class="fa fa-share-alt fa-fw fa-lg pr10"></i> <?php echo __("Linked Accounts");?>
</a>
                                </li>
                            <?php }?>
                        <?php }?>
                        <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>class="active"<?php }?>>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/blocking"><i class="fa fa-minus-circle fa-fw fa-lg pr10"></i> <?php echo __("Blocking");?>
</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "membership") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/membership"><i class="fa fa-id-card-o fa-fw fa-lg pr10"></i> <?php echo __("Membership");?>
</a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliates_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/affiliates"><i class="fa fa-exchange fa-fw fa-lg pr10"></i> <?php echo __("Affiliates");?>
</a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/verification"><i class="fa fa-check-circle fa-fw fa-lg pr10"></i> <?php echo __("Verification");?>
</a>
                            </li>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['delete_accounts_enabled']) {?>
                            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "delete") {?>class="active"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/delete"><i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Account");?>
</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-9 offcanvas-mainbar">
            <div class="panel panel-default">

                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-cog pr5 panel-icon"></i>
                            <strong><?php echo __("Account Settings");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#username" data-toggle="tab">
                                    <i class="fa fa-cog fa-fw mr5"></i><strong class="pr5"><?php echo __("Username");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#email" data-toggle="tab">
                                    <i class="fa fa-envelope-o fa-fw mr5"></i><strong class="pr5"><?php echo __("Email");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#password" data-toggle="tab">
                                    <i class="fa fa-key fa-fw mr5"></i><strong class="pr5"><?php echo __("Password");?>
</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <!-- username tab -->
                        <div class="tab-pane active" id="username">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=username">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Username");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/</span>
                                            <input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
">
                                        </div>
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
                        <!-- username tab -->

                        <!-- email tab -->
                        <div class="tab-pane" id="email">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=email">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Email Address");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
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
                        <!-- email tab -->

                        <!-- password tab -->
                        <div class="tab-pane" id="password">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=password">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Current");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="current">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("New");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="new">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Re-type new");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" name="confirm">
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
                        <!-- password tab -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "profile") {?>
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-user pr5 panel-icon"></i>
                            <strong><?php echo __("Edit Profile");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#basic" data-toggle="tab">
                                    <i class="fa fa-user fa-fw mr5"></i><strong class="pr5"><?php echo __("Basic");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#work" data-toggle="tab">
                                    <i class="fa fa-briefcase fa-fw mr5"></i><strong class="pr5"><?php echo __("Work");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#location" data-toggle="tab">
                                    <i class="fa fa-map-marker fa-fw mr5"></i><strong class="pr5"><?php echo __("Location");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#education" data-toggle="tab">
                                    <i class="fa fa-graduation-cap fa-fw mr5"></i><strong class="pr5"><?php echo __("Education");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#social" data-toggle="tab">
                                    <i class="fa fa-facebook-official fa-fw mr5"></i><strong class="pr5"><?php echo __("Social Links");?>
</strong>
                                </a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                                <li>
                                    <a href="#other" data-toggle="tab">
                                        <i class="fa fa-plus fa-fw mr5"></i><strong class="pr5"><?php echo __("Other");?>
</strong>
                                    </a>
                                </li>
                            <?php }?>
                        </ul>
                        <!-- panel nav -->
                    </div>

                    <div class="panel-body tab-content">
                        <!-- basic tab -->
                        <div class="tab-pane active" id="basic">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=basic">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("First Name");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Last Name");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="lastname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("I am");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <select name="gender" class="form-control">
                                            <option value="none"><?php echo __("Select Sex");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "male") {?>selected<?php }?> value="male"><?php echo __("Male");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_gender'] == "female") {?>selected<?php }?> value="female"><?php echo __("Female");?>
</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Birthdate");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <select class="form-control" name="birth_month">
                                                    <option value="none"><?php echo __("Select Month");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '1') {?>selected<?php }?> value="1"><?php echo __("Jan");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '2') {?>selected<?php }?> value="2"><?php echo __("Feb");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '3') {?>selected<?php }?> value="3"><?php echo __("Mar");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '4') {?>selected<?php }?> value="4"><?php echo __("Apr");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '5') {?>selected<?php }?> value="5"><?php echo __("May");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '6') {?>selected<?php }?> value="6"><?php echo __("Jun");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '7') {?>selected<?php }?> value="7"><?php echo __("Jul");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '8') {?>selected<?php }?> value="8"><?php echo __("Aug");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '9') {?>selected<?php }?> value="9"><?php echo __("Sep");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '10') {?>selected<?php }?> value="10"><?php echo __("Oct");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '11') {?>selected<?php }?> value="11"><?php echo __("Nov");?>
</option>
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['month'] == '12') {?>selected<?php }?> value="12"><?php echo __("Dec");?>
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
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['day'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
                                                    <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_birthdate_parsed']['year'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
                                        <select name="relationship" class="form-control">
                                            <option value="none"><?php echo __("Select Relationship");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "single") {?>selected<?php }?> value="single"><?php echo __("Single");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "relationship") {?>selected<?php }?> value="relationship"><?php echo __("In a relationship");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "married") {?>selected<?php }?> value="married"><?php echo __("Married");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "complicated") {?>selected<?php }?> value="complicated"><?php echo __("It's complicated");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "separated") {?>selected<?php }?> value="separated"><?php echo __("Separated");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "divorced") {?>selected<?php }?> value="divorced"><?php echo __("Divorced");?>
</option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_relationship'] == "widowed") {?>selected<?php }?> value="widowed"><?php echo __("Widowed");?>
</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("About Me");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="biography"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_biography'];?>
</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Website");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="website" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_website'];?>
">
                                    </div>
                                </div>
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>

                                <?php }?>
                                <!-- custom fields -->
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
                        <!-- basic tab -->

                        <!-- work tab -->
                        <div class="tab-pane" id="work">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=work">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Work Title");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="work_title" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_title'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Work Place");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="work_place" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_work_place'];?>
">
                                    </div>
                                </div>
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['work'],'_registration'=>false), 0, true);
?>

                                <?php }?>
                                <!-- custom fields -->
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
                        <!-- work tab -->

                        <!-- location tab -->
                        <div class="tab-pane" id="location">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=location">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Current City");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control js_geocomplete" name="city" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_current_city'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Hometown");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control js_geocomplete" name="hometown" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_hometown'];?>
">
                                    </div>
                                </div>
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['location']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['location'],'_registration'=>false), 0, true);
?>

                                <?php }?>
                                <!-- custom fields -->
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
                        <!-- location tab -->

                        <!-- education tab -->
                        <div class="tab-pane" id="education">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=education">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("School");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="edu_school" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_school'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Major");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="edu_major" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_major'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Class");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="edu_class" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_edu_class'];?>
">
                                    </div>
                                </div>
                                <!-- custom fields -->
                                <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['education'],'_registration'=>false), 0, true);
?>

                                <?php }?>
                                <!-- custom fields -->
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
                        <!-- education tab -->

                        <!-- social tab -->
                        <div class="tab-pane" id="social">
                            <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=social">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-facebook-square fa-2x" style="color: #3B579D"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="facebook" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_facebook'];?>
" placeholder="<?php echo __('Facebook Profile URL');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-twitter-square fa-2x" style="color: #55ACEE"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_twitter'];?>
" placeholder="<?php echo __('Twitter Profile URL');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-google-plus-square fa-2x" style="color: #DC4A38"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="google" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_google'];?>
" placeholder="<?php echo __('Google+ Profile URL');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-youtube fa-2x" style="color: #E62117"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="youtube" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_youtube'];?>
" placeholder="<?php echo __('YouTube Profile URL');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-instagram fa-2x" style="color: #3f729b"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="instagram" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_instagram'];?>
" placeholder="<?php echo __('Instagram Profile URL');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-linkedin-square fa-2x" style="color: #1A84BC"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_linkedin'];?>
" placeholder="<?php echo __('LinkedIn Profile URL');?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <i class="fa fa-vk fa-2x" style="color: #527498"></i>
                                    </label>
                                    <div class="col-sm-9 mt5">
                                        <input type="text" class="form-control" name="vkontakte" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_social_vkontakte'];?>
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
                        <!-- social tab -->

                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                            <!-- other tab -->
                            <div class="tab-pane" id="other">
                                <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=other">
                                    <!-- custom fields -->
                                    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['other'],'_registration'=>false), 0, true);
?>

                                    <?php }?>
                                    <!-- custom fields -->
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
                            <!-- other tab -->
                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "privacy") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-lock pr5 panel-icon"></i>
                        <strong><?php echo __("Privacy Settings");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=privacy">
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>
                                <div class="form-group">
                                    <label class="col-sm-5 control-label" for="privacy_chat">
                                        <?php echo __("Chat");?>

                                    </label>
                                    <div class="col-sm-3">
                                        <select class="form-control" name="privacy_chat" id="privacy_chat">
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'] == 0) {?>selected<?php }?> value="0">
                                                <?php echo __("Offline");?>

                                            </option>
                                            <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'] == 1) {?>selected<?php }?> value="1">
                                                <?php echo __("Online");?>

                                            </option>
                                        </select>
                                    </div>
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <label class="col-sm-5 control-label" for="privacy_wall">
                                    <?php echo __("Who can post on your wall");?>

                                </label>
                                <div class="col-sm-3">
                                    <select class="form-control" name="privacy_wall" id="privacy_wall">
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_wall'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_birthdate'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_relationship'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_basic'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_work'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_location'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_education'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_other'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_friends'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_photos'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_pages'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_groups'] == "me") {?>selected<?php }?> value="me">
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
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "public") {?>selected<?php }?> value="public">
                                            <?php echo __("Everyone");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "friends") {?>selected<?php }?> value="friends">
                                            <?php echo __("Friends");?>

                                        </option>
                                        <option <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_privacy_events'] == "me") {?>selected<?php }?> value="me">
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
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "security") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-shield pr5 panel-icon"></i>
                        <strong><?php echo __("Security Settings");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sessions']->value, 'session');
$_smarty_tpl->tpl_vars['session']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['session']->value) {
$_smarty_tpl->tpl_vars['session']->iteration++;
$__foreach_session_0_saved = $_smarty_tpl->tpl_vars['session'];
?>
                                        <tr <?php if ($_smarty_tpl->tpl_vars['session']->value['session_token'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session']) {?>class="success"<?php }?>>
                                            <td><?php echo $_smarty_tpl->tpl_vars['session']->iteration;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['session']->value['user_browser'];?>
 <?php if ($_smarty_tpl->tpl_vars['session']->value['session_token'] == $_smarty_tpl->tpl_vars['user']->value->_data['active_session']) {?><span class="label label-info"><?php echo __("Active Session");?>
</span><?php }?></td>
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
' class="btn btn-xs btn-danger js_session-deleter" data-id="<?php echo $_smarty_tpl->tpl_vars['session']->value['session_id'];?>
">
                                                    <i class="fa fa-trash-o"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
$_smarty_tpl->tpl_vars['session'] = $__foreach_session_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "notifications") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-envelope-open-o pr5 panel-icon"></i>
                        <strong><?php echo __("Email Notifications");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <form class="js_ajax-forms form-horizontal" data-url="users/settings.php?edit=notifications">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">
                                    <?php echo __("Email Me When");?>

                                </label>
                                <div class="col-sm-9">
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_likes']) {?>checked<?php }?>>
                                            <label for="email_post_likes"><?php echo __("Someone liked my post");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_comments']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_comments']) {?>checked<?php }?>>
                                            <label for="email_post_comments"><?php echo __("Someone commented on my post");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_shares']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_post_shares']) {?>checked<?php }?>>
                                            <label for="email_post_shares"><?php echo __("Someone shared my post");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_wall_posts']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_wall_posts']) {?>checked<?php }?>>
                                            <label for="email_wall_posts"><?php echo __("Someone posted on my timeline");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_mentions']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_mentions']) {?>checked<?php }?>>
                                            <label for="email_mentions"><?php echo __("Someone mentioned me");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_profile_visits']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_profile_visits']) {?>checked<?php }?>>
                                            <label for="email_profile_visits"><?php echo __("Someone visited my profile");?>
</label>
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>
                                        <div class="checkbox checkbox-primary">
                                            <input type="checkbox" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['email_friend_requests']) {?>checked<?php }?>>
                                            <label for="email_friend_requests"><?php echo __("Someone sent me/accepted my friend requset");?>
</label>
                                        </div>
                                    <?php }?>
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
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "linked") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-share-alt pr5 panel-icon"></i>
                        <strong><?php echo __("Linked Accounts");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <ul>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>
                                <li class="feeds-item">
                                    <div class="data-container">
                                        <div class="data-avatar">
                                            <i class="fa fa-facebook-square" style="color: #3B579D"></i>
                                        </div>
                                        <div class="data-content">
                                            <div class="pull-right flip">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/facebook"><?php echo __("Disconnect");?>
</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/facebook"><?php echo __("Connect");?>
</a>
                                                <?php }?>
                                            </div>
                                            <div>
                                                <div class="name mt5 text-primary">
                                                    <?php echo __("Facebook");?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['facebook_connected']) {?>
                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Facebook");?>

                                                <?php } else { ?>
                                                <?php echo __("Connect your account to");?>
 <?php echo __("Facebook");?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>
                                <li class="feeds-item">
                                    <div class="data-container">
                                        <div class="data-avatar">
                                            <i class="fa fa-twitter-square" style="color: #55ACEE"></i>
                                        </div>
                                        <div class="data-content">
                                            <div class="pull-right flip">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/twitter"><?php echo __("Disconnect");?>
</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/twitter"><?php echo __("Connect");?>
</a>
                                                <?php }?>
                                            </div>
                                            <div>
                                                <div class="name mt5 text-primary">
                                                    <?php echo __("Twitter");?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['twitter_connected']) {?>
                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Twitter");?>

                                                <?php } else { ?>
                                                <?php echo __("Connect your account to");?>
 <?php echo __("Twitter");?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>
                                <li class="feeds-item">
                                    <div class="data-container">
                                        <div class="data-avatar">
                                            <i class="fa fa-google-plus-square" style="color: #DC4A38"></i>
                                        </div>
                                        <div class="data-content">
                                            <div class="pull-right flip">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/google"><?php echo __("Disconnect");?>
</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/google"><?php echo __("Connect");?>
</a>
                                                <?php }?>
                                            </div>
                                            <div>
                                                <div class="name mt5 text-primary">
                                                    <?php echo __("Google");?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['google_connected']) {?>
                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Google");?>

                                                <?php } else { ?>
                                                <?php echo __("Connect your account to");?>
 <?php echo __("Google");?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>
                                <li class="feeds-item">
                                    <div class="data-container">
                                        <div class="data-avatar">
                                            <i class="fa fa-instagram" style="color: #3f729b"></i>
                                        </div>
                                        <div class="data-content">
                                            <div class="pull-right flip">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['instagram_connected']) {?>
                                                    <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/instagram"><?php echo __("Disconnect");?>
</a>
                                                <?php } else { ?>
                                                    <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/instagram"><?php echo __("Connect");?>
</a>
                                                <?php }?>
                                            </div>
                                            <div>
                                                <div class="name mt5 text-primary">
                                                    <?php echo __("Instagram");?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['instagram_connected']) {?>
                                                    <?php echo __("Your account is connected to");?>
 <?php echo __("Instagram");?>

                                                <?php } else { ?>
                                                    <?php echo __("Connect your account to");?>
 <?php echo __("Instagram");?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>
                                <li class="feeds-item">
                                    <div class="data-container">
                                        <div class="data-avatar">
                                            <i class="fa fa-linkedin-square" style="color: #1A84BC"></i>
                                        </div>
                                        <div class="data-content">
                                            <div class="pull-right flip">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/linkedin"><?php echo __("Disconnect");?>
</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/linkedin"><?php echo __("Connect");?>
</a>
                                                <?php }?>
                                            </div>
                                            <div>
                                                <div class="name mt5 text-primary">
                                                    <?php echo __("Linkedin");?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['linkedin_connected']) {?>
                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Linkedin");?>

                                                <?php } else { ?>
                                                <?php echo __("Connect your account to");?>
 <?php echo __("Linkedin");?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>
                                <li class="feeds-item">
                                    <div class="data-container">
                                        <div class="data-avatar">
                                            <i class="fa fa-vk" style="color: #527498"></i>
                                        </div>
                                        <div class="data-content">
                                            <div class="pull-right flip">
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
                                                <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/revoke/vkontakte"><?php echo __("Disconnect");?>
</a>
                                                <?php } else { ?>
                                                <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/connect/vkontakte"><?php echo __("Connect");?>
</a>
                                                <?php }?>
                                            </div>
                                            <div>
                                                <div class="name mt5 text-primary">
                                                    <?php echo __("Vkontakte");?>

                                                </div>
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['vkontakte_connected']) {?>
                                                <?php echo __("Your account is connected to");?>
 <?php echo __("Vkontakte");?>

                                                <?php } else { ?>
                                                <?php echo __("Connect your account to");?>
 <?php echo __("Vkontakte");?>

                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "blocking") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-minus-circle pr5 panel-icon"></i>
                        <strong><?php echo __("Manage Blocking");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("Once you block someone, that person can no longer see things you post on your timeline");?>
<br>
                        </div>

                        <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) > 0) {?>
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blocks']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"blocked"), 0, true);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>
                        <?php } else { ?>
                            <p class="text-center text-muted">
                                <?php echo __("No blocked users");?>

                            </p>
                        <?php }?>

                        <?php if (count($_smarty_tpl->tpl_vars['blocks']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                            <!-- see-more -->
                            <div class="alert alert-info see-more js_see-more" data-get="blocks">
                                <span><?php echo __("See More");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "affiliates") {?>
                    <div class="panel-heading with-icon with-nav">
                        <!-- panel title -->
                        <div class="mb20">
                            <i class="fa fa-exchange pr5 panel-icon"></i>
                            <strong><?php echo __("Affiliates");?>
</strong>
                        </div>
                        <!-- panel title -->

                        <!-- panel nav -->
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#affiliates" data-toggle="tab">
                                    <i class="fa fa-users fa-fw mr5"></i><strong class="pr5"><?php echo __("My Affiliates");?>
</strong>
                                </a>
                            </li>
                            <li>
                                <a href="#payments" data-toggle="tab">
                                    <i class="fa fa-money fa-fw mr5"></i><strong class="pr5"><?php echo __("Payments");?>
</strong>
                                </a>
                            </li>
                        </ul>
                        <!-- panel nav -->
                    </div>
                    <div class="panel-body tab-content">
                        <!-- affiliates tab -->
                        <div class="tab-pane active" id="affiliates">
                            <div class="alert alert-warning">
                                <div class="icon">
                                    <i class="fa fa-money fa-2x"></i>
                                </div>
                                <div class="text">
                                    <strong><?php echo __("Affiliates System");?>
</strong><br>
                                    <?php echo __("Earn up to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['system']->value['affiliates_per_user'],2);?>
 <?php echo __("For each user your refer");?>
.<br>
                                    <?php echo __("You will be paid when");?>
 
                                    <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_type'] == "registeration") {?>.
                                        <?php echo __("new user registered");?>

                                    <?php } else { ?>
                                        <?php echo __("new user registered & bought a package");?>
.
                                    <?php }?>
                                </div>
                            </div>
                            <div class="text-center text-readable mb20">
                                <?php echo __("Your affiliate link is");?>
<br>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" target="_blank"  class="ptb5 plr20" style="border: 1px solid #ddd;">
                                    <?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/?ref=<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>

                                </a>
                            </div>

                            <div class="divider"></div>

                            <?php if (count($_smarty_tpl->tpl_vars['affiliates']->value) > 0) {?>
                                <ul>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['affiliates']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"]), 0, true);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                </ul>
                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No affiliates");?>

                                </p>
                            <?php }?>

                            <!-- see-more -->
                            <?php if (count($_smarty_tpl->tpl_vars['affiliates']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                <div class="alert alert-info see-more js_see-more" data-uid="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_id'];?>
" data-get="affiliates">
                                    <span><?php echo __("See More");?>
</span>
                                    <div class="loader loader_small x-hidden"></div>
                                </div>
                            <?php }?>
                            <!-- see-more -->
                        </div>
                        <!-- affiliates tab -->

                        <!-- payments tab -->
                        <div class="tab-pane" id="payments">
                            <div class="alert alert-info">
                                <div class="icon">
                                    <i class="fa fa-info-circle fa-2x"></i>
                                </div>
                                <div class="text pt5">
                                    <?php echo __("The minimum withdrawal request amount is");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['system']->value['affiliates_min_withdrawal'];?>

                                </div>
                            </div>
                            <form class="js_ajax-forms form-horizontal" data-url="users/withdraw.php">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-9 text-lg">
                                        <?php echo __("Your Balance");?>
: <?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_balance'],2);?>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Email");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_affiliate_email'];?>
">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Amount");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency'];?>
)
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="amount">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">
                                        <?php echo __("Payment Method");?>

                                    </label>
                                    <div class="col-sm-9">
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "both" || $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "paypal") {?>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" name="method" id="method_paypal" value="paypal" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "paypal") {?>checked<?php }?>>
                                                <label for="method_paypal"><?php echo __("Paypal");?>
</label>
                                            </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "both" || $_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "skrill") {?>
                                            <div class="radio radio-primary radio-inline">
                                                <input type="radio" name="method" id="method_skrill" value="skrill" <?php if ($_smarty_tpl->tpl_vars['system']->value['affiliate_payment_method'] == "skrill") {?>checked<?php }?>>
                                                <label for="method_skrill"><?php echo __("Skrill");?>
</label>
                                            </div>
                                        <?php }?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <button type="submit" class="btn btn-success"><?php echo __("Make a withdrawal");?>
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

                            <div class="divider"></div>

                            <h4><?php echo __("Withdrawal History");?>
</h2>
                            <?php if (count($_smarty_tpl->tpl_vars['payments']->value) > 0) {?>
                                <div class="table-responsive mt20">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th><?php echo __("ID");?>
</th>
                                                <th><?php echo __("Email");?>
</th>
                                                <th><?php echo __("Amount");?>
</th>
                                                <th><?php echo __("Method");?>
</th>
                                                <th><?php echo __("Time");?>
</th>
                                                <th><?php echo __("Status");?>
</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payments']->value, 'payment');
$_smarty_tpl->tpl_vars['payment']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->value) {
$_smarty_tpl->tpl_vars['payment']->iteration++;
$__foreach_payment_3_saved = $_smarty_tpl->tpl_vars['payment'];
?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['payment']->iteration;?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['payment']->value['email'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo number_format($_smarty_tpl->tpl_vars['payment']->value['amount'],2);?>
</td>
                                                <td>
                                                    <?php echo ucfirst($_smarty_tpl->tpl_vars['payment']->value['method']);?>

                                                </td>
                                                <td>
                                                    <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment']->value['time'];?>
</span>
                                                </td>
                                                <td>
                                                    <?php if ($_smarty_tpl->tpl_vars['payment']->value['status'] == '0') {?>
                                                        <span class="label label-warning"><?php echo __("Pending");?>
</span>
                                                    <?php } elseif ($_smarty_tpl->tpl_vars['payment']->value['status'] == '1') {?>
                                                        <span class="label label-success"><?php echo __("Approved");?>
</span>
                                                    <?php } else { ?>
                                                        <span class="label label-danger"><?php echo __("Declined");?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                            <?php
$_smarty_tpl->tpl_vars['payment'] = $__foreach_payment_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </tbody>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <p class="text-center text-muted">
                                    <?php echo __("No withdrawal history");?>

                                </p>
                            <?php }?>
                        </div>
                        <!-- payments tab -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "verification") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-check-circle pr5 panel-icon"></i>
                        <strong><?php echo __("Verification");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        
                        <?php if ($_smarty_tpl->tpl_vars['case']->value == "verified") {?>
                            <div class="text-center">
                                <div class="big-icon success">
                                    <i class="fa fa-thumbs-o-up fa-3x"></i>
                                </div>
                                <h4><?php echo __("Congratulations");?>
</h4>
                                <p class="mt20"><?php echo __("This account is verified");?>
</p>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "request") {?>
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("You can send verification request to verify your account");?>
<br>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-success js_verify">
                                    <i class="fa fa-check-circle mr5"></i><?php echo __("Verification Request");?>

                                </button>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "pending") {?>
                            <div class="alert alert-info">
                                <i class="fa fa-info-circle fa-lg mr10"></i><?php echo __("Your verification request is still awaiting admin approval");?>
<br>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-warning btn-delete js_unverify"><i class="fa fa-clock-o mr5"></i><?php echo __("Pending");?>
</button>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['case']->value == "declined") {?>
                            <div class="text-center">
                                <div class="big-icon error">
                                    <i class="fa fa-meh-o fa-3x"></i>
                                </div>
                                <h4><?php echo __("Sorry");?>
</h4>
                                <p class="mt20"><?php echo __("Your verification request has been declined by the admin");?>
</p>
                            </div>
                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "membership") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-id-card-o pr5 panel-icon"></i>
                        <strong><?php echo __("Membership");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-warning">
                            <div class="icon">
                                <i class="fa fa-id-card-o fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Membership");?>
</strong><br>
                                <?php echo __("Choose the Plan That's Right for You");?>
, <?php echo __("Check the package from");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Here");?>
</a>
                            </div>
                        </div>

                        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                            <div class="text-center">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade to Pro");?>
</a>
                            </div>
                        <?php } else { ?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                <form class="form-horizontal">
                                    <div class="form-group mb0">
                                        <label class="col-sm-3 control-label text-left">
                                            <?php echo __("Package");?>

                                        </label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];
echo $_smarty_tpl->tpl_vars['user']->value->_data['price'];?>
 
                                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period'] == "life") {
echo __("Life Time");
} else {
echo __("per");?>
 <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['period_num'] != '1') {
echo $_smarty_tpl->tpl_vars['user']->value->_data['period_num'];
}?> <?php echo __(ucfirst($_smarty_tpl->tpl_vars['user']->value->_data['period']));
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
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['user_subscription_date'],"%e %B %Y");?>

                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group mb0">
                                        <label class="col-sm-3 control-label text-left">
                                            <?php echo __("Expiration Date");?>

                                        </label>
                                        <div class="col-sm-9">
                                            <p class="form-control-static">
                                                <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value->_data['subscription_end'],"%e %B %Y");?>
 (<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'] > 0) {
echo __("Remining");?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['subscription_timeleft'];?>
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
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_posts'];?>

                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_posts']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
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
                                                <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'];?>

                                            </p>
                                            
                                            <div class="progress mb5">
                                                <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="<?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($_smarty_tpl->tpl_vars['user']->value->_data['user_boosted_pages']/$_smarty_tpl->tpl_vars['user']->value->_data['boost_pages'])*100;?>
%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label text-left">
                                            
                                        </label>
                                        <div class="col-sm-9">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-primary"><i class="fa fa-rocket mr5"></i><?php echo __("Upgrade Package");?>
</a>
                                        </div>
                                    </div>
                                </form>
                            <?php }?>
                        <?php }?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "delete") {?>
                    <div class="panel-heading with-icon">
                        <!-- panel title -->
                        <i class="fa fa-trash pr5 panel-icon"></i>
                        <strong><?php echo __("Delete Account");?>
</strong>
                        <!-- panel title -->
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-warning">
                            <i class="fa fa-exclamation-triangle fa-lg mr10"></i><?php echo __("Once you delete your account you will no longer can access it again");?>

                        </div>
                        <div class="text-center">
                            <button class="btn btn-danger js_delete-user"><i class="fa fa-trash mr5"></i><?php echo __("Delete My Account");?>
</button>
                        </div>
                    </div>
                <?php }?>
                
            </div>
        </div>
        <!-- right panel -->
        
    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
