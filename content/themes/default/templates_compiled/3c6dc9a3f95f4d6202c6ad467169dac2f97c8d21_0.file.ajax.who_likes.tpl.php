<?php
/* Smarty version 3.1.31, created on 2018-03-05 17:08:33
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.who_likes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a9d799143bc69_35737860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c6dc9a3f95f4d6202c6ad467169dac2f97c8d21' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/ajax.who_likes.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_user.tpl' => 1,
  ),
),false)) {
function content_5a9d799143bc69_35737860 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h5 class="modal-title"><?php echo __("People Who Like This");?>
</h5>
</div>
<div class="modal-body">
    <?php if ($_smarty_tpl->tpl_vars['users']->value) {?>
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, '_user');
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

        <?php if (count($_smarty_tpl->tpl_vars['users']->value) >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
        <!-- see-more -->
        <div class="alert alert-info see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
            <span><?php echo __("See More");?>
</span>
            <div class="loader loader_small x-hidden"></div>
        </div>
        <!-- see-more -->
        <?php }?>
    <?php } else { ?>
        <p class="text-center text-muted">
            <?php echo __("No people liked this");?>

        </p>
    <?php }?>
    
</div>
<?php }
}
