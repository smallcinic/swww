<?php
/* Smarty version 3.1.31, created on 2018-03-05 20:12:04
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.album.edit_title.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9da49481e275_26404415',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef5b8e0b8723b8f6458f3fa88ee8f97b1f2a47bc' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.album.edit_title.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9da49481e275_26404415 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("Edit Album");?>
</h5>
</div>
<form class="js_ajax-forms" data-url="albums/action.php">
    <div class="modal-body">
        <div class="form-group">
            <label><?php echo __("Title");?>
</label>
            <input type="hidden" name="do" value="edit_album">
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['album_id'];?>
">
            <input name="title" type="text" value="<?php echo $_smarty_tpl->tpl_vars['album']->value['title'];?>
" class="form-control" required autofocus>
        </div>
        <!-- error -->
        <div class="alert alert-danger mb0 mt10 x-hidden" role="alert"></div>
        <!-- error -->
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    </div>
</form><?php }
}
