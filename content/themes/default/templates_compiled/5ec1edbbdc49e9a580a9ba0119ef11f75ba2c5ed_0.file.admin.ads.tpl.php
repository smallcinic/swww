<?php
/* Smarty version 3.1.31, created on 2017-12-27 18:41:44
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.ads.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43e968534528_88483773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ec1edbbdc49e9a580a9ba0119ef11f75ba2c5ed' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/admin.ads.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43e968534528_88483773 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/admin/web/sngine.hplus.su/public_html/includes/libs/Smarty/plugins/modifier.date_format.php';
?>
<div class="panel panel-default">
    <div class="panel-heading with-icon">
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
            <div class="pull-right flip">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/ads/add" class="btn btn-primary">
                    <i class="fa fa-plus"></i> <?php echo __("Add New Ads");?>

                </a>
            </div>
        <?php }?>
        <i class="fa fa-usd pr5 panel-icon"></i>
        <strong><?php echo __("Ads");?>
</strong>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?> &rsaquo; <strong><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</strong><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?> &rsaquo; <strong><?php echo __("Add New");?>
</strong><?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['sub_view']->value == '') {?>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover js_dataTable">
                    <thead>
                        <tr>
                            <th><?php echo __("ID");?>
</th>
                            <th><?php echo __("Title");?>
</th>
                            <th><?php echo __("Place");?>
</th>
                            <th><?php echo __("Date");?>
</th>
                            <th><?php echo __("Actions");?>
</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "home") {?><i class='fa fa-home fa-fw mr5'></i><?php echo __("Home  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "search") {?><i class='fa fa-search fa-fw mr5'></i><?php echo __("Search  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "people") {?><i class='fa fa-users fa-fw mr5'></i><?php echo __("Discover People  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "notifications") {?><i class='fa fa-bell fa-fw mr5'></i><?php echo __("Notifications  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "post") {?><i class='fa fa-file-powerpoint-o fa-fw mr5'></i><?php echo __("Post  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "photo") {?><i class='fa fa-picture-o fa-fw mr5'></i><?php echo __("Photo  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "directory") {?><i class='fa fa-th-list fa-fw mr5'></i><?php echo __("Directory  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "market") {?><i class='fa fa-shopping-bag fa-fw mr5'></i><?php echo __("Market  Page");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_1") {?><i class='fa fa-newspaper-o fa-fw mr5'></i><?php echo __("Posts Feed");?>
 1<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_2") {?><i class='fa fa-newspaper-o fa-fw mr5'></i><?php echo __("Posts Feed");?>
 2<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "newfeed_3") {?><i class='fa fa-newspaper-o fa-fw mr5'></i><?php echo __("Posts Feed");?>
 3<?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "header") {?><i class='fa fa-chevron-circle-up fa-fw mr5'></i><?php echo __("Header");
}?>
                                <?php if ($_smarty_tpl->tpl_vars['row']->value['place'] == "footer") {?><i class='fa fa-chevron-circle-down fa-fw mr5'></i><?php echo __("Footer");
}?>
                            </td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['time'],"%e %B %Y");?>
</td>
                            <td>
                                <button data-toggle="tooltip" data-placement="top" title='<?php echo __("Delete");?>
' class="btn btn-xs btn-danger js_admin-deleter" data-handle="ads" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                                <a data-toggle="tooltip" data-placement="top" title='<?php echo __("Edit");?>
' href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['ads_id'];?>
" class="btn btn-xs btn-primary">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </tbody>
                </table>
            </div>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "edit") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/ads.php?do=edit&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['ads_id'];?>
">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="place">
                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "home") {?>selected<?php }?> value="home" data-content="<div class='option'><div class='icon'><i class='fa fa-home fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Home');?>
</b><br><?php echo __('Appears on the right panel of home page');?>
.
                            </div></div>"><?php echo __("Home");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "search") {?>selected<?php }?> value="search" data-content="<div class='option'><div class='icon'><i class='fa fa-search fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Search');?>
</b><br><?php echo __('Appears on the right panel of search page');?>
.
                            </div></div>"><?php echo __("Search");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "people") {?>selected<?php }?> value="people" data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Discover People');?>
</b><br><?php echo __('Appears on the right panel of discover people page');?>
.
                            </div></div>"><?php echo __("Discover People");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "notifications") {?>selected<?php }?> value="notifications" data-content="<div class='option'><div class='icon'><i class='fa fa-bell fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Notifications');?>
</b><br><?php echo __('Appears on the right panel of notifications page');?>
.
                            </div></div>"><?php echo __("Notifications");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "post") {?>selected<?php }?> value="post" data-content="<div class='option'><div class='icon'><i class='fa fa-file-powerpoint-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Post');?>
</b><br><?php echo __('Appears on the right panel of post page');?>
.
                            </div></div>"><?php echo __("Post");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "photo") {?>selected<?php }?> value="photo" data-content="<div class='option'><div class='icon'><i class='fa fa-picture-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Photo');?>
</b><br><?php echo __('Appears on the right panel of photo page');?>
.
                            </div></div>"><?php echo __("Photo");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "directory") {?>selected<?php }?> value="directory" data-content="<div class='option'><div class='icon'><i class='fa fa-th-list fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Directory');?>
</b><br><?php echo __('Appears on the right panel of directory');?>
.
                            </div></div>"><?php echo __("Directory");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "market") {?>selected<?php }?> value="market" data-content="<div class='option'><div class='icon'><i class='fa fa-shopping-bag fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Market');?>
</b><br><?php echo __('Appears on the top of products list');?>
.
                            </div></div>"><?php echo __("Market");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_1") {?>selected<?php }?> value="newfeed_1" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Posts Feed');?>
 1</b><br><?php echo __('Appears after');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
 <?php echo __('posts are loaded, between the posts');?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 1</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_2") {?>selected<?php }?> value="newfeed_2" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Posts Feed');?>
 2</b><br><?php echo __('Appears after');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*2;?>
 <?php echo __('posts are loaded, between the posts');?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 2</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "newfeed_3") {?>selected<?php }?> value="newfeed_3" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Posts Feed');?>
 3</b><br><?php echo __('Appears after');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*3;?>
 <?php echo __('posts are loaded, between the posts');?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 3</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "header") {?>selected<?php }?> value="header" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-up fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Header');?>
</b><br><?php echo __('Appears on all pages right after the header');?>
.
                            </div></div>"><?php echo __("Header");?>
</option>

                            <option <?php if ($_smarty_tpl->tpl_vars['data']->value['place'] == "footer") {?>selected<?php }?> value="footer" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-down fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Footer');?>
</b><br><?php echo __('Appears on all pages right before the footer');?>
.
                            </div></div>"><?php echo __("Footer");?>
</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="8"><?php echo $_smarty_tpl->tpl_vars['data']->value['code'];?>
</textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['sub_view']->value == "add") {?>
        <div class="panel-body">
            <form class="js_ajax-forms form-horizontal" data-url="admin/ads.php?do=add">
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Title");?>

                    </label>
                    <div class="col-sm-9">
                        <input class="form-control" name="title">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("Place");?>

                    </label>
                    <div class="col-sm-9">
                        <select class="form-control selectpicker" name="place">
                            <option value="home" data-content="<div class='option'><div class='icon'><i class='fa fa-home fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Home');?>
</b><br><?php echo __('Appears on the right panel of home page');?>
.
                            </div></div>"><?php echo __("Home");?>
</option>

                            <option value="search" data-content="<div class='option'><div class='icon'><i class='fa fa-search fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Search');?>
</b><br><?php echo __('Appears on the right panel of search page');?>
.
                            </div></div>"><?php echo __("Search");?>
</option>

                            <option value="people" data-content="<div class='option'><div class='icon'><i class='fa fa-users fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Discover People');?>
</b><br><?php echo __('Appears on the right panel of discover people page');?>
.
                            </div></div>"><?php echo __("Discover People");?>
</option>

                            <option value="notifications" data-content="<div class='option'><div class='icon'><i class='fa fa-bell fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Notifications');?>
</b><br><?php echo __('Appears on the right panel of notifications page');?>
.
                            </div></div>"><?php echo __("Notifications");?>
</option>

                            <option value="post" data-content="<div class='option'><div class='icon'><i class='fa fa-file-powerpoint-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Post');?>
</b><br><?php echo __('Appears on the right panel of post page');?>
.
                            </div></div>"><?php echo __("Post");?>
</option>

                            <option value="photo" data-content="<div class='option'><div class='icon'><i class='fa fa-picture-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Photo');?>
</b><br><?php echo __('Appears on the right panel of photo page');?>
.
                            </div></div>"><?php echo __("Photo");?>
</option>

                            <option value="directory" data-content="<div class='option'><div class='icon'><i class='fa fa-th-list fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Directory');?>
</b><br><?php echo __('Appears on the right panel of directory');?>
.
                            </div></div>"><?php echo __("Directory");?>
</option>

                            <option value="market" data-content="<div class='option'><div class='icon'><i class='fa fa-shopping-bag fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Market');?>
</b><br><?php echo __('Appears on the top of products list');?>
.
                            </div></div>"><?php echo __("Market");?>
</option>

                            <option value="newfeed_1" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Posts Feed');?>
 1</b><br><?php echo __('Appears after');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results'];?>
 <?php echo __('posts are loaded, between the posts');?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 1</option>

                            <option value="newfeed_2" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Posts Feed');?>
 2</b><br><?php echo __('Appears after');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*2;?>
 <?php echo __('posts are loaded, between the posts');?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 2</option>

                            <option value="newfeed_3" data-content="<div class='option'><div class='icon'><i class='fa fa-newspaper-o fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Posts Feed');?>
 3</b><br><?php echo __('Appears after');?>
 <?php echo $_smarty_tpl->tpl_vars['system']->value['max_results']*3;?>
 <?php echo __('posts are loaded, between the posts');?>
.
                            </div></div>"><?php echo __("Posts Feed");?>
 3</option>

                            <option value="header" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-up fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Header');?>
</b><br><?php echo __('Appears on all pages right after the header');?>
.
                            </div></div>"><?php echo __("Header");?>
</option>

                            <option value="footer" data-content="<div class='option'><div class='icon'><i class='fa fa-chevron-circle-down fa-fw fa-lg'></i></div><div class='text'><b><?php echo __('Footer');?>
</b><br><?php echo __('Appears on all pages right before the footer');?>
.
                            </div></div>"><?php echo __("Footer");?>
</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label text-left">
                        <?php echo __("HTML");?>

                    </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="message" rows="8"></textarea>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary"><?php echo __("Save Changes");?>
</button>
                    </div>
                </div>

                <!-- success -->
                <div class="alert alert-success mb0 mt10 x-hidden" role="alert"></div>
                <!-- success -->

                <!-- error -->
                <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
                <!-- error -->
            </form>
        </div>
    <?php }?>
</div><?php }
}
