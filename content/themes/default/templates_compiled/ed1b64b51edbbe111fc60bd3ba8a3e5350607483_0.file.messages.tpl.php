<?php
/* Smarty version 3.1.31, created on 2017-12-28 12:47:37
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/messages.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a44e7e96cacf9_85604590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed1b64b51edbbe111fc60bd3ba8a3e5350607483' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/messages.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:__feeds_conversation.tpl' => 1,
    'file:_emoji-menu.tpl' => 1,
    'file:ajax.chat.conversation.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_5a44e7e96cacf9_85604590 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- page content -->
<div class="container mt20 offcanvas">
    <div class="row">

        <!-- threads -->
        <div class="col-sm-4 offcanvas-sidebar">
            <div class="panel panel-default panel-conversations">
                <div class="panel-heading">
                     <?php echo __("Inbox");?>

                </div>
                <div class="panel-body js_live-messages-alt">
                    <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) > 0) {?>
                        <div class="js_scroller" data-slimScroll-height="100%">
                            <ul>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user']->value->_data['conversations'], '_conversation');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['_conversation']->value) {
?>
                                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('conversation'=>$_smarty_tpl->tpl_vars['_conversation']->value), 0, true);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </ul>

                            <?php if (count($_smarty_tpl->tpl_vars['user']->value->_data['conversations']) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
                            <!-- see-more -->
                            <div class="alert alert-post see-more small mlr5 js_see-more" data-get="conversations">
                                <span><?php echo __("Load Older Threads");?>
</span>
                                <div class="loader loader_small x-hidden"></div>
                            </div>
                            <!-- see-more -->
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <!-- threads -->

        <!-- conversation -->
        <div class="col-sm-8 offcanvas-mainbar js_conversation-container">
            <?php if ($_smarty_tpl->tpl_vars['view']->value == "new") {?>
                <div class="panel panel-default panel-messages fresh">
                    <div class="panel-heading clearfix">
                        <div class="mt5">
                            <?php echo __("New Message");?>

                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="chat-conversations js_scroller" data-slimScroll-height="367px"></div>
                        <div class="chat-to clearfix js_autocomplete">
                            <div class="to"><?php echo __("To");?>
:</div>
                            <ul class="tags"></ul>
                            <div class="typeahead">
                                <input type="text" size="1" autofocus>
                            </div>
                        </div>
                        <div class="chat-attachments attachments clearfix x-hidden">
                            <ul>
                                <li class="loading">
                                    <div class="loader loader_small"></div>
                                </li>
                            </ul>
                        </div>
                        <div class="chat-form-container">
                            <div class="x-form chat-form">
                                <div class="chat-form-message">
                                    <textarea class="js_autosize js_post-message" placeholder='<?php echo __("Write a message");?>
'></textarea>
                                </div>
                                <div class="x-form-tools">
                                    <div class="x-form-tools-attach">
                                        <i class="fa fa-camera js_x-uploader" data-handle="chat"></i>
                                    </div>
                                    <div class="x-form-tools-emoji js_emoji-menu-toggle">
                                        <i class="fa fa-smile-o fa-lg"></i>
                                    </div>
                                    <?php $_smarty_tpl->_subTemplateRender('file:_emoji-menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['conversation']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.conversation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php } else { ?>
                    <div class="panel panel-default panel-messages empty">
                        <div class="panel-heading clearfix">
                            <div class="pull-right flip">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new" class="btn btn-default js_chat-start">
                                    <i class="fa fa-comment-o"></i>
                                    <?php echo __("New Message");?>

                                </a>
                            </div>
                            <div class="mt5 text-muted"><?php echo __("No Selection");?>
</div>
                        </div>
                        <div class="panel-body">
                            <h4><?php echo __("No Conversation Selected");?>
</h4>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new" class="text-link js_chat-start"><?php echo __("New Message");?>
</a>
                        </div>
                    </div>
                <?php }?>
            <?php }?>
        </div>
        <!-- conversation -->

    </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
