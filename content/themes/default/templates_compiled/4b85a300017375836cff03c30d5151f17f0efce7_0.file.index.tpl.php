<?php
/* Smarty version 3.1.31, created on 2018-02-02 17:32:59
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a74a0cbb832f2_34101756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b85a300017375836cff03c30d5151f17f0efce7' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/index.tpl',
      1 => 1517592697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sign_form.tpl' => 1,
    'file:_directory.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_announcements.tpl' => 1,
    'file:_publisher.tpl' => 1,
    'file:_boosted_post.tpl' => 1,
    'file:_posts.tpl' => 4,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a74a0cbb832f2_34101756 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
    <!-- page content -->
    <div class="index-wrapper" <?php if (!$_smarty_tpl->tpl_vars['system']->value['system_wallpaper_default'] && $_smarty_tpl->tpl_vars['system']->value['system_wallpaper']) {?> style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['system']->value['system_wallpaper'];?>
')" <?php }?>>
        <div class="container">
            <div class="index-intro">
                <h1>
                    <?php echo __("Welcome to");?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['system_title'];?>

                </h1>
                <p>
                    <?php echo __("Share your memories, connect with others, make new friends");?>

                </p>
            </div>

            <div class="row relative">
                
                <?php if ($_smarty_tpl->tpl_vars['random_profiles']->value) {?>
                    <!-- random 4 users -->
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['random_profiles']->value, 'random_profile');
$_smarty_tpl->tpl_vars['random_profile']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['random_profile']->value) {
$_smarty_tpl->tpl_vars['random_profile']->index++;
$__foreach_random_profile_0_saved = $_smarty_tpl->tpl_vars['random_profile'];
?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_name'];?>
" class="fly-head" 
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 0) {?> style="top: 140px;left: 50px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 1) {?> style="bottom: 60px;left: 210px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 2) {?> style="top: 140px;right: 50px;" <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['random_profile']->index == 3) {?> style="bottom: 60px;right: 210px;" <?php }?>
                            data-toggle="tooltip" data-placement="top" title="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_lastname'];?>
">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['random_profile']->value['user_picture'];?>
">
                        </a>
                    <?php
$_smarty_tpl->tpl_vars['random_profile'] = $__foreach_random_profile_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    <!-- random 4 users -->
                <?php }?>

                <!-- sign in/up form -->
                <?php $_smarty_tpl->_subTemplateRender('file:_sign_form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <!-- sign in/up form -->
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['directory_enabled']) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_directory.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>
    <!-- page content -->
<?php } else { ?>
    <!-- page content -->
    <div class="container mt20 offcanvas">
        <div class="row">

            <!-- left panel -->
            <div class="col-sm-4 col-md-2 offcanvas-sidebar">
                <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
            <!-- left panel -->

            <div class="col-sm-8 col-md-10 offcanvas-mainbar">
                <div class="row">
                    <!-- center panel -->
                    <div class="col-sm-12 col-md-12">

                        <!-- announcments -->
                        <?php $_smarty_tpl->_subTemplateRender('file:_announcements.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        <!-- announcments -->

                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>

                            <!-- stories -->
                            <?php if ($_smarty_tpl->tpl_vars['system']->value['stories_enabled']) {?>
                                <div class="panel panel-default panel-users">
                                    <div class="panel-heading light no_border">
                                        <strong class="text-muted"><?php echo __("Stories");?>
</strong>
                                        <div class="x-muted text-clickable pull-right flip">
                                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Stories are photos and videos that only last 24 hours");?>
'></i>
                                        </div>
                                        
                                    </div>
                                    <div class="panel-body pt5">
                                        <div class="row">
                                            <!-- add new story -->
                                            <div class="col-xs-2">
                                                <div class="user-picture" data-toggle="modal" data-url="posts/story.php?do=create" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['user']->value->_data['user_picture'];?>
);">
                                                    <div class="add">
                                                        <i class="fa fa-plus-circle"></i>
                                                    </div>
                                                </div> 
                                            </div>
                                            <!-- add new story -->

                                            <!-- users stories -->
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stories']->value, 'story');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['story']->value) {
?>
                                                <div class="col-xs-2">
                                                    <div class="user-picture-wrapper">
                                                        <div class="user-picture js_story" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['story']->value['user_picture'];?>
);" data-items='<?php echo $_smarty_tpl->tpl_vars['story']->value["media"];?>
' data-toggle="tooltip" data-placement="top" title='<?php echo __("Watch");?>
 <?php echo $_smarty_tpl->tpl_vars['story']->value["user_firstname"];?>
 <?php echo $_smarty_tpl->tpl_vars['story']->value["user_lastname"];?>
 <?php echo __("Story");?>
'>
                                                        </div>    
                                                    </div>
                                                </div>
                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                            <!-- users stories -->
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            <!-- stories -->

                            <!-- publisher -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_publisher.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>"me",'_privacy'=>true), 0, false);
?>

                            <!-- publisher -->

                            <!-- boosted post -->
                            <?php if ($_smarty_tpl->tpl_vars['boosted_post']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:_boosted_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['boosted_post']->value), 0, false);
?>

                            <?php }?>
                            <!-- boosted post -->

                            <!-- posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"newsfeed"), 0, false);
?>

                            <!-- posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "saved") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"saved",'_title'=>__("Saved Posts")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "articles") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"article",'_title'=>__("My Articles")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "products") {?>
                            <!-- saved posts stream -->
                            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_profile",'_id'=>$_smarty_tpl->tpl_vars['user']->value->_data['user_id'],'_filter'=>"product",'_title'=>__("My Products")), 0, true);
?>

                            <!-- saved posts stream -->

                        <?php }?>
                    </div>
                    <!-- center panel -->

                </div>
            </div>

        </div>
    </div>
    <!-- page content -->
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
