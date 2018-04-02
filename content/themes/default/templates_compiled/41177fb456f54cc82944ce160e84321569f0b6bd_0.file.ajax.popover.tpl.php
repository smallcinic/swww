<?php
/* Smarty version 3.1.31, created on 2017-12-27 17:05:56
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.popover.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43d2f4c7d7c2_64459902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41177fb456f54cc82944ce160e84321569f0b6bd' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.popover.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43d2f4c7d7c2_64459902 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['type']->value == "user") {?>
    <!-- user popover -->
    <div class="user-popover-content">
        <div class="user-card">
            <div class="user-card-cover" <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_cover'];?>
');"<?php }?>>
            </div>
            <div class="user-card-avatar">
                <img src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
">
            </div>
            <div class="user-card-info">
                <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <div class="info">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_name'];?>
/followers"><?php echo $_smarty_tpl->tpl_vars['profile']->value['followers_count'];?>
 <?php echo __("followers");?>
</a>
                </div>
            </div>
        </div>
        <div class="user-card-meta">
            <!-- mutual friends -->
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] && $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'] > 0) {?>
                <div class="mb10">
                    <i class="fa fa-users fa-fw pr5"></i>
                    <span class="text-underline" data-toggle="modal" data-url="users/mutual_friends.php?uid=<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['mutual_friends_count'];?>
 <?php echo __("mutual friends");?>
</span>
                </div>
            <?php }?>
            <!-- mutual friends -->
            <!-- work -->
            <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_work_title'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_work'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="mb10">
                        <i class="fa fa-briefcase fa-fw pr5"></i>
                        <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_title'];?>
 <?php echo __("at");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_work_place'];?>
</span>
                    </div>
                <?php }?>
            <?php }?>
            <!-- work -->
            <!-- hometown -->
            <?php if (!is_empty($_smarty_tpl->tpl_vars['profile']->value['user_hometown'])) {?>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['user_id'] == $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] || $_smarty_tpl->tpl_vars['profile']->value['user_privacy_location'] == "public" || $_smarty_tpl->tpl_vars['profile']->value['we_friends']) {?>
                    <div class="mb10">
                        <i class="fa fa-map-marker fa-fw pr5"></i>
                        <?php echo __("From");?>
 <span class="text-link"><?php echo $_smarty_tpl->tpl_vars['profile']->value['user_hometown'];?>
</span>
                    </div>
                <?php }?>
            <?php }?>
            <!-- hometown -->
        </div>
        <div class="footer">
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
                    <div class="btn btn-success btn-sm js_friend-add" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
">
                        <i class="fa fa-user-plus"></i> <?php echo __("Add Friend");?>

                    </div>
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
                    <button type="button" class="btn btn-default js_chat-start" data-uid="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['profile']->value['user_lastname'];?>
" data-picture="<?php echo $_smarty_tpl->tpl_vars['profile']->value['user_picture'];?>
"><?php echo __("Message");?>
</button>
                </div>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings/profile" class="btn btn-default">
                    <i class="fa fa-pencil"></i> <?php echo __("Update Info");?>

                </a>
            <?php }?>
        </div>
    </div>
    <!-- user popover -->
<?php } else { ?>
    <!-- page popover -->
    <div class="user-popover-content">
        <div class="user-card">
            <div class="user-card-cover" <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_cover']) {?>style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_cover'];?>
');"<?php }?>></div>
            <div class="user-card-avatar">
                <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
">
            </div>
            <div class="user-card-info">
                <a class="name" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_title'];?>
</a>
                <?php if ($_smarty_tpl->tpl_vars['profile']->value['page_verified']) {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <div class="info"><?php echo $_smarty_tpl->tpl_vars['profile']->value['page_likes'];?>
 <?php echo __("Likes");?>
</div>
            </div>
        </div>
        <div class="footer">
            <?php if ($_smarty_tpl->tpl_vars['profile']->value['i_like']) {?>
                <button type="button" class="btn btn-default js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Unlike");?>

                </button>
            <?php } else { ?>
                <button type="button" class="btn btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['profile']->value['page_id'];?>
">
                    <i class="fa fa-thumbs-o-up"></i>
                    <?php echo __("Like");?>

                </button>
            <?php }?>
        </div>
    </div>
    <!-- page popover -->
<?php }
}
}
