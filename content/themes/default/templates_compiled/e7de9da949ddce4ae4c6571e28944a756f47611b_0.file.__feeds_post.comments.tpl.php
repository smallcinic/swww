<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:50:52
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_post.comments.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cf6c168363_89009118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7de9da949ddce4ae4c6571e28944a756f47611b' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_post.comments.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_comment.tpl' => 2,
    'file:__feeds_comment.form.tpl' => 2,
  ),
),false)) {
function content_5a43cf6c168363_89009118 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="post-comments">

    <?php if ($_smarty_tpl->tpl_vars['_is_photo']->value) {?>

        <!-- previous comments -->
        <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
            <div class="pb10 text-center js_see-more" data-get="photo_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['photo']->value['photo_id'];?>
" data-remove="true">
                <span class="text-link">
                    <i class="fa fa-comment-o"></i>
                    <?php echo __("View previous comments");?>

                </span>
                <div class="loader loader_small x-hidden"></div>
            </div>
        <?php }?>
        <!-- previous comments -->

        <!-- comments -->
        <ul class="js_comments">
            <?php if ($_smarty_tpl->tpl_vars['photo']->value['comments'] > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo']->value['photo_comments'], 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </ul>
        <!-- comments -->

        <!-- post a comment -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'photo','_id'=>$_smarty_tpl->tpl_vars['photo']->value['photo_id']), 0, false);
?>

        <?php }?>
        <!-- post a comment -->

    <?php } else { ?>

        <!-- previous comments -->
        <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] >= $_smarty_tpl->tpl_vars['system']->value['min_results']) {?>
            <div class="pb10 text-center js_see-more" data-get="post_comments" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" data-remove="true">
                <span class="text-link">
                    <i class="fa fa-comment-o"></i>
                    <?php echo __("View previous comments");?>

                </span>
                <div class="loader loader_small x-hidden"></div>
            </div>
        <?php }?>
        <!-- previous comments -->

        <!-- comments -->
        <ul class="js_comments">
            <?php if ($_smarty_tpl->tpl_vars['post']->value['comments'] > 0) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['post_comments'], 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_comment'=>$_smarty_tpl->tpl_vars['comment']->value), 0, true);
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

            <?php }?>
        </ul>
        <!-- comments -->

        <!-- post a comment -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:__feeds_comment.form.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_handle'=>'post','_id'=>$_smarty_tpl->tpl_vars['post']->value['post_id']), 0, true);
?>

        <?php }?>
        <!-- post a comment -->

    <?php }?>

</div><?php }
}
