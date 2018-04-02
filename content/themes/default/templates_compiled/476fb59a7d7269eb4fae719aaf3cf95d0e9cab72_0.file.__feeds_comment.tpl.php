<?php
/* Smarty version 3.1.31, created on 2018-03-05 19:21:44
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_comment.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9d98c8394ec3_38205670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '476fb59a7d7269eb4fae719aaf3cf95d0e9cab72' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_comment.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.text.tpl' => 1,
    'file:__feeds_comment.tpl' => 2,
    'file:_emoji-menu.tpl' => 1,
  ),
),false)) {
function content_5a9d98c8394ec3_38205670 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
    <div class="comment <?php if ($_smarty_tpl->tpl_vars['_is_reply']->value) {?>reply<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['comment_id'];?>
" id="comment_<?php echo $_smarty_tpl->tpl_vars['_comment']->value['comment_id'];?>
">
        <!-- comment avatar -->
        <div class="comment-avatar">
            <a class="comment-avatar-picture" href="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['author_url'];?>
" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['_comment']->value['author_picture'];?>
);">
            </a>
        </div>
        <!-- comment avatar -->

        <!-- comment body -->
        <div class="comment-data">
            <!-- comment menu -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                <?php if (!$_smarty_tpl->tpl_vars['_comment']->value['edit_comment'] && !$_smarty_tpl->tpl_vars['_comment']->value['delete_comment']) {?>
                    <div class="comment-btn">
                        <button type="button" class="close js_report" data-handle="comment" data-id="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['comment_id'];?>
"  data-toggle="tooltip" data-placement="top" title='<?php echo __("Report");?>
'>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } elseif (!$_smarty_tpl->tpl_vars['_comment']->value['edit_comment'] && $_smarty_tpl->tpl_vars['_comment']->value['delete_comment']) {?>
                    <div class="comment-btn">
                        <button type="button" class="close js_delete-comment" data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
'>
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } else { ?>
                    <div class="comment-btn dropdown pull-right flip">
                        <i class="fa fa-times dropdown-toggle" data-toggle="dropdown" data-tooltip="tooltip" data-placement="top" title='<?php echo __("Edit or Delete");?>
'></i>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="#" class="js_edit-comment"><?php echo __("Edit Comment");?>
</a>
                            </li>
                            <li>
                                <a href="#" class="js_delete-comment"><?php echo __("Delete Comment");?>
</a>
                            </li>
                        </ul>
                    </div>
                <?php }?>
            <?php }?>
            <!-- comment menu -->

            <!-- comment author & text  -->
            <div class="mb5 js_notifier-flasher">
                <!-- author -->
                <span class="text-semibold js_user-popover" data-type="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['user_id'];?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['author_url'];?>
" ><?php echo $_smarty_tpl->tpl_vars['_comment']->value['author_name'];?>
</a>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['_comment']->value['author_verified']) {?>
                <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified User");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
                <?php }?>
                <!-- author -->

                <!-- text -->
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.text.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- text -->
            </div>
            <!-- comment author & text  -->

            <!-- comment actions & time  -->
            <div>
                <!-- actions -->
                <?php if ($_smarty_tpl->tpl_vars['_comment']->value['i_like']) {?>
                    <span class="text-link js_unlike-comment"><?php echo __("Unlike");?>
</span>
                <?php } else { ?>
                    <span class="text-link js_like-comment"><?php echo __("Like");?>
</span>
                <?php }?>
                <span class="js_comment-likes <?php ob_start();
echo $_smarty_tpl->tpl_vars['_comment']->value['likes'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1 == 0) {?>x-hidden<?php }?>">
                    · 
                    <span class="text-link" data-toggle="modal" data-url="posts/who_likes.php?comment_id=<?php echo $_smarty_tpl->tpl_vars['_comment']->value['comment_id'];?>
"><i class="fa fa-thumbs-o-up"></i> <span class="js_comment-likes-num"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['likes'];?>
</span></span>
                </span>
                · 
                <span class="text-link js_reply" data-username="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_name'] != $_smarty_tpl->tpl_vars['_comment']->value['author_user_name']) {
echo $_smarty_tpl->tpl_vars['_comment']->value['author_user_name'];
}?>"><?php echo __("Reply");?>
</span>
                <!-- actions -->

                <!-- time  -->
                · 
                <small class="text-x-muted js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['_comment']->value['time'];?>
</small>
                <!-- time  -->
            </div>
            <!-- comment actions & time  -->

            <!-- comment replies  -->
            <?php if (!$_smarty_tpl->tpl_vars['_is_reply']->value) {?>
                <?php if (!$_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['_comment']->value['replies'] > 0) {?>
                <div class="ptb10 plr10 js_replies-toggle">
                    <span class="text-link">
                        <i class="fa fa-comments-o"></i>
                        <?php echo $_smarty_tpl->tpl_vars['_comment']->value['replies'];?>
 <?php echo __("Replies");?>

                    </span>
                </div>
                <?php }?>
                <div class="comment-replies <?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?>x-hidden<?php }?>">
                    <!-- previous replies -->
                    <?php if ($_smarty_tpl->tpl_vars['_comment']->value['replies'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                        <div class="pb10 text-center js_see-more" data-get="comment_replies" data-id="<?php echo $_smarty_tpl->tpl_vars['_comment']->value['comment_id'];?>
" data-remove="true">
                            <span class="text-link">
                                <i class="fa fa-comment-o"></i>
                                <?php echo __("View previous replies");?>

                            </span>
                            <div class="loader loader_small x-hidden"></div>
                        </div>
                    <?php }?>
                    <!-- previous replies -->

                    <!-- replies -->
                    <ul class="js_replies">
                        <?php if ($_smarty_tpl->tpl_vars['_comment']->value['replies'] > 0) {?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['_comment']->value['comment_replies'], 'reply');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
?>
                            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['reply']->value,'_is_reply'=>true), 0, true);
?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                        <?php }?>
                    </ul>
                    <!-- replies -->

                    <!-- post a reply -->
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
                        <div class="x-hidden js_reply-form">
                            <div class="x-form comment-form">
                                <textarea dir="auto" class="js_autosize js_mention js_post-reply" rows="1" placeholder='<?php echo __("Write a reply");?>
'></textarea>
                                <div class="x-form-tools">
                                    <div class="x-form-tools-post js_post-reply">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                    <div class="x-form-tools-attach">
                                        <i class="fa fa-camera js_x-uploader" data-handle="comment"></i>
                                    </div>
                                    <div class="x-form-tools-emoji js_emoji-menu-toggle">
                                        <i class="fa fa-smile-o fa-lg"></i>
                                    </div>
                                    <?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                </div>
                            </div>
                            <div class="comment-attachments attachments clearfix x-hidden">
                                <ul>
                                    <li class="loading">
                                        <div class="loader loader_small"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php }?>
                    <!-- post a reply -->
                </div>
            <?php }?>
            <!-- comment replies  -->
        </div>
        <!-- comment body -->
    </div>
</li><?php }
}
