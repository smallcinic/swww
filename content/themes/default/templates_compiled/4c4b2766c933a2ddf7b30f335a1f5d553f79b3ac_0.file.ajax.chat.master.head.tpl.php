<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:40:36
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.chat.master.head.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cd04a263a8_92112917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c4b2766c933a2ddf7b30f335a1f5d553f79b3ac' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.chat.master.head.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43cd04a263a8_92112917 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['offline']->value) {?>

    <div class="chat-head-title">
        <i class="fa fa-user-secret"></i>
        <?php echo __("Offline");?>

    </div>

<?php } else { ?>

    <div class="chat-head-title">
        <i class="fa fa-circle"></i>
        (<?php echo count($_smarty_tpl->tpl_vars['online_friends']->value);?>
)
    </div>

<?php }
}
}
