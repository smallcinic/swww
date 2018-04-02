<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:50:51
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_publisher.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cf6bb29756_79382309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a38727065d290e096472146c3687e982c747bf44' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/_publisher.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_emoji-menu.tpl' => 1,
  ),
),false)) {
function content_5a43cf6bb29756_79382309 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="x-form publisher" data-handle="<?php echo $_smarty_tpl->tpl_vars['_handle']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
"<?php }?>>

    <!-- publisher loader -->
    <div class="publisher-loader">
        <div class="loader loader_small"></div>
    </div>
    <!-- publisher loader -->

    <!-- publisher tabs -->
    <ul class="publisher-tabs clearfix">
        <li>
            <span class="active js_publisher-tab" data-tab="post">
                <i class="fa fa-pencil fa-fw"></i> <span class="hidden-xs"><?php echo __("Write");?>
</span> <?php echo __("Post");?>

            </span>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['photos_enabled']) {?>
            <li>
                <span class="js_publisher-tab" data-tab="album">
                    <i class="fa fa-picture-o fa-fw"></i> <span class="hidden-xs"><?php echo __("Create");?>
</span> <?php echo __("Album");?>

                </span>
            </li>
        <?php }?>
        <li class="dropdown">
            <span class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-bars fa-fw"></i> <?php echo __("More");?>

            </span>
            <ul class="dropdown-menu">
                <li>
                    <span class="js_publisher-tab" data-tab="poll">
                        <i class="fa fa-pie-chart fa-fw"></i> <?php echo __("Create Poll");?>

                    </span>
                </li>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled'] && $_smarty_tpl->tpl_vars['_handle']->value != "group" && $_smarty_tpl->tpl_vars['_handle']->value != "event") {?>
                    <li>
                        <span class="js_publisher-tab" data-tab="product">
                            <i class="fa fa-tag fa-fw"></i> <?php echo __("Sell Something");?>

                        </span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled'] && $_smarty_tpl->tpl_vars['_handle']->value != "group" && $_smarty_tpl->tpl_vars['_handle']->value != "event") {?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new">
                            <i class="fa fa-file-text fa-fw"></i> <?php echo __("Write Article");?>

                        </a>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
                    <li>
                        <span class="publisher-tools-attach js_publisher-tab" data-tab="video">
                            <i class="fa fa-video-camera fa-fw js_x-uploader" data-handle="publisher" data-type="video"></i> <?php echo __("Add Video");?>

                        </span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_enabled']) {?>
                    <li>
                        <span class="publisher-tools-attach js_publisher-tab" data-tab="audio">
                            <i class="fa fa-music fa-fw js_x-uploader" data-handle="publisher" data-type="audio"></i> <?php echo __("Add Audio");?>

                        </span>
                    </li>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['system']->value['file_enabled']) {?>
                    <li>
                        <span class="publisher-tools-attach js_publisher-tab" data-tab="file">
                            <i class="fa fa-paperclip fa-fw js_x-uploader" data-handle="publisher" data-type="file"></i> <?php echo __("Add File");?>

                        </span>
                    </li>
                <?php }?>
            </ul>
        </li>
    </ul>
    <!-- publisher tabs -->

    <!-- post product -->
    <div class="publisher-meta top" data-meta="product">
        <i class="fa fa-tag fa-fw"></i>
        <input name="name" type="text" placeholder='<?php echo __("What are you selling?");?>
'>
    </div>
    <div class="publisher-meta top" data-meta="product">
        <i class="fa fa-money fa-fw"></i>
        <input name="price" type="text" placeholder='<?php echo __("Add price");?>
 (<?php echo $_smarty_tpl->tpl_vars['system']->value["system_currency"];?>
)'>
    </div>
    <div class="publisher-meta top" data-meta="product">
        <i class="fa fa-shopping-basket fa-fw"></i>
        <select name="category_id">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['market_categories']->value, 'category');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
"><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

        </select>
    </div>
    <div class="publisher-meta top" data-meta="product">
        <i class="fa fa-map-marker fa-fw"></i>
        <input name="location" class="js_geocomplete" type="text" placeholder='<?php echo __("Add Location (optional)");?>
'>
    </div>
    <!-- post product -->

    <!-- post message -->
    <div class="relative">
        <textarea dir="auto" class="js_autosize js_mention js_publisher-scraper" data-init-placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
' placeholder='<?php echo __("What is on your mind? #Hashtag.. @Mention.. Link..");?>
'></textarea>
    </div>
    <!-- post message -->

    <!-- publisher scraper -->
    <div class="publisher-scraper"></div>
    <!-- publisher scraper -->

    <!-- post attachments -->
    <div class="publisher-attachments attachments clearfix x-hidden">
        <ul></ul>
    </div>
    <!-- post attachments -->

    <!-- post album -->
    <div class="publisher-meta" data-meta="album">
        <i class="fa fa-picture-o fa-fw"></i>
        <input type="text" placeholder='<?php echo __("Album title");?>
'>
    </div>
    <!-- post album -->

    <!-- post poll -->
    <div class="publisher-meta" data-meta="poll">
        <i class="fa fa-plus fa-fw"></i>
        <input type="text" placeholder='<?php echo __("Add an option");?>
