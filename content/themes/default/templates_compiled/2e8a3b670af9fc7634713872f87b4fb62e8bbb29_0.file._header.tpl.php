<?php
/* Smarty version 3.1.31, created on 2018-02-24 12:43:58
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a915e0e446363_63174125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e8a3b670af9fc7634713872f87b4fb62e8bbb29' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_header.tpl',
      1 => 1519476231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_header.search.tpl' => 1,
    'file:_header.friend_requests.tpl' => 1,
    'file:_header.messages.tpl' => 1,
    'file:_header.notifications.tpl' => 1,
    'file:_ads.tpl' => 1,
  ),
),false)) {
function content_5a915e0e446363_63174125 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <body data-hash-tok="<?php echo $_smarty_tpl->tpl_vars['session_hash']->value['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->tpl_vars['session_hash']->value['position'];?>
" class="visitor n_chat">
<?php } else { ?>
    <body data-hash-tok="<?php echo $_smarty_tpl->tpl_vars['session_hash']->value['token'];?>
" data-hash-pos="<?php echo $_smarty_tpl->tpl_vars['session_hash']->value['position'];?>
" data-chat-enabled="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_chat_enabled'];?>
" class="<?php if (!$_smarty_tpl->tpl_vars['system']->value['chat_enabled']) {?>n_chat<?php }
if ($_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_activated']) {?> n_activated<?php }
if (!$_smarty_tpl->tpl_vars['system']->value['system_live']) {?> n_live<?php }?>">
<?php }?>
    
    <!-- main wrapper -->
    <div class="main-wrapper">
        
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['activation_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_activated']) {?>
            <!-- top-bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 hidden-xs">
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_type'] == "email") {?>
                                <?php echo __("Please go to");?>
 <span class="text-primary"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_email'];?>
</span> <?php echo __("to complete the sign-up process");?>
.
                            <?php } else { ?>
                                <?php echo __("Please check the SMS on your phone");?>
 <strong><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_phone'];?>
</strong> <?php echo __("to complete the sign-up process");?>
.
                            <?php }?>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['activation_type'] == "email") {?>
                                <span class="text-link" data-toggle="modal" data-url="core/activation_email_resend.php">
                                    <?php echo __("Resend Activation Email");?>

                                </span>
                                 - 
                                <span class="text-link" data-toggle="modal" data-url="#activation-email-reset">
                                    <?php echo __("Change Email");?>

                                </span>
                            <?php } else { ?>
                                <span class="btn btn-info btn-sm mr10" data-toggle="modal" data-url="#activation-phone"><?php echo __("Enter Code");?>
</span>
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_phone']) {?>
                                    <span class="text-link" data-toggle="modal" data-url="core/activation_phone_resend.php">
                                        <?php echo __("Resend SMS");?>

                                    </span>
                                     - 
                                <?php }?>
                                <span class="text-link" data-toggle="modal" data-url="#activation-phone-reset">
                                    <?php echo __("Change Phone Number");?>

                                </span>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top-bar -->
        <?php }?>

        <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_live']) {?>
            <!-- top-bar alert-->
            <div class="top-bar alert-bar">
                <div class="container">
                    <i class="fa fa-exclamation-triangle fa-lg pr5"></i>
                    <span class="hidden-xs"><?php echo __("The system has been shutted down");?>
.</span>
                    <span><?php echo __("Turn it on from");?>
</span> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/settings"><?php echo __("Admin Panel");?>
</a>
                </div>
            </div>
            <!-- top-bar alert-->
        <?php }?>

        <div class="main-header">
            <div class="container header-container">

                <div class="brand-container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>hidden-xs<?php }?>">
                    <!-- brand -->
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
" class="brand">
                        <?php if ($_smarty_tpl->tpl_vars['system']->value['system_logo']) {?>
                            <img width="60" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>
">
                        <?php } else { ?>
                            <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

                        <?php }?>
                    </a>
                    <!-- brand -->
                </div>

                <!-- navbar-collapse -->
                <div>

                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in || (!$_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['system']->value['system_public'])) {?>
                        <!-- search -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_header.search.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <!-- search -->
                    <?php }?>

                    <!-- navbar-container -->
                    <div class="navbar-container">
                        <ul class="nav navbar-nav">
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                                <li class="visible-xs-block">
                                    <a href="#" data-toggle="offcanvas" data-target=".sidebar-nav">
                                        <i class="fa fa-bars fa-lg"></i>
                                    </a>
                                </li>
                                <!-- home -->
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                                        <i class="fa fa-home fa-lg"></i>
                                    </a>
                                </li>
                                <!-- home -->
                                
                                <!-- friend requests -->
                                <?php $_smarty_tpl->_subTemplateRender('file:_header.friend_requests.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <!-- friend requests -->

                                <!-- messages -->
                                <?php $_smarty_tpl->_subTemplateRender('file:_header.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <!-- messages -->

                                <!-- notifications -->
                                <?php $_smarty_tpl->_subTemplateRender('file:_header.notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                <!-- notifications -->

                                <!-- search -->
                                <li class="visible-xs-block">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/search">
                                        <i class="fa fa-search fa-lg"></i>
                                    </a>
                                </li>
                                <!-- search -->

                                <!-- user-menu -->
                                <li class="dropdown">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
" alt="">
                                        <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_lastname'];?>
</span>
                                        <i class="caret"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade to Pro");?>
</a>
                                            </li>
                                            <li class="divider"></li>
                                        <?php }?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_name'];?>
"><?php echo __("Profile");?>
</a>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/privacy"><?php echo __("Privacy");?>
</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings"><?php echo __("Settings");?>
</a>
                                        </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp"><?php echo __("Admin Panel");?>
</a>
                                            </li>
                                        <?php }?>
                                        <?php if (($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['pages_enabled']) || ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['groups_enabled'])) {?>
                                            <li class="divider"></li>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/manage"><?php echo __("Manage Pages");?>
</a>
                                                </li>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_group'] < 3 || $_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
                                                <li>
                                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/manage"><?php echo __("Manage Groups");?>
</a>
                                                </li>
                                            <?php }?>
                                        <?php }?>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signout"><?php echo __("Log Out");?>
</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- user-menu -->
                            <?php } else { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <span><?php echo __("Join");?>
</span>
                                        <i class="caret"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Login");?>
</a>
                                        </li>
                                        <?php if ($_smarty_tpl->tpl_vars['system']->value['registration_enabled']) {?>
                                            <li>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signup"><?php echo __("Register");?>
</a>
                                            </li>
                                        <?php }?>
                                    </ul>
                                </li>
                            <?php }?>
                        </ul>
                    </div>
                    <!-- navbar-container -->
                </div>
                <!-- navbar-collapse -->

            </div>
        </div>
        
        <!-- ads -->
        <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_ads'=>$_smarty_tpl->tpl_vars['ads_master']->value['header'],'_master'=>true), 0, false);
?>

        <!-- ads --><?php }
}
