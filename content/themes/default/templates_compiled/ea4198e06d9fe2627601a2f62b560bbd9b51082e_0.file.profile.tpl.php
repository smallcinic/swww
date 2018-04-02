<?php
/* Smarty version 3.1.31, created on 2018-02-03 23:12:44
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7641ec4b54d9_83949142',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea4198e06d9fe2627601a2f62b560bbd9b51082e' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/profile.tpl',
      1 => 1517602739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_photo.tpl' => 2,
    'file:_publisher.tpl' => 2,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_user.tpl' => 3,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:__feeds_page.tpl' => 1,
    'file:__feeds_group.tpl' => 1,
    'file:__feeds_event.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a7641ec4b54d9_83949142 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.date_format.php';
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
    <div class="row">

        <!-- side panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="col-sm-4 col-md-2 offcanvas-sidebar mt20">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        <?php }?>
        <!-- side panel -->

        <div class="col-sm-8 col-md-10 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas-mainbar<?php }?>">
            <!-- profile-header -->
            <div class="profile-header">
                <!-- profile-cover -->
                <div <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover_id']) {?> class="profile-cover-wrapper js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
" data-context="album" <?php } else { ?> class="profile-cover-wrapper" <?php }?>  <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?> style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
');" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                        <div class="profile-cover-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="cover-user"></i>
                        </div>
                        <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-cover" data-handle="cover-user" title='<?php echo __("Delete Cover");?>
'></i>
                        </div>
                        <div class="profile-cover-change-loader">
                            <div class="loader loader_large"></div>
                        </div>
                    <?php }?>
                </div>
                <!-- profile-cover -->

                <!-- profile-avatar -->
                <div class="profile-avatar-wrapper">
                    <img <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_id']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                        <div class="profile-avatar-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="picture-user"></i>
                        </div>
                        <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_picture_default']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-picture" data-handle="picture-user" title='<?php echo __("Delete Picture");?>
'></i>
                        </div>
                        <div class="profile-avatar-change-loader">
                            <div class="loader loader_medium"></div>
                        </div>
                    <?php }?>
                </div>
                <!-- profile-avatar -->

                <!-- profile-name -->
                <div class="profile-name-wrapper">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_subscribed']) {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                    <?php }?>
                </div>
                <!-- profile-name -->

                <!-- profile-buttons -->
                <div class="profile-buttons-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                                <div class="btn btn-default btn-delete js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-check fa-fw"></i> <?php echo __("Friends");?>

                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                                <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                                <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                                <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                                </div>
                            <?php } else { ?>
                                <button type="button" class="btn btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                                </button>
                            <?php }?>

                            <div class="btn-group">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                                    <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <i class="fa fa-check"></i>
                                        <?php echo __("Following");?>

                                    </button>
                                <?php } else { ?>
                                    <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <i class="fa fa-rss"></i>
                                        <?php echo __("Follow");?>

                                    </button>
                                <?php }?>
                                <button type="button" class="btn btn-default js_chat-start" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                    <i class="fa fa-comments-o"></i> <?php echo __("Message");?>

                                </button>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" class="js_report" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><i class="fa fa-flag fa-fw"></i> <?php echo __("Report");?>
</a></li>
                                        <li><a href="#" class="js_block-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><i class="fa fa-minus-circle fa-fw"></i> <?php echo __("Block");?>
</a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-default">
                                <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                            </a>
                        <?php }?>
                    <?php }?>
                </div>
                <!-- profile-buttons -->

                <!-- profile-tabs -->
                <div class="profile-tabs-wrapper">
                    <ul class="nav">
                        <li>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
                                <?php echo __("Timeline");?>

                            </a>
                        </li>
                        <li class="middle-tabs">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends">
                                <?php echo __("Friends");?>
 
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?> 
                                    <small class="text-muted">
                                        (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("Mutual");?>
</span>)
                                    </small>
                                <?php }?>
                            </a>
                        </li>
                        <li class="middle-tabs">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos">
                                <?php echo __("Photos");?>
 
                            </a>
                        </li>
                        <li class="middle-tabs">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
">
                                <?php echo __("Blog");?>

                            </a>
                        </li>
			<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php echo __("More");?>

                                <i class="caret"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="middle-tabs-alt">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                                </li>
                                <li class="middle-tabs-alt">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </li>
				<li class="middle-tabs-alt">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo __("Blog");?>
</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes"><?php echo __("Likes");?>
</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups"><?php echo __("Groups");?>
</a>
                                </li>
                                <li>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/events"><?php echo __("Events");?>
</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- profile-tabs -->
            </div>
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- mutual-friends panel -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id'] && !$_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="col-sm-12">
                        <div class="panel panel-default panel-mutual-friends">
                            <div class="panel-heading">
                                <?php echo __("Do you know");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>

                            </div>
                            <div class="panel-body">
                                <div>
                                    <?php echo __("To see what");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("shares with friends");?>
, 
                                    <span class="text-link">
                                        <?php echo __("send a friend request");?>

                                    </span>
                                    <div class="pull-right flip">
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                                            <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                                            <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                                            <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <i class="fa fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                                            </div>
                                        <?php } else { ?>
                                            <button type="button" class="btn btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                                            </button>
                                        <?php }?>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                                    <div class="mt10 clearfix">
                                        <ul class="pull-left flip">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['mutual_friends'], 'mutual_friend');
$_smarty_tpl->tpl_vars['mutual_friend']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mutual_friend']->value) {
$_smarty_tpl->tpl_vars['mutual_friend']->index++;
$__foreach_mutual_friend_0_saved = $_smarty_tpl->tpl_vars['mutual_friend'];
?>
                                                <li>
                                                    <a data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_lastname'];?>
" class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['mutual_friend']->value['user_picture'];?>
);">
                                                    </a>
                                                </li>
                                                <?php if ($_smarty_tpl->tpl_vars['mutual_friend']->index > 3) {
break 1;
}?>
                                            <?php
$_smarty_tpl->tpl_vars['mutual_friend'] = $__foreach_mutual_friend_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>
                                        <div class="pull-left flip mt10">
                                            <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("Mutual Friends");?>
</span>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <!-- mutual-friends panel -->

                <!-- profile-buttons alt -->
                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                    <div class="col-sm-12">
                        <div class="panel panel-default profile-buttons-wrapper-alt">
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] != $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                                        <div class="btn btn-default btn-delete js_friend-remove" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-check fa-fw"></i> <?php echo __("Friends");?>

                                        </div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['he_request']) {?>
                                        <div class="btn btn-primary js_friend-accept" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Confirm");?>
</div>
                                        <div class="btn btn-default js_friend-decline" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo __("Delete Request");?>
</div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['i_request']) {?>
                                        <div class="btn btn-default btn-sm js_friend-cancel" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-user-plus"></i> <?php echo __("Friend Request Sent");?>

                                        </div>
                                    <?php } else { ?>
                                        <button type="button" class="btn btn-success js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                                        </button>
                                    <?php }?>

                                    <div class="btn-group pull-right flip">
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_follow']) {?>
                                        <button type="button" class="btn btn-default js_unfollow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-check"></i>
                                            <?php echo __("Following");?>

                                        </button>
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-default js_follow" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-rss"></i>
                                            <?php echo __("Follow");?>

                                        </button>
                                        <?php }?>
                                        <button type="button" class="btn btn-default js_chat-start" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <i class="fa fa-comments-o"></i> <?php echo __("Message");?>

                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#" class="js_report" data-handle="user" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><i class="fa fa-flag fa-fw"></i> <?php echo __("Report");?>
</a></li>
                                            <li><a href="#" class="js_block-user" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><i class="fa fa-minus-circle fa-fw"></i><?php echo __("Block");?>
</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-default">
                                        <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                                    </a>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                <?php }?>
                <!-- profile-buttons alt -->

                <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <div class="col-sm-4">
                        <!-- about -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_biography'])) {?>
                                    <div class="about-bio">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_biography'];?>

                                    </div>
                                <?php }?>
                                <ul class="about-list">
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_subscribed']) {?>
                                        <li class="package" <?php if ($_smarty_tpl->tpl_vars['profile']->value['package_color']) {?> style="background: <?php echo $_smarty_tpl->tpl_vars['profile']->value['package_color'];?>
" <?php }?>>
                                            <i class="fa fa-bolt fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['profile']->value['package_name'];?>
 <?php echo __("Member");?>

                                        </li>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_work_title']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-briefcase fa-fw fa-lg"></i>
                                                    <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 <?php echo __("at");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_edu_major']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-graduation-cap fa-fw fa-lg"></i>
                                                    <?php echo __("Studied");?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_major'];?>
 
                                                    <?php echo __("at");?>
  <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_school'];?>
</span>
                                                    <div class="details">
                                                        Class of <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_edu_class'];?>

                                                    </div>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_current_city']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-home fa-fw fa-lg"></i>
                                                    <?php echo __("Lives in");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_current_city'];?>
</span>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_hometown']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-map-marker fa-fw fa-lg"></i>
                                                    <?php echo __("From");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <li>
                                        <div class="about-list-item">
                                            <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_gender'] == "male") {?>
                                                <i class="fa fa-male fa-fw fa-lg"></i>
                                                <?php echo __("Male");?>

                                            <?php } else { ?>
                                                <i class="fa fa-female fa-fw fa-lg"></i>
                                                <?php echo __("Female");?>

                                            <?php }?>
                                        </div>
                                    </li>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_relationship']) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_relationship'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_relationship'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-heart fa-fw fa-lg"></i>
                                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_relationship'] == "relationship") {?>
                                                        <?php echo __("In a relationship");?>

                                                    <?php } elseif ($_smarty_tpl->tpl_vars['profile']->value['user_relationship'] == "complicated") {?>
                                                        <?php echo __("It's complicated");?>

                                                    <?php } else { ?>
                                                        <?php echo __(ucfirst($_smarty_tpl->tpl_vars['profile']->value['user_relationship']));?>

                                                    <?php }?>
                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'] != null) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_birthdate'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                            <li>
                                                <div class="about-list-item">
                                                    <i class="fa fa-calendar fa-fw fa-lg"></i>
                                                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['profile']->value['user_birthdate'],"%d/%m/%Y");?>

                                                </div>
                                            </li>
                                        <?php }?>
                                    <?php }?>

                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_website']) {?>
                                        <li>
                                            <div class="about-list-item">
                                                <i class="fa fa-globe fa-fw fa-lg"></i>
                                                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_website'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_website'];?>
</a>
                                            </div>
                                        </li>
                                    <?php }?>
                                    
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-rss fa-fw fa-lg"></i>
                                            <?php echo __("Followed by");?>
 
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("people");?>
</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- custom fields -->
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_basic'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_basic'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-user fa-fw text-info"></i> <?php echo __("Basic Info");?>

                                </div>
                                <div class="panel-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['basic'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['work']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-briefcase fa-fw text-info"></i> <?php echo __("Work Info");?>

                                </div>
                                <div class="panel-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['work'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['location']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-home fa-fw text-info"></i> <?php echo __("Location Info");?>

                                </div>
                                <div class="panel-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['location'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['education']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_education'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-graduation-cap fa-fw text-info"></i> <?php echo __("Education Info");?>

                                </div>
                                <div class="panel-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['education'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['other']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_other'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_other'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-info-circle fa-fw text-info"></i> <?php echo __("Other Info");?>

                                </div>
                                <div class="panel-body">
                                    <ul class="about-list">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_fields']->value['other'], 'custom_field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['custom_field']->value) {
?>
                                            <?php if ($_smarty_tpl->tpl_vars['custom_field']->value['value']) {?>
                                                <li>
                                                    <strong><?php echo $_smarty_tpl->tpl_vars['custom_field']->value['label'];?>
</strong><br>
                                                    <?php echo $_smarty_tpl->tpl_vars['custom_field']->value['value'];?>

                                                </li>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <?php }?>
                        <!-- custom fields -->

                        <!-- social links -->
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_facebook'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_twitter'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_google'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_youtube'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_instagram'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin'] || $_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte']) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <i class="fa fa-share-alt fa-fw text-info"></i> <?php echo __("Social Links");?>

                                </div>
                                <div class="panel-body text-center">
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_facebook']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_facebook'];?>
" class="btn btn-social-icon btn-facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_twitter']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_twitter'];?>
" class="btn btn-social-icon btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_google']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_google'];?>
" class="btn btn-social-icon btn-google">
                                            <i class="fa fa-google"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_youtube']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_youtube'];?>
" class="btn btn-social-icon btn-pinterest">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_instagram']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_instagram'];?>
" class="btn btn-social-icon btn-instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_linkedin'];?>
" class="btn btn-social-icon btn-linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte']) {?>
                                        <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_social_vkontakte'];?>
" class="btn btn-social-icon btn-vk">
                                            <i class="fa fa-vk"></i>
                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                        <?php }?>
                        <!-- social links -->

                        <!-- friends -->
                        <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <i class="fa fa-users fa-fw text-info"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a> · 
                                    <small><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</small> 
                                    <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                                        <small>
                                            (<span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>)
                                        </small>
                                    <?php }?>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['friends'], '_friend');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_friend']->value) {
?>
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['_friend']->value['user_lastname'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- friends -->

                        <!-- photos -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['photos']) > 0) {?>
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <i class="fa fa-picture-o fa-fw text-info"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos",'_small'=>true), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- photos -->

                        <!-- pages -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <i class="fa fa-flag fa-fw text-info"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/likes"><?php echo __("Likes");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['pages'], '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- pages -->

                        <!-- groups -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <i class="fa fa-users fa-fw text-info"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/groups"><?php echo __("Groups");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['groups'], '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_name'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_group']->value['group_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_group']->value['group_title'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- groups -->

                        <!-- events -->
                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) > 0) {?>
                            <div class="panel panel-default panel-friends">
                                <div class="panel-heading">
                                    <i class="fa fa-calendar fa-fw text-info"></i> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/events"><?php echo __("Events");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['events'], '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                            <div class="col-xs-3 col-sm-4">
                                                <a class="friend-picture" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events/<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_id'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_event']->value['event_picture'];?>
);" >
                                                    <span class="friend-name"><?php echo $_smarty_tpl->tpl_vars['_event']->value['event_title'];?>
</span>
                                                </a>
                                            </div>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </div>
                                </div>
                            </div>
                        <?php }?>
                        <!-- events -->
                    </div>
                    <div class="col-sm-8">
                        <!-- publisher -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['wall_posts_enabled'] && ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_wall'] == 'friends' && $_smarty_tpl->tpl_vars['profile']->value['we_friends'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_wall'] == 'public')) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"user",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id'],'_privacy'=>true), 0, true);
?>

                            <?php }?>

                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value), 0, false);
?>

                        <?php }?>
                        <!-- pinned post -->

                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['profile']->value['user_id']), 0, false);
?>

                        <!-- posts -->
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friends") {?>
                    <!-- friends -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">
                                <!-- friend requests -->
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                                    <div class="pull-right flip">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests" class="btn btn-default btn-sm">
                                            <?php echo __("Friend Requests");?>

                                        </a>
                                    </div>
                                <?php }?>
                                <!-- friend requests -->

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Friends");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends">
                                            <strong class="pr5"><?php echo __("Friends");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['profile']->value['friends_count'];?>
</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['friends_count'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['friends'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['friends']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="friends" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have friends");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- friends -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "photos") {?>
                    <!-- photos -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-photos">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos">
                                            <strong class="pr5"><?php echo __("Photos");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['profile']->value['photos']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['photos'], 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_photo.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_context'=>"photos"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have photos");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- photos -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "albums") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['profile']->value['albums']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['albums'], 'album');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['album']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-type='user'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have albums");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "album") {?>
                    <!-- albums -->
                    <div class="col-xs-12">
                        <div class="panel panel-default panel-albums">
                            <div class="panel-heading with-icon with-nav">
                                <!-- back to albums -->
                                <div class="pull-right flip">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums" class="btn btn-default btn-sm">
                                        <i class="fa fa-arrow-circle-left"></i> <?php echo __("Back to Albums");?>

                                    </a>
                                </div>
                                <!-- back to albums -->

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-picture-o pr5 panel-icon"></i>
                                    <strong><?php echo __("Photos");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                            <?php $_smarty_tpl->_subTemplateRender('file:_album.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            </div>
                        </div>
                    </div>
                    <!-- albums -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followers") {?>
                    <!-- followers -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                                <!-- friend requests -->
                                <div class="pull-right flip">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests" class="btn btn-default btn-sm">
                                        <?php echo __("Friend Requests");?>

                                    </a>
                                </div>
                                <!-- friend requests -->
                                <?php }?>

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Friends");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers">
                                            <strong class="pr5"><?php echo __("Followers");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings"><?php echo __("Followings");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['followers_count'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['followers'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>

                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['followers']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="followers" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have followers");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- followers -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "followings") {?>
                    <!-- followings -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['profile']->value['user_id']) {?>
                                <!-- friend requests -->
                                <div class="pull-right flip">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests" class="btn btn-default btn-sm">
                                        <?php echo __("Friend Requests");?>

                                    </a>
                                </div>
                                <!-- friend requests -->
                                <?php }?>

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Friends");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/friends"><?php echo __("Friends");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo __("Followers");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followings">
                                            <strong class="pr5"><?php echo __("Followings");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followings_count'];?>
</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['followings_count'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['followings'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_parent'=>"profile"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>

                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['followings']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                    <!-- see-more -->
                                    <div class="alert alert-info see-more js_see-more" data-get="followings" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                    <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo __("doesn't have followings");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- followings -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "likes") {?>
                    <!-- likes -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon">
                                <!-- panel title -->
                                <i class="fa fa-thumbs-o-up pr5 panel-icon"></i>
                                <strong><?php echo __("Likes");?>
</strong>
                                <!-- panel title -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_pages'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) > 0) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['pages'], '_page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"profile_pages"), 0, true);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>

                                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['pages']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="profile_pages" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                        <?php }?>
                                    <?php } else { ?>
                                        <p class="text-center text-muted mt10">
                                            <?php echo __("No pages to show");?>

                                        </p>
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No pages to show");?>

                                    </p>
                                <?php }?>

                                    
                            </div>
                        </div>
                    </div>
                    <!-- likes -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "groups") {?>
                    <!-- groups -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon">
                                <!-- panel title -->
                                <i class="fa fa-users pr5 panel-icon"></i>
                                <strong><?php echo __("Groups");?>
</strong>
                                <!-- panel title -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_groups'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) > 0) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['groups'], '_group');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_group']->value) {
?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_group.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"profile_groups"), 0, true);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>

                                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['groups']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="profile_groups" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                        <?php }?>
                                    <?php } else { ?>
                                        <p class="text-center text-muted mt10">
                                            <?php echo __("No groups to show");?>

                                        </p>
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No groups to show");?>

                                    </p>
                                <?php }?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- groups -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "events") {?>
                    <!-- events -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon">
                                <!-- panel title -->
                                <i class="fa fa-calendar pr5 panel-icon"></i>
                                <strong><?php echo __("Events");?>
</strong>
                                <!-- panel title -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_events'] == "public" || ($_smarty_tpl->tpl_vars['profile']->value['user_privacy_events'] == "friends" && $_smarty_tpl->tpl_vars['profile']->value['we_friends'])) {?>
                                    <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) > 0) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profile']->value['events'], '_event');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_event']->value) {
?>
                                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_event.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>"profile_events"), 0, true);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                        </ul>

                                        <?php if (count($_smarty_tpl->tpl_vars['profile']->value['events']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="profile_events" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                        <?php }?>
                                    <?php } else { ?>
                                        <p class="text-center text-muted mt10">
                                            <?php echo __("No events to show");?>

                                        </p>
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No events to show");?>

                                    </p>
                                <?php }?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- events -->
                <?php }?>
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
