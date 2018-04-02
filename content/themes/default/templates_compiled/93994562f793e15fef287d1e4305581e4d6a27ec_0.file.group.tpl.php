<?php
/* Smarty version 3.1.31, created on 2017-12-27 17:15:41
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/group.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43d53df2add1_50612676',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93994562f793e15fef287d1e4305581e4d6a27ec' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/group.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_user.tpl' => 4,
    'file:__feeds_photo.tpl' => 2,
    'file:_publisher.tpl' => 1,
    'file:_pinned_post.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:__feeds_album.tpl' => 1,
    'file:_album.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a43d53df2add1_50612676 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>offcanvas<?php }?>">
    <div class="row">

        <!-- left panel -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <div class="hidden-sm col-md-2 offcanvas-sidebar mt20">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        <?php }?>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-xs-12 <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>col-md-10 offcanvas-mainbar<?php }?>">

            <!-- profile-header -->
            <div class="profile-header">
                <!-- profile-cover -->
                <div <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover_id']) {?> class="profile-cover-wrapper js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover'];?>
" data-context="album" <?php } else { ?> class="profile-cover-wrapper" <?php }?>  <?php if ($_smarty_tpl->tpl_vars['group']->value['group_cover']) {?> style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_cover'];?>
');" <?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <div class="profile-cover-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
                        </div>
                        <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['group']->value['group_cover']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-cover" data-handle="cover-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title='<?php echo __("Delete Cover");?>
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
                    <img <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_id']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <div class="profile-avatar-change">
                            <i class="fa fa-camera js_x-uploader" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
"></i>
                        </div>
                        <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['group']->value['group_picture_default']) {?>x-hidden<?php }?>">
                            <i class="fa fa-trash js_delete-picture" data-handle="picture-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" title='<?php echo __("Delete Picture");?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "public") {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Public Group");?>
' class="fa fa-globe fa-fw privacy-badge"></i>
                    <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Closed Group");?>
' class="fa fa-unlock-alt fa-fw privacy-badge"></i>
                    <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret") {?>
                        <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Secret Group");?>
' class="fa fa-lock fa-fw privacy-badge"></i>
                    <?php }?>
                </div>
                <!-- profile-name -->

                <!-- profile-buttons -->
                <div class="profile-buttons-wrapper">
                    <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                        <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];?>
">
                            <i class="fa fa-check"></i>
                            <?php echo __("Joined");?>

                        </button>
                    <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "pending") {?>
                        <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];?>
">
                            <i class="fa fa-clock-o"></i>
                            <?php echo __("Pending");?>

                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];
}?>">
                            <i class="fa fa-user-plus"></i>
                            <?php echo __("Join");?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings" class="btn btn-default">
                            <i class="fa fa-cog"></i> <?php echo __("Settings");?>

                        </a>
                    <?php } else { ?>
                        <button class="btn btn-default js_report" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                            <i class="fa fa-flag"></i> <?php echo __("Report");?>

                        </button>
                    <?php }?>
                </div>
                <!-- profile-buttons -->

                <!-- profile-tabs -->
                <div class="profile-tabs-wrapper">
                    <ul class="nav">
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed" && $_smarty_tpl->tpl_vars['group']->value['i_joined'] != "approved" && $_smarty_tpl->tpl_vars['group']->value['group_admin'] != $_smarty_tpl->tpl_vars['user']->value->_data['user_id']) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                                    <?php echo __("About");?>

                                </a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                                    <?php echo __("Timeline");?>

                                </a>
                            </li>
                            <li class="middle-tabs">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos">
                                    <?php echo __("Photos");?>

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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members"><?php echo __("Members");?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites"><?php echo __("Invite Friends");?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <!-- profile-tabs -->
            </div>
            <!-- profile-header -->

            <!-- profile-content -->
            <div class="row">
                <!-- profile-buttons alt -->
                <div class="col-sm-12">
                    <div class="panel panel-default profile-buttons-wrapper-alt">
                        <div class="panel-body">
                            <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                                <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];?>
">
                                    <i class="fa fa-check"></i>
                                    <?php echo __("Joined");?>

                                </button>
                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "pending") {?>
                                <button type="button" class="btn btn-default btn-delete js_leave-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];?>
">
                                    <i class="fa fa-clock-o"></i>
                                    <?php echo __("Pending");?>

                                </button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-success js_join-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-privacy="<?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>public<?php } else {
echo $_smarty_tpl->tpl_vars['group']->value['group_privacy'];
}?>">
                                    <i class="fa fa-user-plus"></i>
                                    <?php echo __("Join");?>

                                </button>
                            <?php }?>

                            <div class="pull-right flip">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin']) {?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings" class="btn btn-default">
                                        <i class="fa fa-cog"></i> <?php echo __("Settings");?>

                                    </a>
                                <?php } else { ?>
                                    <button class="btn btn-default js_report" data-handle="group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                        <i class="fa fa-flag"></i> <?php echo __("Report");?>

                                    </button>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- profile-buttons alt -->

                <!-- view content -->
                <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                    <!-- right panel -->
                    <div class="col-sm-4 col-md-push-8">
                        <!-- about -->
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php if (!is_empty($_smarty_tpl->tpl_vars['group']->value['group_description'])) {?>
                                    <div class="about-bio">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>

                                    </div>
                                <?php }?>
                                <ul class="about-list">
                                    <li>
                                        <div class="about-list-item">
                                            <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "public") {?>
                                                <i class="fa fa-globe fa-fw fa-lg"></i>
                                                <?php echo __("Public Group");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") {?>
                                                <i class="fa fa-unlock-alt fa-fw fa-lg"></i>
                                                <?php echo __("Closed Group");?>

                                            <?php } elseif ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret") {?>
                                                <i class="fa fa-lock fa-fw fa-lg"></i>
                                                <?php echo __("Secret Group");?>

                                            <?php }?>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="about-list-item">
                                            <i class="fa fa-users fa-fw fa-lg"></i>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
 <?php echo __("members");?>
</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- about -->

                        <!-- invite friends -->
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved" && $_smarty_tpl->tpl_vars['group']->value['invites']) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading light no_border">
                                    <div class="pull-right flip">
                                        <small><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites"><?php echo __("See All");?>
</a></small>
                                    </div>
                                    <strong class="text-muted"><?php echo __("Invite Friends");?>
</strong>
                                </div>
                                <div class="panel-body ptb5 plr5">
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['invites'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value["connection"],'_small'=>true), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                </div>
                            </div>
                        <?php }?>
                        <!-- invite friends -->

                        <!-- photos -->
                        <?php if ($_smarty_tpl->tpl_vars['group']->value['photos']) {?>
                            <div class="panel panel-default panel-photos">
                                <div class="panel-heading">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['photos'], 'photo');
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
                    </div>
                    <!-- right panel -->

                    <!-- left panel -->
                    <div class="col-sm-8 col-md-pull-4">
                        <!-- group requests -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['group']->value['group_admin'] && $_smarty_tpl->tpl_vars['group']->value['total_requests'] > 0) {?>
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span>&times;</span></button>
                                <div class="icon"><i class="fa fa-info-circle fa-2x"></i></div>
                                <div class="text middle">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/requests" class="alert-link">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['total_requests'];?>
 <?php if ($_smarty_tpl->tpl_vars['group']->value['total_requests'] == 1) {
echo __("person");
} else {
echo __("persons");
}?> <?php echo __("wants to join this group");?>

                                    </a>
                                </div>
                            </div>
                        <?php }?>
                        <!-- group requests -->

                        <!-- publisher -->
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0, false);
?>

                        <?php }?>
                        <!-- publisher -->

                        <!-- pinned post -->
                        <?php if ($_smarty_tpl->tpl_vars['pinned_post']->value) {?>
                            <?php $_smarty_tpl->_subTemplateRender('file:_pinned_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['pinned_post']->value,'_get'=>"posts_group"), 0, false);
?>

                        <?php }?>
                        <!-- pinned post -->

                        <!-- posts -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_group",'_id'=>$_smarty_tpl->tpl_vars['group']->value['group_id']), 0, false);
?>

                        <!-- posts -->
                    </div>
                    <!-- left panel -->
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos">
                                            <strong class="pr5"><?php echo __("Photos");?>
</strong>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums"><?php echo __("Albums");?>
</a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['group']->value['photos']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['photos'], 'photo');
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
                                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['photos']) >= $_smarty_tpl->tpl_vars['system']->value['min_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="photos" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/albums">
                                            <strong class="pr5"><?php echo __("Albums");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['group']->value['albums']) > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['albums'], 'album');
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
                                    <?php if (count($_smarty_tpl->tpl_vars['group']->value['albums']) >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="albums" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
" data-type='group'>
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
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
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/photos"><?php echo __("Photos");?>
</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
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
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "members") {?>
                    <!-- members -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Members");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members">
                                            <strong class="pr5"><?php echo __("Members");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
</span>
                                        </a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['i_joined'] == "approved") {?>
                                        <li>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites">
                                                <strong class="pr5"><?php echo __("Invites");?>
</strong>
                                            </a>
                                        </li>
                                    <?php }?>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] > 0) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['members'], '_user');
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

                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['group_members'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="group_members" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
 <?php echo __("doesn't have members");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- members -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>
                    <!-- invites -->
                    <div class="col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading with-icon with-nav">

                                <!-- panel title -->
                                <div class="mb20">
                                    <i class="fa fa-users pr5 panel-icon"></i>
                                    <strong><?php echo __("Members");?>
</strong>
                                </div>
                                <!-- panel title -->

                                <!-- panel nav -->
                                <ul class="nav nav-tabs">
                                    <li>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/members">
                                            <strong class="pr5"><?php echo __("Members");?>
</strong>
                                            <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_members'];?>
</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/invites">
                                            <strong class="pr5"><?php echo __("Invites");?>
</strong>
                                        </a>
                                    </li>
                                </ul>
                                <!-- panel nav -->
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['group']->value['invites']) {?>
                                    <ul class="row">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['invites'], '_user');
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

                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['invites'] >= $_smarty_tpl->tpl_vars['system']->value['max_results_even']) {?>
                                        <!-- see-more -->
                                        <div class="alert alert-info see-more js_see-more" data-get="group_invites" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                            <span><?php echo __("See More");?>
</span>
                                            <div class="loader loader_small x-hidden"></div>
                                        </div>
                                        <!-- see-more -->
                                    <?php }?>
                                <?php } else { ?>
                                    <p class="text-center text-muted mt10">
                                        <?php echo __("No friends to invite");?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <!-- invites -->
                <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>
                    <div class="col-sm-3">
                        <div class="panel panel-default">
                            <div class="panel-body with-nav">
                                <ul class="side-nav">
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings"><i class="fa fa-cog fa-fw fa-lg pr10"></i> <?php echo __("Group Settings");?>
</a>
                                    </li>
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] != "public") {?>
                                        <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "requests") {?>class="active"<?php }?>>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/requests"><i class="fa fa-user-plus fa-fw fa-lg pr10"></i> <?php echo __("Member Requests");?>
</a>
                                        </li>
                                    <?php }?>
                                    <li <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>class="active"<?php }?>>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
/settings/delete"><i class="fa fa-trash fa-fw fa-lg pr10"></i> <?php echo __("Delete Group");?>
</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <!-- edit -->
                        <div class="panel panel-default">
                            <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-cog pr5 panel-icon"></i>
                                    <strong><?php echo __("Group Settings");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=group&do=edit&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                        <div class="form-group">
                                            <label for="title"><?php echo __("Name Your Group");?>
</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder='<?php echo __("Name of your group");?>
' value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_title'];?>
">
                                        </div>
                                        <div class="form-group">
                                            <label for="username"><?php echo __("Web Address");?>
</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span>
                                                <input type="text" class="form-control" name="username" id="username" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_name'];?>
">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="privacy"><?php echo __("Select Privacy");?>
</label>
                                            <select class="form-control selectpicker" name="privacy">
                                                <option <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "public") {?>selected<?php }?> value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __('Public Group');?>
</b><br><?php echo __('Anyone can see the group, its members and their posts');?>
.
                                                </div></div>"><?php echo __("Public Group");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "closed") {?>selected<?php }?> value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __('Closed Group');?>
</b><br><?php echo __('Only members can see posts');?>
.
                                                </div></div>"><?php echo __("Closed Group");?>
</option>
                                                <option <?php if ($_smarty_tpl->tpl_vars['group']->value['group_privacy'] == "secret") {?>selected<?php }?> value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __('Secret Group');?>
</b><br><?php echo __('Only members can find the group and see posts');?>
.
                                                </div></div>"><?php echo __("Secret Group");?>
</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="description"><?php echo __("About");?>
</label>
                                            <textarea class="form-control" name="description" id="description"><?php echo $_smarty_tpl->tpl_vars['group']->value['group_description'];?>
</textarea>
                                        </div>

                                        <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>

                                        <!-- error -->
                                        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                                        <!-- error -->
                                    </form>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "requests") {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-user-plus pr5 panel-icon"></i>
                                    <strong><?php echo __("Member Requests");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['requests']) {?>
                                        <ul class="row">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['requests'], '_user');
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

                                        <?php if ($_smarty_tpl->tpl_vars['group']->value['requests'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                            <!-- see-more -->
                                            <div class="alert alert-info see-more js_see-more" data-get="group_requests" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                                <span><?php echo __("See More");?>
</span>
                                                <div class="loader loader_small x-hidden"></div>
                                            </div>
                                            <!-- see-more -->
                                        <?php }?>
                                    <?php } else { ?>
                                        <p class="text-center text-muted mt10">
                                            <?php echo __("No Requests");?>

                                        </p>
                                    <?php }?>
                                </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "delete") {?>
                                <div class="panel-heading with-icon">
                                    <!-- panel title -->
                                    <i class="fa fa-trash pr5 panel-icon"></i>
                                    <strong><?php echo __("Delete Group");?>
</strong>
                                    <!-- panel title -->
                                </div>
                                <div class="panel-body">
                                    <div class="alert alert-warning">
                                        <i class="fa fa-exclamation-triangle fa-lg mr10"></i><?php echo __("Once you delete your group you will no longer can access it again");?>

                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-danger js_delete-group" data-id="<?php echo $_smarty_tpl->tpl_vars['group']->value['group_id'];?>
">
                                            <i class="fa fa-trash-o"></i>
                                            <?php echo __("Delete Group");?>

                                        </button>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <!-- edit -->
                    </div>
                <?php }?>
                <!-- view content -->
            </div>
            <!-- profile-content -->
        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
