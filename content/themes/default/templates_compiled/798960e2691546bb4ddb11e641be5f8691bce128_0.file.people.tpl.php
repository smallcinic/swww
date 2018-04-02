<?php
/* Smarty version 3.1.31, created on 2017-12-27 17:20:09
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/people.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43d64947b392_71183112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '798960e2691546bb4ddb11e641be5f8691bce128' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/people.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:__feeds_user.tpl' => 4,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a43d64947b392_71183112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- left panel -->
        <div class="col-sm-4 col-md-2 offcanvas-sidebar">
            <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
        <!-- left panel -->

        <!-- right panel -->
        <div class="col-sm-8 col-md-10 offcanvas-mainbar">

            <!-- tabs -->
            <div class="box-tabs-wrapper clearfix">
                <ul class="nav pull-left flip">
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "find") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people"><?php echo __("Discover");?>
</a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "friend_requests") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/friend_requests">
                            <?php echo __("Friend Requests");?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_count'] > 0) {?>
                                <span class="label label-danger ml5"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_count'];?>
</span>
                            <?php }?>
                        </a>
                    </li>
                    <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "sent_requests") {?>class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/sent_requests">
                            <?php echo __("Sent Requests");?>

                            <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent_count'] > 0) {?>
                                <span class="label label-info ml5"><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent_count'];?>
</span>
                            <?php }?>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- tabs -->

            <!-- content -->
            <div class="row">
                <!-- left panel -->
                <div class="col-md-4 col-md-push-8">
                    <!-- search panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-search"></i> <strong><?php echo __("Search");?>
</strong>
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/people/find" method="post">
                                <div class="form-group">
                                    <label><?php echo __("Keyword");?>
</label>
                                    <input type="text" class="form-control" name="query">
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Gender");?>
</label>
                                    <select class="form-control" name="gender">
                                        <option value="any"><?php echo __("Any");?>
</option>
                                        <option value="male"><?php echo __("Male");?>
</option>
                                        <option value="female"><?php echo __("Female");?>
</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Relationship");?>
</label>
                                    <select class="form-control" name="relationship">
                                        <option value="any"><?php echo __("Any");?>
</option>
                                        <option value="single"><?php echo __("Single");?>
</option>
                                        <option value="relationship"><?php echo __("In a relationship");?>
</option>
                                        <option value="married"><?php echo __("Married");?>
</option>
                                        <option value="complicated"><?php echo __("It's complicated");?>
</option>
                                        <option value="separated"><?php echo __("Separated");?>
</option>
                                        <option value="divorced"><?php echo __("Divorced");?>
</option>
                                        <option value="widowed"><?php echo __("Widowed");?>
</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><?php echo __("Online Status");?>
</label>
                                    <select class="form-control" name="status">
                                        <option value="any"><?php echo __("Any");?>
</option>
                                        <option value="online"><?php echo __("Online");?>
</option>
                                        <option value="offline"><?php echo __("Offline");?>
</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit"><?php echo __("Search");?>
</button>
                            </form>
                        </div>
                    </div>
                    <!-- search panel -->

                    <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
                <!-- left panel -->

                <!-- right panel -->
                <div class="col-md-8 col-md-pull-4">
                    <div class="panel panel-default">
                        <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>
                            <div class="panel-heading light">
                                <strong><?php echo __("People You May Know");?>
</strong>
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['people']->value) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"add"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No people available");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if (count($_smarty_tpl->tpl_vars['people']->value) >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="new_people">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "find") {?>
                            <div class="panel-heading light">
                                <strong><?php echo __("Search Results");?>
</strong>
                            </div>
                            <div class="panel-body">
                                <?php if (count($_smarty_tpl->tpl_vars['people']->value) > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['people']->value, '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>$_smarty_tpl->tpl_vars['_user']->value['connection']), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No people available for your search");?>

                                    </p>
                                <?php }?>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "friend_requests") {?>
                            <div class="panel-heading light">
                                <strong><?php echo __("Respond to Your Friend Request");?>
</strong>
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_count'] > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"request"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No new requests");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="friend_requests">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == "sent_requests") {?>
                            <div class="panel-heading light">
                                <strong><?php echo __("Friend Requests Sent");?>
</strong>
                            </div>
                            <div class="panel-body">
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent_count'] > 0) {?>
                                    <ul>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent'], '_user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_user']->value) {
?>
                                        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_user.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_connection'=>"cancel"), 0, true);
?>

                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                    </ul>
                                <?php } else { ?>
                                    <p class="text-center text-muted">
                                        <?php echo __("No new requests");?>

                                    </p>
                                <?php }?>

                                <!-- see-more -->
                                <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['friend_requests_sent_count'] >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                                    <div class="alert alert-info see-more js_see-more" data-get="friend_requests_sent">
                                        <span><?php echo __("See More");?>
</span>
                                        <div class="loader loader_small x-hidden"></div>
                                    </div>
                                <?php }?>
                                <!-- see-more -->
                            </div>
                        <?php }?>
                    </div>
                </div>
                <!-- right panel -->
            </div>
            <!-- content -->

        </div>
        <!-- right panel -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
