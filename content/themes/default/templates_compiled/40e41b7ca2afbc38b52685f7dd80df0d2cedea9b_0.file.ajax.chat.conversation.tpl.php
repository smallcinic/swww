<?php
/* Smarty version 3.1.31, created on 2017-12-28 12:47:47
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.chat.conversation.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a44e7f3c589e7_58331995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40e41b7ca2afbc38b52685f7dd80df0d2cedea9b' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.chat.conversation.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ajax.chat.conversation.messages.tpl' => 1,
    'file:_emoji-menu.tpl' => 1,
  ),
),false)) {
function content_5a44e7f3c589e7_58331995 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-default panel-messages" data-cid=<?php echo $_smarty_tpl->tpl_vars['conversation']->value['conversation_id'];?>
>
    <div class="panel-heading clearfix">
        <div class="pull-right flip">
            <a class="btn btn-primary js_chat-start" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages/new">
                <i class="fa fa-comment-o"></i>
                <?php echo __("New Message");?>

            </a>
            <button type="button" class="btn btn-danger js_delete-conversation">
                <i class="fa fa-trash-o"></i>
                <?php echo __("Delete");?>

            </button>
        </div>
        <div class="mt5">
            <?php if (!$_smarty_tpl->tpl_vars['conversation']->value['multiple_recipients']) {?>
                <?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_html'];?>

            <?php } else { ?>
                <span title="<?php echo $_smarty_tpl->tpl_vars['conversation']->value['name_list'];?>
"><?php echo $_smarty_tpl->tpl_vars['conversation']->value['name'];?>
</span>
            <?php }?>
        </div>
    </div>
    <div class="panel-body">
        <div class="chat-conversations js_scroller" data-slimScroll-height="367px" data-slimScroll-start="bottom">
            <?php $_smarty_tpl->_subTemplateRender('file:ajax.chat.conversation.messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

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
</div><?php }
}
