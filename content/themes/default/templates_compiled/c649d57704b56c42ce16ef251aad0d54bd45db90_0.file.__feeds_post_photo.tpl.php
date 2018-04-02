<?php
/* Smarty version 3.1.31, created on 2018-01-14 20:44:17
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_post_photo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a5bc121d954c2_52510744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c649d57704b56c42ce16ef251aad0d54bd45db90' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_post_photo.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.social.tpl' => 1,
    'file:__feeds_post.comments.tpl' => 1,
  ),
),false)) {
function content_5a5bc121d954c2_52510744 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- post body -->
<div class="post-body <?php if ($_smarty_tpl->tpl_vars['_lightbox']->value) {?>pt0<?php }?>">

    <!-- post header -->
    <div class="post-header">
        <!-- post picture -->
        <div class="post-avatar">
            <a class="post-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_picture'];?>
);">
            </a>
        </div>
        <!-- post picture -->

        <!-- post meta -->
        <div class="post-meta">
            <!-- post menu & author name & type meta & feeling -->
            <div>
                <!-- post author name -->
                <span class="js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['post']->value['user_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_author_name'];?>
</a>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['post_author_verified']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['post']->value['user_type'] == "user") {?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php } else { ?>
                    <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                    <?php }?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['post']->value['user_subscribed']) {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Pro User");?>
' class="fa fa-bolt fa-fw pro-badge"></i>
                <?php }?>
                <!-- post author name -->
            </div>
            <!-- post menu & author name & type meta & feeling -->

            <!-- post time & location & privacy -->
            <div class="post-time">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</a>

                <?php if ($_smarty_tpl->tpl_vars['post']->value['location']) {?>
                ·
                <i class="fa fa-map-marker"></i> <span><?php echo $_smarty_tpl->tpl_vars['post']->value['location'];?>
</span>
                <?php }?>

                - 
                <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "me") {?>
                    <i class="fa fa-lock" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Only Me");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "friends") {?>
                    <i class="fa fa-users" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Friends");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                    <i class="fa fa-globe" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Public");?>
'></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "custom") {?>
                    <i class="fa fa-cog" data-toggle="tooltip" data-placement="top" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'></i>
                <?php }?>
            </div>
            <!-- post time & location & privacy -->
        </div>
        <!-- post meta -->
    </div>
    <!-- post header -->

    <!-- photo -->
    <?php if (!$_smarty_tpl->tpl_vars['_lightbox']->value) {?>
        <div class="mt10 clearfix">
            <div class="pg_wrapper">
                <div class="pg_1x">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/photos/<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
" data-context="<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>album<?php } else { ?>post<?php }?>">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['photo']->value['source'];?>
">
                    </a>
                </div>
            </div>
        </div>
    <?php }?>
    <!-- photo -->

    <!-- post stats -->
    <div class="post-stats">
        <!-- likes -->
        <span class="text-clickable" data-toggle="modal" data-url="posts/who_likes.php?<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];
} else { ?>photo_id=<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];
}?>">
            <i class="fa fa-thumbs-o-up"></i> 
            <span class="js_post-likes-num">
                <?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['likes'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['likes'];
}?>
            </span>
        </span>
        <!-- likes -->

        <span class="pull-right flip">
            <!-- comments -->
            <span class="text-clickable js_comments-toggle">
                <i class="fa fa-comments"></i> <?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {
echo $_smarty_tpl->tpl_vars['post']->value['comments'];
} else {
echo $_smarty_tpl->tpl_vars['photo']->value['comments'];
}?> <?php echo __("Comments");?>

            </span>
            <!-- comments -->

            <!-- shares -->
            <span class="text-clickable ml10 <?php if ($_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                <i class="fa fa-share"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];?>
 <?php echo __("Shares");?>

            </span>
            <!-- shares -->
        </span>
    </div>
    <!-- post stats -->

    <!-- post actions -->
    <div class="post-actions">
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <!-- like -->
            <span class="text-clickable mr20 <?php if ($_smarty_tpl->tpl_vars['photo']->value['i_like']) {?>text-active js_unlike-<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>post<?php } else { ?>photo<?php }
} else { ?>js_like-<?php if ($_smarty_tpl->tpl_vars['photo']->value['is_single']) {?>post<?php } else { ?>photo<?php }
}?>">
                <i class="fa fa-thumbs-o-up"></i> <span><?php echo __("Like");?>
</span>
            </span>
            <!-- like -->

            <!-- comment -->
            <span class="text-clickable js_comment mr20">
                <i class="fa fa-comment-o"></i> <span><?php echo __("Comment");?>
</span>
            </span>
            <!-- comment -->

            <!-- share -->
            <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public") {?>
                <span class="text-clickable <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>js_share-toggle<?php } else { ?>js_share<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
                    <i class="fa fa-share"></i> <span><?php echo __("Share");?>
</span>
                </span>
            <?php }?>
            <!-- share -->
        <?php } else { ?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like, share and comment!");?>
</a>
        <?php }?>
    </div>
    <!-- post actions -->
</div>

<!-- post footer -->
<div class="post-footer">
    <!-- social sharing -->
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.social.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!-- social sharing -->

    <!-- comments -->
    <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_is_photo'=>!$_smarty_tpl->tpl_vars['photo']->value['is_single'] ? true : false), 0, false);
?>

    <!-- comments -->
</div>
<!-- post footer --><?php }
}
