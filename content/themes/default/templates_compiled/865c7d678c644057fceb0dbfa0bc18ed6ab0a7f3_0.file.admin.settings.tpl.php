<?php
/* Smarty version 3.1.31, created on 2018-02-22 15:27:27
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.settings.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8ee15fe4df93_15577578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '865c7d678c644057fceb0dbfa0bc18ed6ab0a7f3' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.settings.tpl',
      1 => 1519313246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8ee15fe4df93_15577578 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <i class="fa fa-cog pr5 panel-icon"></i>
        <strong><?php echo __("Settings");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "posts") {?> &rsaquo; <strong><?php echo __("Posts");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "registration") {?> &rsaquo; <strong><?php echo __("Registration");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "social_login") {?> &rsaquo; <strong><?php echo __("Social Login");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "emails") {?> &rsaquo; <strong><?php echo __("Emails");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "sms") {?> &rsaquo; <strong><?php echo __("SMS");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "chat") {?> &rsaquo; <strong><?php echo __("Chat");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "video_chat") {?> &rsaquo; <strong><?php echo __("Video Chat");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "uploads") {?> &rsaquo; <strong><?php echo __("Uploads");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "security") {?> &rsaquo; <strong><?php echo __("Security");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?> &rsaquo; <strong><?php echo __("Payments");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "limits") {?> &rsaquo; <strong><?php echo __("Limits");?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "analytics") {?> &rsaquo; <strong><?php echo __("Analytics");?>
</strong><?php }?>
    </div>
    <div class="panel-body">

        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>

            <!-- tabs nav -->
            <ul class="nav nav-tabs admin mb20">
                <li class="active">
                    <a href="#General" data-toggle="tab">
                        <i class="fa fa-server fa-fw mr5"></i><strong class="pr5"><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#Features" data-toggle="tab">
                        <i class="fa fa-microchip fa-fw mr5"></i><strong class="pr5"><?php echo __("Features");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- General -->
                <div class="tab-pane active" id="General">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=general_settings">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Website Public");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="system_public">
                                    <input type="checkbox" name="system_public" id="system_public" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_public']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Make the website public to allow non logged users to view website content");?>

                                </span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Website Live");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="system_live">
                                    <input type="checkbox" name="system_live" id="system_live" <?php if ($_smarty_tpl->tpl_vars['system']->value['system_live']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn the entire website On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Shutdown Message");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="system_message" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_message'];?>
</textarea>
                                <span class="help-block">
                                    <?php echo __("The text that is presented when the site is closed");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Website Title");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="system_title" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
                                <span class="help-block">
                                    <?php echo __("Title of your website");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Website Description");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="system_description" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_description'];?>
</textarea>
                                <span class="help-block">
                                    <?php echo __("Description of your website");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Website Keywords");?>

                            </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="system_keywords" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_keywords'];?>
</textarea>
                                <span class="help-block">
                                    <?php echo __("Example: social, sngine, social site");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Website Email");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="system_email" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_email'];?>
">
                                <span class="help-block">
                                    <?php echo __("The contact email that all messages send to");?>

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
                <!-- General -->

                <!-- Features -->
                <div class="tab-pane" id="Features">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=features_settings">
					    <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Enable models");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="models_enabled">
                                    <input type="checkbox" name="models_enabled" id="models_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['models_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn models On and Off");?>

                                </span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Contact Us");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="contact_enabled">
                                    <input type="checkbox" name="contact_enabled" id="contact_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['contact_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn the contact us page On and Off");?>

                                </span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Directory");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="directory_enabled">
                                    <input type="checkbox" name="directory_enabled" id="directory_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable the directory for better SEO results");?>
<br>
                                    <?php echo __("Make the website public to allow non logged users to view website content");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Pages");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="pages_enabled">
                                    <input type="checkbox" name="pages_enabled" id="pages_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Users can create pages or only admins/moderators");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Groups");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="groups_enabled">
                                    <input type="checkbox" name="groups_enabled" id="groups_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Users can create groups or only admins/moderators");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Events");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="events_enabled">
                                    <input type="checkbox" name="events_enabled" id="events_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Users can create events or only admins/moderators");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Blogs");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="blogs_enabled">
                                    <input type="checkbox" name="blogs_enabled" id="blogs_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Allow users to create blogs");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Market");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="market_enabled">
                                    <input type="checkbox" name="market_enabled" id="market_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Allow users to sell/buy products");?>

                                </span>
                            </div>
                        </div>                

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Games");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="games_enabled">
                                    <input type="checkbox" name="games_enabled" id="games_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn the games On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("DayTime Messages");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="daytime_msg_enabled">
                                    <input type="checkbox" name="daytime_msg_enabled" id="daytime_msg_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['daytime_msg_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn the DayTime Messages (Good Morning, Afternoon, Evening) On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Verification Requests");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="verification_requests">
                                    <input type="checkbox" name="verification_requests" id="verification_requests" <?php if ($_smarty_tpl->tpl_vars['system']->value['verification_requests']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn the verification requests from users & pages On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Profile Visit Notification");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="profile_notification_enabled">
                                    <input type="checkbox" name="profile_notification_enabled" id="profile_notification_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['profile_notification_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn the profile visit notification On and Off");?>

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
                <!-- Features -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "posts") {?>

            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=posts">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Stories");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="stories_enabled">
                            <input type="checkbox" name="stories_enabled" id="stories_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Turn the stories On and Off");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Wall Posts");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="wall_posts_enabled">
                            <input type="checkbox" name="wall_posts_enabled" id="wall_posts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Users can publish posts on their friends walls");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Social Share");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="social_share_enabled">
                            <input type="checkbox" name="social_share_enabled" id="social_share_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Turn the social share for posts On and Off");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Smart YouTube Player");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="smart_yt_player">
                            <input type="checkbox" name="smart_yt_player" id="smart_yt_player" <?php if ($_smarty_tpl->tpl_vars['system']->value['smart_yt_player']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Smart YouTube player will save a lot of bandwidth");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Geolocation");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="geolocation_enabled">
                            <input type="checkbox" name="geolocation_enabled" id="geolocation_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Turn the post Geolocation On and Off");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Geolocation Google Key");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="geolocation_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['geolocation_key'];?>
">
                        <span class="help-block">
                            <?php echo __("Check the documentation to learn how to get this key");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Default Privacy");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="default_privacy">
                            <option value="public" <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "public") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x fa-fw'></i></div><div class='text'><b><?php echo __('Public');?>
</b><br><?php echo __('Anyone one can see the post');?>
</div></div>"><?php echo __("Public");?>
</option>
                            <option value="friends" <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "friends") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-2x fa-fw'></i></div><div class='text'><b><?php echo __('Friends');?>
</b><br><?php echo __('Only post author friends can see the post');?>
</div></div>"><?php echo __("Friends");?>
</option>
                            <option value="me" <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "me") {?>selected<?php }?> data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x fa-fw'></i></div><div class='text'><b><?php echo __('Only Me');?>
</b><br><?php echo __('Only post author can see the post');?>
</div></div>"><?php echo __("Only Me");?>
</option>
                        </select>
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

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "registration") {?>

            <!-- tabs nav -->
            <ul class="nav nav-tabs admin mb20">
                <li class="active">
                    <a href="#General" data-toggle="tab">
                        <i class="fa fa-sign-in fa-fw mr5"></i><strong class="pr5"><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#Social" data-toggle="tab">
                        <i class="fa fa-facebook-official fa-fw mr5"></i><strong class="pr5"><?php echo __("Social Login");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- General -->
                <div class="tab-pane active" id="General">
                    <div class="alert alert-info">
                        <div class="icon">
                            <i class="fa fa-info-circle fa-2x"></i>
                        </div>
                        <div class="text pt5">
                            <?php echo __("If Registration is Free and Pro Packages enabled they will be used as an optional upgrading plans");?>
.
                        </div>
                    </div>

                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=registration">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Registration Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="registration_enabled">
                                    <input type="checkbox" name="registration_enabled" id="registration_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Allow users to create accounts");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Registration Type");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="registration_type" id="registration_free" value="free" <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_type'] == "free") {?>checked<?php }?>>
                                    <label for="registration_free"><?php echo __("Free");?>
</label>
                                </div>
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="registration_type" id="registration_paid" value="paid" <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_type'] == "paid") {?>checked<?php }?>>
                                    <label for="registration_paid"><?php echo __("Subscriptions Only");?>
</label>
                                </div>
                                <span class="help-block">
                                    <?php echo __("Allow users to create accounts Free or via Subscriptions only");?>
<br>
                                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/packages"><?php echo __("Pro Packages");?>
</a>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Pro Packages Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="packages_enabled">
                                    <input type="checkbox" name="packages_enabled" id="packages_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable pro packages to be used as upgrading plans or for subscriptions");?>
<br>
                                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/payments"><?php echo __("Payments Settings");?>
</a>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Activation Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="activation_enabled">
                                    <input type="checkbox" name="activation_enabled" id="activation_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable account activation to send activation code to user's email/phone");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Activation Via");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="activation_type" id="activation_email" value="email" <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_type'] == "email") {?>checked<?php }?>>
                                    <label for="activation_email"><?php echo __("Email");?>
</label>
                                </div>
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="activation_type" id="activation_sms" value="sms" <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_type'] == "sms") {?>checked<?php }?>>
                                    <label for="activation_sms"><?php echo __("SMS");?>
</label>
                                </div>
                                <span class="help-block">
                                    <?php echo __("Select Email or SMS activation to send activation code to user's email/phone");?>
<br>
                                    <?php echo __("Make sure you have configured");?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings/sms"><?php echo __("SMS Settings");?>
</a>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Age Restriction");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="age_restriction">
                                    <input type="checkbox" name="age_restriction" id="age_restriction" <?php if ($_smarty_tpl->tpl_vars['system']->value['age_restriction']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable/Disable age restriction");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Minimum Age");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="minimum_age" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['minimum_age'];?>
">
                                <span class="help-block">
                                    <?php echo __("The minimum age required to register (in years)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Getting Started");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="getting_started">
                                    <input type="checkbox" name="getting_started" id="getting_started" <?php if ($_smarty_tpl->tpl_vars['system']->value['getting_started']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable/Disable getting started page after registration");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Delete Account");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="delete_accounts_enabled">
                                    <input type="checkbox" name="delete_accounts_enabled" id="delete_accounts_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['delete_accounts_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Allow users to delete their account");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Accounts/IP");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_accounts" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_accounts'];?>
">
                                <span class="help-block">
                                    <?php echo __("Number of accounts allowed to register per IP (0 for unlimited)");?>

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
                <!-- General -->

                <!-- Social -->
                <div class="tab-pane" id="Social">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=social_login">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Social Logins");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="social_login_enabled">
                                    <input type="checkbox" name="social_login_enabled" id="social_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['social_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via social media (Facebook, Twitter and etc) On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <!-- facebook -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-facebook-square fa-4x" style="color: #3B579D"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="facebook_login_enabled">
                                    <input type="checkbox" name="facebook_login_enabled" id="facebook_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['facebook_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via Facebook On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Facebook App ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="facebook_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['facebook_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Facebook App Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="facebook_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['facebook_secret'];?>
">
                            </div>
                        </div>
                        <!-- facebook -->

                        <div class="divider"></div>

                        <!-- twitter -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-twitter-square fa-4x" style="color: #55ACEE"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="twitter_login_enabled">
                                    <input type="checkbox" name="twitter_login_enabled" id="twitter_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['twitter_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via Twitter On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Twitter App ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="twitter_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twitter_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Twitter App Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="twitter_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twitter_secret'];?>
">
                            </div>
                        </div>
                        <!-- twitter -->

                        <div class="divider"></div>

                        <!-- google -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-google-plus-square fa-4x" style="color: #DC4A38"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="google_login_enabled">
                                    <input type="checkbox" name="google_login_enabled" id="google_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['google_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via Google On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Google App ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="google_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['google_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Google App Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="google_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['google_secret'];?>
">
                            </div>
                        </div>
                        <!-- google -->

                        <div class="divider"></div>

                        <!-- instagram -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-instagram fa-4x" style="color: #3f729b"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="instagram_login_enabled">
                                    <input type="checkbox" name="instagram_login_enabled" id="instagram_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['instagram_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via Instagram On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Instagram App ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="instagram_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['instagram_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Instagram App Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="instagram_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['instagram_secret'];?>
">
                            </div>
                        </div>
                        <!-- instagram -->

                        <div class="divider"></div>

                        <!-- linkedin -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-linkedin-square fa-4x" style="color: #1A84BC"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="linkedin_login_enabled">
                                    <input type="checkbox" name="linkedin_login_enabled" id="linkedin_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['linkedin_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via Linkedin On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Linkedin App ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="linkedin_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['linkedin_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Linkedin App Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="linkedin_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['linkedin_secret'];?>
">
                            </div>
                        </div>
                        <!-- linkedin -->

                        <div class="divider"></div>

                        <!-- vk -->
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-vk fa-4x" style="color: #527498"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="vkontakte_login_enabled">
                                    <input type="checkbox" name="vkontakte_login_enabled" id="vkontakte_login_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['vkontakte_login_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Turn registration/login via Vkontakte On and Off");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Vkontakte App ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="vkontakte_appid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['vkontakte_appid'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Vkontakte App Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="vkontakte_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['vkontakte_secret'];?>
">
                            </div>
                        </div>
                        <!-- vk -->

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
                <!-- Social -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "emails") {?>

            <!-- tabs nav -->
            <ul class="nav nav-tabs admin mb20">
                <li class="active">
                    <a href="#SMTP" data-toggle="tab">
                        <i class="fa fa-server fa-fw mr5"></i><strong class="pr5"><?php echo __("SMTP");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#Notifications" data-toggle="tab">
                        <i class="fa fa-envelope-open-o fa-fw mr5"></i><strong class="pr5"><?php echo __("Email Notifications");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- SMTP -->
                <div class="tab-pane active" id="SMTP">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=emails">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP Emails");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="email_smtp_enabled">
                                    <input type="checkbox" name="email_smtp_enabled" id="email_smtp_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable/Disable SMTP email system");?>
<br/>
                                    <?php echo __("PHP mail() function will be used in case of disabled");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP Require Authentication");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="email_smtp_authentication">
                                    <input type="checkbox" name="email_smtp_authentication" id="email_smtp_authentication" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_authentication']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable/Disable SMTP email system");?>
<br/>
                                    <?php echo __("PHP mail() function will be used in case of disabled");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP SSL Encryption");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="email_smtp_ssl">
                                    <input type="checkbox" name="email_smtp_ssl" id="email_smtp_ssl" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_smtp_ssl']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable/Disable SMTP SSL encryption");?>
<br/>
                                    <?php echo __("TLS encryption will be used in case of disabled");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP Server");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email_smtp_server" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_server'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP Port");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email_smtp_port" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_port'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP Username");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email_smtp_username" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_username'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("SMTP Password");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email_smtp_password" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_password'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Set From");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email_smtp_setfrom" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['email_smtp_setfrom'];?>
">
                                <span class="help-block">
                                    <?php echo __("Set the From email address");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                <button type="button" class="btn btn-danger js_admin-tester" data-handle="smtp" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
">
                                    <i class="fa fa-bolt"></i> <?php echo __("Test Connection");?>

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
                <!-- SMTP -->

                <!-- Notifications -->
                <div class="tab-pane" id="Notifications">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=email_notifications">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Email Notifications");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="email_notifications">
                                    <input type="checkbox" name="email_notifications" id="email_notifications" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_notifications']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable/Disable email notifications system");?>
<br/>
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Email User When");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_post_likes" id="email_post_likes" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_likes']) {?>checked<?php }?>>
                                    <label for="email_post_likes"><?php echo __("Someone liked his post");?>
</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_post_comments" id="email_post_comments" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_comments']) {?>checked<?php }?>>
                                    <label for="email_post_comments"><?php echo __("Someone commented on his post");?>
</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_post_shares" id="email_post_shares" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_post_shares']) {?>checked<?php }?>>
                                    <label for="email_post_shares"><?php echo __("Someone shared his post");?>
</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_wall_posts" id="email_wall_posts" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_wall_posts']) {?>checked<?php }?>>
                                    <label for="email_wall_posts"><?php echo __("Someone posted on his timeline");?>
</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_mentions" id="email_mentions" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_mentions']) {?>checked<?php }?>>
                                    <label for="email_mentions"><?php echo __("Someone mentioned him");?>
</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_profile_visits" id="email_profile_visits" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_profile_visits']) {?>checked<?php }?>>
                                    <label for="email_profile_visits"><?php echo __("Someone visited his profile");?>
</label>
                                </div>
                                <div class="checkbox checkbox-primary">
                                    <input type="checkbox" name="email_friend_requests" id="email_friend_requests" <?php if ($_smarty_tpl->tpl_vars['system']->value['email_friend_requests']) {?>checked<?php }?>>
                                    <label for="email_friend_requests"><?php echo __("Someone sent him or accepted his friend requset");?>
</label>
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
                <!-- Notifications -->
            </div>
            <!-- tabs content -->

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "sms") {?>

            <!-- SMS -->
            <div class="alert alert-info">
                <div class="icon">
                    <i class="fa fa-info-circle fa-2x"></i>
                </div>
                <div class="text">
                    <?php echo __("To start using SMS, you'll need to create an account at");?>
 <a target="_blank" href="https://www.twilio.com">Twilio</a><br>
                    <?php echo __("Check the documentation for more help");?>
.
                </div>
            </div>

            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=sms">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Twilio Account SID");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="twilio_sid" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_sid'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Twilio AUTH TOKEN");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="twilio_token" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_token'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Twilio Phone Number");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="twilio_phone" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['twilio_phone'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Test Phone Number");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="system_phone" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_phone'];?>
">
                        <span class="help-block">
                            <?php echo __("Your phone number to test the SMS service i.e +12344567890");?>
<br/>
                            <?php echo __("A test SMS will be sent to this phone number when you test the connection");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                        <button type="button" class="btn btn-danger js_admin-tester" data-handle="sms" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
">
                            <i class="fa fa-bolt"></i> <?php echo __("Test Connection");?>

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
            <!-- SMS -->

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "chat") {?>

            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=chat">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Chat Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="chat_enabled">
                            <input type="checkbox" name="chat_enabled" id="chat_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Turn the chat system On and Off");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("User Status Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="chat_status_enabled">
                            <input type="checkbox" name="chat_status_enabled" id="chat_status_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['chat_status_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Turn the Last Seen On and Off");?>

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

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "uploads") {?>

            <!-- tabs nav -->
            <ul class="nav nav-tabs admin mb20">
                <li class="active">
                    <a href="#General" data-toggle="tab">
                        <i class="fa fa-upload fa-fw mr5"></i><strong class="pr5"><?php echo __("General");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#S3" data-toggle="tab">
                        <i class="fa fa-amazon fa-fw mr5"></i><strong class="pr5"><?php echo __("Amazon S3");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- General -->
                <div class="tab-pane active" id="General">
                    <div class="alert alert-info">
                        <div class="icon">
                            <i class="fa fa-info-circle fa-2x"></i>
                        </div>
                        <div class="text">
                            <?php echo __("Your server max upload size");?>
 = <?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value;?>
.<br>
                            <?php echo __("You can't upload files larger than");?>
 <?php echo $_smarty_tpl->tpl_vars['max_upload_size']->value;?>
 . <?php echo __("To upload larger files, contact your hosting provider");?>
.
                        </div>
                    </div>

                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=uploads">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Uploads Directory");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="uploads_directory" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['uploads_directory'];?>
">
                                <span class="help-block">
                                    <?php echo __("The path of uploads local directory");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Uploads Prefix");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="uploads_prefix" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['uploads_prefix'];?>
">
                                <span class="help-block">
                                    <?php echo __("Add a prefix to the uploaded files");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Max profile photo size");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_avatar_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_avatar_size'];?>
">
                                <span class="help-block">
                                    <?php echo __("The Maximum size of profile photo");?>
 <?php echo __("in kilobytes (1 M = 1024 KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Max cover photo size");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_cover_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_cover_size'];?>
">
                                <span class="help-block">
                                    <?php echo __("The Maximum size of cover photo");?>
 <?php echo __("in kilobytes (1 M = 1024 KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-picture-o fa-3x"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="photos_enabled">
                                    <input type="checkbox" name="photos_enabled" id="photos_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable photo upload to share & upload photos to the site");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Max photo size");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_photo_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_photo_size'];?>
">
                                <span class="help-block">
                                    <?php echo __("The Maximum size of uploaded photo in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-video-camera fa-3x"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="videos_enabled">
                                    <input type="checkbox" name="videos_enabled" id="videos_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable video upload to share & upload videos to the site");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Max video size");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_video_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_video_size'];?>
">
                                <span class="help-block">
                                    <?php echo __("The Maximum size of uploaded video in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Video extensions");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="video_extensions" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['video_extensions'];?>
">
                                <span class="help-block">
                                    <?php echo __("Allowed video extensions (separated with comma ',)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-music fa-3x"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="audio_enabled">
                                    <input type="checkbox" name="audio_enabled" id="audio_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable audio upload to share & upload sounds to the site");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Max audio size");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_audio_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_audio_size'];?>
">
                                <span class="help-block">
                                    <?php echo __("The Maximum size of uploaded audio in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Audio extensions");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="audio_extensions" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['audio_extensions'];?>
">
                                <span class="help-block">
                                    <?php echo __("Allowed audio extensions (separated with comma ',)");?>

                                </span>
                            </div>
                        </div>

                        <div class="divider"></div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <i class="fa fa-file-text-o fa-3x"></i>
                            </label>
                            <div class="col-sm-9 mt10">
                                <label class="switch" for="file_enabled">
                                    <input type="checkbox" name="file_enabled" id="file_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['file_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable file upload to share & upload files to the site");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Max file size");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="max_file_size" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_file_size'];?>
">
                                <span class="help-block">
                                    <?php echo __("The Maximum size of uploaded file in posts");?>
 <?php echo __("in kilobytes (1M = 1024KB)");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("File extensions");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="file_extensions" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['file_extensions'];?>
">
                                <span class="help-block">
                                    <?php echo __("Allowed file extensions (separated with comma ',)");?>

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
                <!-- General -->

                <!-- S3 -->
                <div class="tab-pane" id="S3">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=s3">
                        <div class="alert alert-warning">
                            <div class="icon">
                                <i class="fa fa-amazon fa-2x"></i>
                            </div>
                            <div class="text">
                                <strong><?php echo __("Amazon S3 Storage");?>
</strong><br>
                                <?php echo __("Before enabling Amazon S3, make sure you upload the whole 'uploads' folder to your bucket");?>
.<br>
                                <?php echo __("Before disabling Amazon S3, make sure you download the whole 'uploads' folder to your server");?>
.
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Amazon S3 Storage");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="s3_enabled">
                                    <input type="checkbox" name="s3_enabled" id="s3_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable Amazon S3 storage");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Bucket Name");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="s3_bucket" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['s3_bucket'];?>
">
                                <span class="help-block">
                                    <?php echo __("Your Amazon S3 bucket name");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Bucket Region");?>

                            </label>
                            <div class="col-sm-9">
                                <select name="s3_region" class="form-control">
                                    <option value="us-east-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "us-east-1") {?>selected<?php }?>>US East (N. Virginia)</option>
                                    <option value="us-west-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "us-west-2") {?>selected<?php }?>>US West (Oregon)</option>
                                    <option value="ap-northeast-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-northeast-2") {?>selected<?php }?>>Asia Pacific (Seoul)</option>
                                    <option value="ap-southeast-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-southeast-1") {?>selected<?php }?>>Asia Pacific (Singapore)</option>
                                    <option value="ap-southeast-2" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-southeast-2") {?>selected<?php }?>>Asia Pacific (Sydney)</option>
                                    <option value="ap-northeast-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "ap-northeast-1") {?>selected<?php }?>>Asia Pacific (Tokyo)</option>
                                    <option value="eu-central-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-central-1") {?>selected<?php }?>>EU (Frankfurt)</option>
                                    <option value="eu-west-1" <?php if ($_smarty_tpl->tpl_vars['system']->value['s3_region'] == "eu-west-1") {?>selected<?php }?>>EU (Ireland)</option>
                                </select>
                                <span class="help-block">
                                    <?php echo __("Your Amazon S3 bucket region");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Access Key ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="s3_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['s3_key'];?>
">
                                <span class="help-block">
                                    <?php echo __("Your Amazon S3 Access Key ID");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Access Key Secret");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="s3_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['s3_secret'];?>
">
                                <span class="help-block">
                                    <?php echo __("Your Amazon S3 Access Key Secret");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                                <button type="button" class="btn btn-danger js_admin-tester" data-handle="s3" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> <?php echo __('Loading');?>
">
                                    <i class="fa fa-bolt"></i> <?php echo __("Test Connection");?>

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
                <!-- S3 -->
            </div>
            <!-- tabs content -->

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "security") {?>

            <!-- Security -->
            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=security">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Censored Words Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="censored_words_enabled">
                            <input type="checkbox" name="censored_words_enabled" id="censored_words_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['censored_words_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Enable/Disable Words to be censored");?>
<br/>
                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Censored Words");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="censored_words" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['censored_words'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("Words to be censored, separated by a comma (,)");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("reCAPTCHA Enabled");?>

                    </label>
                    <div class="col-sm-9">
                        <label class="switch" for="reCAPTCHA_enabled">
                            <input type="checkbox" name="reCAPTCHA_enabled" id="reCAPTCHA_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>checked<?php }?>>
                            <span class="slider round"></span>
                        </label>
                        <span class="help-block">
                            <?php echo __("Turn reCAPTCHA On and Off");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("reCAPTCHA Site Key");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="reCAPTCHA_site_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("reCAPTCHA Secret Key");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="reCAPTCHA_secret_key" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_secret_key'];?>
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
            <!-- Security -->

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "payments") {?>

            <!-- tabs nav -->
            <ul class="nav nav-tabs admin mb20">
                <li class="active">
                    <a href="#Paypal" data-toggle="tab">
                        <i class="fa fa-paypal fa-fw mr5"></i><strong class="pr5"><?php echo __("Paypal");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#Stripe" data-toggle="tab">
                        <i class="fa fa-credit-card fa-fw mr5"></i><strong class="pr5"><?php echo __("Stripe");?>
</strong>
                    </a>
                </li>
                <li>
                    <a href="#Currency" data-toggle="tab">
                        <i class="fa fa-usd fa-fw mr5"></i><strong class="pr5"><?php echo __("Currency");?>
</strong>
                    </a>
                </li>
            </ul>
            <!-- tabs nav -->

            <!-- tabs content -->
            <div class="tab-content">
                <!-- Paypal -->
                <div class="tab-pane active" id="Paypal">
                    <div class="alert alert-info">
                        <div class="icon">
                            <i class="fa fa-info-circle fa-2x"></i>
                        </div>
                        <div class="text">
                            <?php echo __("To start using Paypal, you'll need to create an account at");?>
 <a target="_blank" href="https://developer.paypal.com/"><?php echo __("Paypal");?>
</a><br>
                            <?php echo __("Check the documentation for more help");?>
.
                        </div>
                    </div>
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=paypal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Paypal Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="paypal_enabled">
                                    <input type="checkbox" name="paypal_enabled" id="paypal_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable payments via Paypal");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Paypal Mode");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="paypal_mode" id="paypal_live" value="live" <?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_mode'] == "live") {?>checked<?php }?>>
                                    <label for="paypal_live"><?php echo __("Live");?>
</label>
                                </div>
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="paypal_mode" id="paypal_sandbox" value="sandbox" <?php if ($_smarty_tpl->tpl_vars['system']->value['paypal_mode'] == "sandbox") {?>checked<?php }?>>
                                    <label for="paypal_sandbox"><?php echo __("Sandbox");?>
</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("PayPal Clinet ID");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="paypal_id" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['paypal_id'];?>
">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("PayPal Secret Key");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="paypal_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['paypal_secret'];?>
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
                <!-- Paypal -->

                <!-- Stripe -->
                <div class="tab-pane" id="Stripe">
                    <div class="alert alert-info">
                        <div class="icon">
                            <i class="fa fa-info-circle fa-2x"></i>
                        </div>
                        <div class="text">
                            <?php echo __("To start using Stripe, you'll need to create an account at");?>
 <a target="_blank" href="https://dashboard.stripe.com/"><?php echo __("Stripe");?>
</a><br>
                            <?php echo __("Check the documentation for more help");?>
.
                        </div>
                    </div>
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=stripe">
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Credit Card Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="creditcard_enabled">
                                    <input type="checkbox" name="creditcard_enabled" id="creditcard_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['creditcard_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable payments via Credit Card");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Alipay Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="alipay_enabled">
                                    <input type="checkbox" name="alipay_enabled" id="alipay_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['alipay_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable payments via Alipay");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Bitcoin Enabled");?>

                            </label>
                            <div class="col-sm-9">
                                <label class="switch" for="bitcoin_enabled">
                                    <input type="checkbox" name="bitcoin_enabled" id="bitcoin_enabled" <?php if ($_smarty_tpl->tpl_vars['system']->value['bitcoin_enabled']) {?>checked<?php }?>>
                                    <span class="slider round"></span>
                                </label>
                                <span class="help-block">
                                    <?php echo __("Enable payments via Bitcoin");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Stripe Mode");?>

                            </label>
                            <div class="col-sm-9">
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="stripe_mode" id="stripe_live" value="live" <?php if ($_smarty_tpl->tpl_vars['system']->value['stripe_mode'] == "live") {?>checked<?php }?>>
                                    <label for="stripe_live"><?php echo __("Live");?>
</label>
                                </div>
                                <div class="radio radio-primary radio-inline">
                                    <input type="radio" name="stripe_mode" id="stripe_test" value="test" <?php if ($_smarty_tpl->tpl_vars['system']->value['stripe_mode'] == "test") {?>checked<?php }?>>
                                    <label for="stripe_test"><?php echo __("Test");?>
</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Test Secret Key");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="stripe_test_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_test_secret'];?>
">
                                <span class="help-block">
                                    <?php echo __("Stripe secret key that starts with sk_");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Test Publishable Key");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="stripe_test_publishable" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_test_publishable'];?>
">
                                <span class="help-block">
                                    <?php echo __("Stripe publishable key that starts with pk_");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Live Secret Key");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="stripe_live_secret" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_live_secret'];?>
">
                                <span class="help-block">
                                    <?php echo __("Stripe secret key that starts with sk_");?>

                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                <?php echo __("Live Publishable Key");?>

                            </label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="stripe_live_publishable" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['stripe_live_publishable'];?>
">
                                <span class="help-block">
                                    <?php echo __("Stripe publishable key that starts with pk_");?>

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
                <!-- Stripe -->

                <!-- Currency -->
                <div class="tab-pane" id="Currency">
                    <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=currency">
                        <div class="form-group">
                            <label class="col-sm-3 control-label text-left">
                                <?php echo __("Currency");?>

                            </label>
                            <div class="col-sm-9">
                                <select class="form-control" name="system_currency">
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "AUD") {?>selected<?php }?> value="AUD">Australian Dollar</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "BRL") {?>selected<?php }?> value="BRL">Brazilian Real</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "CAD") {?>selected<?php }?> value="CAD">Canadian Dollar</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "CZK") {?>selected<?php }?> value="CZK">Czech Koruna</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "DKK") {?>selected<?php }?> value="DKK">Danish Krone</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "EUR") {?>selected<?php }?> value="EUR">Euro</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "HKD") {?>selected<?php }?> value="HKD">Hong Kong Dollar</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "HUF") {?>selected<?php }?> value="HUF">Hungarian Forint</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "ILS") {?>selected<?php }?> value="ILS">Israeli New Sheqel</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "JPY") {?>selected<?php }?> value="JPY">Japanese Yen</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "MYR") {?>selected<?php }?> value="MYR">Malaysian Ringgit</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "MXN") {?>selected<?php }?> value="MXN">Mexican Peso</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "NOK") {?>selected<?php }?> value="NOK">Norwegian Krone</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "NZD") {?>selected<?php }?> value="NZD">New Zealand Dollar</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "PHP") {?>selected<?php }?> value="PHP">Philippine Peso</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "PLN") {?>selected<?php }?> value="PLN">Polish Zloty</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "GBP") {?>selected<?php }?> value="GBP">Pound Sterling</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "RUB") {?>selected<?php }?> value="RUB">Russian Ruble</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "SGD") {?>selected<?php }?> value="SGD">Singapore Dollar</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "SEK") {?>selected<?php }?> value="SEK">Swedish Krona</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "CHF") {?>selected<?php }?> value="CHF">Swiss Franc</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "THB") {?>selected<?php }?> value="THB">Thai Baht</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "TRY") {?>selected<?php }?> value="TRY">Turkish Lira</option>
                                    <option <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency'] == "USD") {?>selected<?php }?> value="USD">U.S. Dollar</option>
                                </select>
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
                <!-- Currency -->
            </div>

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "limits") {?>

            <!-- Limits -->
            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=limits">

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Data Heartbeat");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="data_heartbeat" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['data_heartbeat'];?>
">
                        <span class="help-block">
                            <?php echo __("The update interval to check for new data (in seconds)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Chat Heartbeat");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="chat_heartbeat" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['chat_heartbeat'];?>
">
                        <span class="help-block">
                            <?php echo __("The update interval to check for new messages (in seconds)");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Offline after");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="offline_time" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['offline_time'];?>
">
                        <span class="help-block">
                            <?php echo __("The amount of time to be considered online since the last user's activity (in seconds)");?>

                        </span>
                    </div>
                </div>

                <div class="divider"></div>


                
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Minimum Results");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="min_results" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['min_results'];?>
">
                        <span class="help-block">
                            <?php echo __("The Min number of results per request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Maximum Results");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="max_results" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
">
                        <span class="help-block">
                            <?php echo __("The Max number of results per request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Minimum Even Results");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="min_results_even" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['min_results_even'];?>
">
                        <span class="help-block">
                            <?php echo __("The Min even number of results per request");?>

                        </span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Maximum Even Results");?>

                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="max_results_even" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['max_results_even'];?>
">
                        <span class="help-block">
                            <?php echo __("The Max even number of results per request");?>

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
            <!-- Limits -->

        <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "analytics") {?>

            <!-- Analytics -->
            <form class="js_ajax-forms form-horizontal" data-url="admin/settings.php?edit=analytics">
                <div class="form-group">
                    <label class="col-sm-3 control-label">
                        <?php echo __("Tracking Code");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="3"><?php echo $_smarty_tpl->tpl_vars['system']->value['analytics_code'];?>
</textarea>
                        <span class="help-block">
                            <?php echo __("The analytics tracking code (Ex: Google Analytics)");?>

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
            <!-- Analytics -->

        <?php }?>
        
    </div>
</div><?php }
}
