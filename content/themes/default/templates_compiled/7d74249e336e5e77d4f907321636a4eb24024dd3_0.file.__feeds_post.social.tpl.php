<?php
/* Smarty version 3.1.31, created on 2017-12-27 16:50:52
  from "/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_post.social.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a43cf6c12a639_04382170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d74249e336e5e77d4f907321636a4eb24024dd3' => 
    array (
      0 => '/home/admin/web/sngine.hplus.su/public_html/content/themes/default/templates/__feeds_post.social.tpl',
      1 => 1513785863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a43cf6c12a639_04382170 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>
    <div class="post-sharing x-hidden">
        <span class="btn btn-sm btn-default js_share" data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
            <i class="fa fa-share-square-o icon"></i>
        </span>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-facebook" target="_blank">
            <i class="fa fa-facebook"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-twitter" target="_blank">
            <i class="fa fa-twitter"></i>
        </a>
        <a href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-google" target="_blank">
            <i class="fa fa-google"></i>
        </a>
        <a href="http://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-vk" target="_blank">
            <i class="fa fa-vk"></i>
        </a>
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-linkedin" target="_blank">
            <i class="fa fa-linkedin"></i>
        </a>
        <a href="http://www.tumblr.com/share/link?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-tumblr" target="_blank">
            <i class="fa fa-tumblr"></i>
        </a>
        <a href="http://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-reddit" target="_blank">
            <i class="fa fa-reddit"></i>
        </a>
        <a href="http://pinterest.com/pin/create/button/?url=http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-pinterest" target="_blank">
            <i class="fa fa-pinterest"></i>
        </a>
        <a href="http://www.ok.ru/dk?st.cmd=addShare&st.s=1&st._surl=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-social-icon btn-odnoklassniki" target="_blank">
            <i class="fa fa-odnoklassniki"></i>
        </a>
    </div>
<?php }
}
}