...'>
    </div>
    <div class="publisher-meta" data-meta="poll">
        <i class="fa fa-plus fa-fw"></i>
        <input type="text" placeholder='<?php echo __("Add an option");?>
...'>
    </div>
    <!-- post poll -->

    <!-- post video -->
    <div class="publisher-meta" data-meta="video">
        <i class="fa fa-video-camera fa-fw"></i>
        <?php echo __("Video uploaded successfully");?>

    </div>
    <!-- post video -->

    <!-- post audio -->
    <div class="publisher-meta" data-meta="audio">
        <i class="fa fa-music fa-fw"></i>
        <?php echo __("Audio uploaded successfully");?>

    </div>
    <!-- post audio -->

    <!-- post file -->
    <div class="publisher-meta" data-meta="file">
        <i class="fa fa-file-text-o fa-fw"></i>
        <?php echo __("File uploaded successfully");?>

    </div>
    <!-- post file -->

    <!-- post location -->
    <div class="publisher-meta" data-meta="location">
        <i class="fa fa-map-marker fa-fw"></i>
        <input class="js_geocomplete" type="text" placeholder='<?php echo __("Where are you?");?>
'>
    </div>
    <!-- post location -->

    <!-- post feelings -->
    <div class="publisher-meta feelings" data-meta="feelings">
        <div id="feelings-menu-toggle" data-init-text='<?php echo __("What are you doing?");?>
'><?php echo __("What are you doing?");?>
</div>
        <div id="feelings-data" style="display: none">
            <input type="text" placeholder='<?php echo __("What are you doing?");?>
'>
            <span></span>
        </div>
        <div id="feelings-menu" class="dropdown-menu dropdown-widget">
            <div class="dropdown-widget-body ptb5">
                <div class="js_scroller">
                    <ul class="feelings-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings']->value, 'feeling');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feeling']->value) {
?>
                            <li class="feeling-item js_feelings-add" data-action="<?php echo $_smarty_tpl->tpl_vars['feeling']->value['action'];?>
" data-placeholder="<?php echo __($_smarty_tpl->tpl_vars['feeling']->value['placeholder']);?>
">
                                <div class="icon">
                                    <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['feeling']->value['icon'];?>
"></i>
                                </div>
                                <div class="data">
                                    <?php echo __($_smarty_tpl->tpl_vars['feeling']->value['text']);?>

                                </div>
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                </div>
            </div>
        </div>
        <div id="feelings-types" class="dropdown-menu dropdown-widget">
            <div class="dropdown-widget-body ptb5">
                <div class="js_scroller">
                    <ul class="feelings-list">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feelings_types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                            <li class="feeling-item js_feelings-type" data-type="<?php echo $_smarty_tpl->tpl_vars['type']->value['action'];?>
" data-icon="<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
">
                                <div class="icon">
                                    <i class="twa twa-3x twa-<?php echo $_smarty_tpl->tpl_vars['type']->value['icon'];?>
"></i>
                                </div>
                                <div class="data">
                                    <?php echo __($_smarty_tpl->tpl_vars['type']->value['text']);?>

                                </div>                        
                            </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- post feelings -->

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
            <li class="relative" data-toggle="tooltip" data-placement="top" title='<?php echo __("Add Feelings & Activity");?>
'>
                <span class="js_publisher-feelings">
                    <i class="twa twa-smile"></i>
                </span>
            </li>
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
            <?php if ($_smarty_tpl->tpl_vars['_privacy']->value) {?>
                <!-- privacy -->
                <?php if ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "me") {?>
                <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="me" title='<?php echo __("Shared with: Only Me");?>
'>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="btn-group-icon fa fa-lock"></i> <span class="btn-group-text hidden-xs"><?php echo __("Only Me");?>
</span> <span class="caret"></span>
                    </button>
                <?php } elseif ($_smarty_tpl->tpl_vars['system']->value['default_privacy'] == "friends") {?>
                <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="friends" title='<?php echo __("Shared with: Friends");?>
'>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="btn-group-icon fa fa-users"></i> <span class="btn-group-text hidden-xs"><?php echo __("Friends");?>
</span> <span class="caret"></span>
                    </button>
                <?php } else { ?>
                <div class="btn-group js_publisher-privacy" data-toggle="tooltip" data-placement="top" data-value="public" title='<?php echo __("Shared with: Public");?>
'>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <i class="btn-group-icon fa fa-globe"></i> <span class="btn-group-text hidden-xs"><?php echo __("Public");?>
</span> <span class="caret"></span>
                    </button>
                <?php }?>
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
                        <?php if ($_smarty_tpl->tpl_vars['_handle']->value == 'me') {?>
                            <li>
                                <a href="#" data-title='<?php echo __("Shared with: Only Me");?>
' data-value="me">
                                    <i class="fa fa-lock"></i> <?php echo __("Only Me");?>

                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
                <!-- privacy -->
            <?php }?>
            <button type="button" class="btn btn-primary js_publisher"><?php echo __("Post");?>
</button>
        </div>
        <!-- publisher-buttons -->
    </div>
    <!-- publisher-footer -->
</div><?php }
}
