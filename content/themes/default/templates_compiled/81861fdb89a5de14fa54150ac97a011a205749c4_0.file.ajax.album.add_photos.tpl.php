<?php
/* Smarty version 3.1.31, created on 2018-03-05 17:12:51
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.album.add_photos.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9d7a93747754_63702431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81861fdb89a5de14fa54150ac97a011a205749c4' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.album.add_photos.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_emoji-menu.tpl' => 1,
  ),
),false)) {
function content_5a9d7a93747754_63702431 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-body plr0 ptb0">
    <div class="x-form publisher mini" data-id="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">

        <!-- publisher close -->
        <button type="button" class="close mr10 pull-right flip" data-dismiss="modal" aria-hidden="true">×</button>
        <!-- publisher close -->

        <!-- publisher tabs -->
        <ul class="publisher-tabs clearfix">
            <li>
                <span class="active">
                    <i class="fa fa-picture-o fa-fw"></i> <?php echo __("Add Photos");?>

                </span>
            </li>
        </ul>
        <!-- publisher tabs -->

        <!-- post message -->
        <div class="relative">
            <textarea dir="auto" class="js_autosize js_mention" placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
'></textarea>
        </div>
        <!-- post message -->

        <!-- post attachments -->
        <div class="publisher-attachments attachments clearfix x-hidden">
            <ul></ul>
        </div>
        <!-- post attachments -->

        <!-- post location -->
        <div class="publisher-meta" data-meta="location">
            <i class="fa fa-map-marker fa-fw"></i>
            <input class="js_geocomplete" type="text" placeholder='<?php echo __("Where are you?");?>
'>
        </div>
        <!-- post location -->

        <!-- publisher-footer -->
        <div class="publisher-footer clearfix">
            <!-- publisher-tools -->
            <ul class="publisher-tools">
                <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
                    <li data-toggle="tooltip" data-placement="top" title='<?php echo __("Add Photos");?>
'>
                        <span class="publisher-tools-attach js_publisher-photos">
                            <i class="fa fa-camera fa-fw js_x-uploader" data-handle="publisher" data-multiple="true"></i>
                        </span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
                    <li data-toggle="tooltip" data-placement="top" title='<?php echo __("Check In");?>
'>
                        <span class="js_publisher-location">
                            <i class="fa fa-map-marker fa-fw"></i>
                        </span>
                    </li>
                <?php }?>
                <li class="relative">
                    <span class="js_emoji-menu-toggle" data-toggle="tooltip" data-placement="top" title='<?php echo __("Insert an emoji");?>
'>
                        <i class="fa fa-smile-o fa-fw"></i>
                    </span>
                    <?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </li>
            </ul>
            <!-- publisher-tools -->

            <!-- publisher-buttons -->
            <div class="pull-right flip mt5 mr10">
                <?php if ($_smarty_tpl->tpl_vars['album']->value['user_type'] == 'user' && !$_smarty_tpl->tpl_vars['album']->value['in_group'] && !$_smarty_tpl->tpl_vars['album']->value['in_event']) {?>
                    <!-- privacy -->
                    <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs"><?php echo __("Friends");?>
</span> <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="#" data-title='<?php echo __("Shared with: Public");?>
' data-value="public">
                                    <i class="fa fa-globe"></i> <?php echo __("Public");?>

                                </a>
                            </li>
                            <li>
                                <a href="#" data-title='<?php echo __("Shared with: Friends");?>
' data-value="friends">
                                    <i class="fa fa-users"></i> <?php echo __("Friends");?>

                                </a>
                            </li>
                            <li>
                                <a href="#" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
                                    <i class="fa fa-lock"></i> <?php echo __("Only Me");?>

                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- privacy -->
                <?php } else { ?>
                    <!-- privacy -->
                    <?php if ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "custom") {?>
                        <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="custom" title='<?php echo __("Shared with");?>
 <?php echo __("Custom People");?>
'>
                            <button type="button" class="btn btn-default">
                                <i class="btn-group-icon fa fa-cog"></i> <span class="btn-group-text hidden-xs"><?php echo __("Custom");?>
</span>
                            </button>
                        </div>
                    <?php } elseif ($_smarty_tpl->tpl_vars['album']->value['privacy'] == "public") {?>
                        <div class="btn-group" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
                            <button type="button" class="btn btn-default">
                                <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs"><?php echo __("Public");?>
</span>
                            </button>
                        </div>
                    <?php }?>
                    <!-- privacy -->
                <?php }?>
                <button type="button" class="btn btn-primary js_publisher-album"><?php echo __("Post");?>
</button>
            </div>
            <!-- publisher-buttons -->
        </div>
        <!-- publisher-footer -->
    </div>
</div><?php }
}
